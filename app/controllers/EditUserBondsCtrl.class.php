<?php

namespace app\controllers;

use PDOException;
use core\App;
use core\Message;
use core\Utils;
use core\ParamUtils;
use core\RoleUtils;
use core\SessionUtils;
use core\Validator;
use app\forms\UserBondForm;

class EditUserBondsCtrl {
    private $edited_bond;
    private $bond_data;
    private $id_holding;

    public function __construct() {
        $this->form = new UserBondForm();
        $this->v = new Validator();
        $this->logged_user = SessionUtils::loadObject('logged_user', $keep = true);
    }


    public function action_edit_user_bonds() {
        
        $this->id_holding = $this->v->validateFromPost("id_holding", [
            'trim'              => true,
            'required'          => true,
            'int'               => true
        ]);
      
        $this->retrieve_edited_bond();

        $this->generateView();
    }


    public function action_make_edition() {

        $this->id_holding = $this->v->validateFromPost("id_holding", [
            'trim'              => true,
            'required'          => true,
            'int'               => true
        ]);
      
        $this->retrieve_edited_bond();
        if ($this->validate()) {
            if ($this->update_user_bonds()) {
              App::getRouter()->redirectTo('display_user_bonds');
            } else {
                $this->generateView();
            }
        }
    }
    # TODO do deletion
    public function action_make_deletion() {
        $this->id_holding = $this->v->validateFromPost("id_holding", [
            'trim'              => true,
            'required'          => true,
            'int'               => true
        ]);
        if ($this->delete_user_bonds()) {
            App::getRouter()->redirectTo('display_user_bonds');
        } else {
            $this->generateView();
        }
    }

    # TODO finish this probably split it into 2 seperate actions, display view and actually change view
    public function update_user_bonds() {
        $original_purchase_date = new \DateTime($this->edited_bond["purchase_date"]);
        $this->first_day_edited = $this->form->purchase_date->format('Y-m-01');
        $this->first_day_original = $original_purchase_date->format('Y-m-01');
        $update_data = [];
        if ($original_purchase_date != $this->form->purchase_date) {
            $update_data['purchase_date'] = $this->form->purchase_date->format('Y-m-d');
        }
        if ($this->edited_bond["value"] != $this->form->value) {
            $update_data['value'] = $this->form->value;
        }
        if ($this->edited_bond["bond_type"] != $this->form->bond_type || $this->first_day_edited != $this->first_day_original) {
            $this->retrive_bond_id();
            $update_data['bond_id_bond'] = $this->form->id_bond;
        }
        if (empty($update_data)) {
            return false;
        }

        try {
            App::getDB()->update("holding",
            $update_data,
            ["id_holding" =>  $this->id_holding]);
        } catch (PDOException $e) {
              Utils::addErrorMessage('Wystąpił błąd podczas aktualizacji rekordow');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
            return false;
        }
        App::getMessages()->addMessage(new Message("Holding obligacji zaktualizowany poprawnie", Message::INFO));
        return true;
     
    }


    public function delete_user_bonds() {
        try {
            App::getDB()->delete("holding",
            ["id_holding" =>  $this->id_holding]);
        } catch (PDOException $e) {
              Utils::addErrorMessage('Wystąpił błąd podczas usuwania recordu');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
            return false;
        }
        App::getMessages()->addMessage(new Message("Holding obligacji zostal usuniety", Message::INFO));
        return true;
    }



    public function retrieve_edited_bond() {
    
        try {
            $this->edited_bond = App::getDB()->select("holding" , [
                   "[>]bond"    => ["bond_id_bond"  => "id_bond"], 
                   ], [
                    "bond.id_bond",
                    "bond.bond_type",
                    "bond.period_fixed_rate",
                    "bond.margin",
                    "bond.penalty",
                    "holding.id_holding",
                    "holding.purchase_date",
                    "holding.value",
                   ], [
                    "holding.user_id_user"  => $this->logged_user->user_id,
                    "holding.id_holding" => $this->id_holding
                   ]
             
        );
        } catch (PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
        $this->edited_bond = $this->edited_bond[0];
    }

    public function retrive_bond_id() {
        $this->bond_data = App::getDB()->select("bond", 
             ["id_bond"],
                [
                    "AND" => [
                        "bond_type" => $this->form->bond_type,
                        "emission_date[=]" => $this->first_day_edited
                ]
                ]
        );
        if (empty($this->bond_data)) {
            Utils::addErrorMessage("Obligacja nie jest dostepna w systemie, popros managera zeby ja dodal.");
            return false;
        }
        $this->form->id_bond = $this->bond_data[0]['id_bond'];
        return true;
    }


    public function validate() {

        $this->form->value = $this->v->validateFromPost("value", [
            'trim'              => true,
            'required'          => true,
            'int'               => true,
            'validator_message' => 'Wprowadz wartosc'
        ]);
        if (!$this->v->isLastOk()) {return false;}

        $this->form->bond_type = $this->v->validateFromPost("bond_type", [
            'trim'              => true,
            'required'          => true,
            'validator_message' => 'Wybierz typ obligacji'
        ]);
        if (!$this->v->isLastOk()) {return false;}

        $this->form->purchase_date = $this->v->validateFromPost("purchase_date", [
            'trim'              => true,
            'required'          => true,
            'date_format'       => 'Y-m-d',
            'validator_message' => 'Podaj date zakupu'
        ]);
        if (!$this->v->isLastOk()) {return false;}
        return true;
    }


    public function generateView() {

        $logged_user = SessionUtils::loadObject('logged_user', $keep = true);
        App::getSmarty()->assign('logged_user', $logged_user); 
        App::getSmarty()->assign('edited_bond', $this->edited_bond); 
        App::getSmarty()->display('edit_user_bonds.tpl');
    }

}