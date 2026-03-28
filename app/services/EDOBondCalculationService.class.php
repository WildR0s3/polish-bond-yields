<?php

namespace app\services;

use PDOException;
use core\App;
use core\Message;
use core\Utils;
use core\ParamUtils;
use core\RoleUtils;
use core\Validator;
use app\forms\BondForm;
use core\SessionUtils;
use app\models\EDOObject;

   # TODO proceed with calculations of other bond types EDO and ROR DOR
class EDOBondCalculationService extends BondWrapper {
      public $EDO_bond_user_data;
      public $EDO_array;


      public function __construct() {
        $this->logged_user = SessionUtils::loadObject('logged_user', $keep = true);
        $this->EDO_array = array();
        $this->grouped_bonds = [];
    }

      public function __invoke() {
        $this->retrieve_EDO_bonds();
        $this->calculate_interest_EDO();
        return $this;
    }

      public function retrieve_EDO_bonds() {
    
        try {
            $this->EDO_bond_user_data = App::getDB()->select("holding" , [
                   "[>]bond"                    => ["bond_id_bond"                                                   => "id_bond"], 
                   "[>]inflation_index_bond"    => ["bond.id_bond"                                                   => "bond_id_bond"],
                   "[>]inflation_reading"       => ["inflation_index_bond.inflation_reading_id_inflation_reading"    => "id_inflation_reading"]
                   ], [
                    "bond.id_bond",
                    "bond.bond_type",
                    "bond.period_fixed_rate",
                    "bond.margin",
                    "bond.penalty",
                    "holding.id_holding",
                    "holding.purchase_date",
                    "holding.value",
                    "inflation_reading.reading_date",
                    "inflation_reading.reading_value"
                   ], [
                    "holding.user_id_user"  => $this->logged_user->user_id,
                    "bond.bond_type"        => "EDO"
                   ]
             
        );
        } catch (PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
    }


   public function group_by_id() {
        foreach ($this->EDO_bond_user_data as $EDObond) {
            $bond_id = $EDObond['id_bond'];
            $this->grouped_bonds[$bond_id][] = $EDObond;
        }
    }


   public function calculate_percentage_rate(&$current_bond) {
        $i = 0;
        foreach ($this->readings_array as $reading) {
            if ($i == 0) {
                $current_bond->calculated_percentage_rate[$i] = $this->percentage_to_float($reading["period_fixed_rate"]);
                $current_bond->gross_percentage_returns[$i] = $reading["period_fixed_rate"];
            }
            $current_bond->calculated_percentage_rate[$i+1] = $this->percentage_to_float($reading["margin"] + $reading["reading_value"]);    
            $current_bond->gross_percentage_returns[$i+1] = $reading["margin"] + $reading["reading_value"];
            $i++;    
            }   
    }

    # TODO correct calulation of net interest
   public function calculate_interest_EDO() {
        $this->group_by_id();
        $today = new \DateTime('now');
        $today->setTime(0, 0, 0);
        foreach ($this->grouped_bonds as $bond_id => $this->readings_array) {
            #TODO add nested loop as for TOS to account for multiple holdings with same bond_id
            $current_bond = new EDOObject;
            $current_bond->purchase_date = new  \DateTime($this->readings_array[0]['purchase_date']);
            $current_bond->id_holding = $this->readings_array[0]['id_holding'];
            $current_end_of_period = clone $current_bond->purchase_date;
            $current_bond->value = $this->readings_array[0]['value'];
            $current_bond->bond_type = $this->readings_array[0]['bond_type'];
            $this->calculate_percentage_rate($current_bond);
            for ($i = 0; $i < $current_bond->periods; $i++) {
               //  $current_bond->calculated_percentage_rate[$i] = $this->percentage_to_float($this->readings_array[0]["period_fixed_rate"]);
               //  $current_bond->gross_percentage_returns[$i] = $this->readings_array[0]["period_fixed_rate"];
                if ($i == 0) {
                    $current_bond->gross_interests[$i] = ($current_bond->value * $current_bond->calculated_percentage_rate[$i]) - $current_bond->value;
                    $current_bond->gross_accumulated_interest[$i] = $current_bond->gross_interests[$i];
                } else {
                   $current_bond->gross_accumulated_interest[$i] = $current_bond->gross_interests[$i] + $current_bond->gross_accumulated_interest[$i-1];
                  $current_bond->gross_interests[$i] = (($current_bond->gross_accumulated_interest[$i-1] + $current_bond->value) * $current_bond->calculated_percentage_rate[$i]) - $current_bond->value - $current_bond->gross_accumulated_interest[$i-1];
                } 

                $current_bond->net_interests[$i] = round($current_bond->gross_interests[$i] * 0.81, 2); # possibly change it to have it dunamically assigned form DB, if polish tax rate will change in the future
                $current_bond->net_daily_period_interest[$i] =  round($current_bond->net_interests[$i] / 365, 4);

                $current_end_of_period->modify('+1 year');
                if ($today <= $current_bond->purchase_date) {
                    $current_bond->net_current_returns[$i] = round(0,4);
                } elseif ($today > $current_bond->purchase_date) {
                      if ($today >= $current_end_of_period) {
                        $current_bond->net_current_returns[$i] = $current_bond->net_interests[$i];
                    } else {
                        $begginig_of_current_period = clone $current_end_of_period;
                        $begginig_of_current_period->modify('-1 year');
                        if ($today >= $begginig_of_current_period) {
                            $year_days = $begginig_of_current_period->diff($current_end_of_period)->days;
                            $passed_days = $begginig_of_current_period->diff($today)->days;
                            $current_bond->net_current_returns[$i] = round($current_bond->net_interests[$i] * ($passed_days/$year_days), 2);
                        } else {
                            $current_bond->net_current_returns[$i] = round(0,4);
                        }
                       
                    }
                }        
               
            }

            $current_bond->net_total_interest = array_sum($current_bond->net_interests);
            $current_bond->net_current_total_interest = array_sum($current_bond->net_current_returns);
            $current_bond->purchase_date = $current_bond->purchase_date->format('d.m.Y');
            $current_bond->display_id = self::$display_id;
            self::$display_id++;
            $this->EDO_array[] = $current_bond;
            
        }
    }

   public function percentage_to_float($value) {
        return round(($value+100)/100, 4);
    }


 }