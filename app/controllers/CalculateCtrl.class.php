<?php

namespace app\controllers;

use PDOException;
use core\App;
use core\Message;
use core\Utils;
use core\ParamUtils;
use app\forms\CalcForm;

class CalculateCtrl {
    private $bond_data;
    private $margin;
    private $period_fixed_rate;
    private $interests;
    private $net_interests;


    public function __construct() {
        $this->form = new CalcForm();
    }


    public function action_calculate() {
        
        $this->getParams();

        $data_test_1 = App::getDB()->select("bond", "*", ["bond_type" => $this->form->bond_type]);
        try {
            $this->bond_data = App::getDB()->select("bond" ,
                ["margin", "period_fixed_rate"],
                [
                    "AND" => [
                        "bond_type" => $this->form->bond_type,
                        "emission_date[=]" => $this->first_day
                ]
                ]
        );
        } catch (PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

        $this->calculate_interest_tos();

        App::getSmarty()->assign('principal', $this->form->kwota);
        App::getSmarty()->assign('purchase_date', $this->parsed_date);
        App::getSmarty()->assign('bond_type', $this->form->bond_type);
        App::getSmarty()->assign('period_fixed_rate', $this->period_fixed_rate);
        App::getSmarty()->assign('interest_gained', $this->interest_gained);
        App::getSmarty()->assign('gross_interests', $this->interests);
        App::getSmarty()->assign('net_interests',   $this->net_interests);
        App::getSmarty()->assign('daily_net_interests',$this->daily_net_interests);
        App::getSmarty()->display("public_calculate_view.tpl");
    }

    # TODO correct interest gained to be dynamic, how much you gained
    # TODO do calculations for each type of bond
    function calculate_interest_tos() {
        $margin = $this->bond_data[0]["margin"];
        $period_fixed_rate = $this->bond_data[0]["period_fixed_rate"];
        
        $capitals = array();
        $interests = array();
        
        $capitals[] = $this->form->kwota;
        for ($i = 0; $i < 3; $i++) {
            $capitals[] =  $capitals[$i] * ($period_fixed_rate + 100)/100;
            $interests[] = round($capitals[$i+1] - $capitals[$i],2);
        }
        $net_interests = array();
        $daily_net_interest = array();
        $interest_gained = 0; // to be changed to be calculated dynamically based on date
        foreach ($interests as $gross) {
        $interest = round($gross * 0.81, 2);
           $net_interests[] = $interest;
           $interest_gained += $interest;
           $daily_net_interests[] = round($interest/365,4);
        }

        $this->interests = $interests;
        $this->net_interests = $net_interests;
        $this->daily_net_interests = $daily_net_interests;
        $this->period_fixed_rate = $period_fixed_rate;
        $this->interest_gained = $interest_gained;
    }


    function getParams() {
       $this->form->kwota = intval(ParamUtils::getFromPost('kwota'));
       $this->form->date = ParamUtils::getFromPost('purchase_date');
       $this->form->bond_type = ParamUtils::getFromPost('bond_type');

       $this->parsed_date = date('Y-m', strtotime($this->form->date));
       $this->first_day = date('Y-m-01', strtotime($this->parsed_date));

    }
}
