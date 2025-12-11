<?php

namespace app\controllers;

use PDOException;
use core\App;
use core\Message;
use core\Utils;
use core\ParamUtils;
use core\RoleUtils;
use core\Validator;
use app\forms\UserBondForm;
use core\SessionUtils;

class AddUserBondsCtrl {

    private $bond_data;
    private $user_data;

    public function __construct() {
        $this->form = new UserBondForm();
        $this->v = new Validator();
        $this->logged_user = SessionUtils::loadObject('logged_user', $keep = true);

    }
    
    public function action_add_user_bonds() {
        if ($this->validate()) {
            $this->first_day = $this->form->purchase_date->format('Y-m-01');
            if ($this->retrive_bond_id()) {
                 $this->_insert_holding();
            }
        }
        $this->generateView();
    }


    public function retrive_bond_id() {
        $this->bond_data = App::getDB()->select("bond", 
             ["id_bond"],
                [
                    "AND" => [
                        "bond_type" => $this->form->bond_type,
                        "emission_date[=]" => $this->first_day
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

    public function _insert_holding() {
        try {
            App::getDB()->insert("holding", [
                "purchase_date"     => $this->form->purchase_date->format('Y-m-d'),
                "value"             => $this->form->value,
                "user_id_user"      => $this->logged_user->user_id,
                "bond_id_bond"      => $this->form->id_bond,
            ]);
        } catch (PDOException $e) {
            Utils::addErrorMessage("Wystąpił błąd podczas wprowadzania rekordu ". $e->getMessage());
        }
        if (!App::getMessages()->isError()) {
            Utils::addInfoMessage("Holding wprowadzony poprawnie");
        }

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

        App::getSmarty()->assign('logged_user', $this->logged_user); 
        App::getSmarty()->display('add_user_bonds.tpl');
    }
}