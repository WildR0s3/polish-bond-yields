<?php

namespace app\controllers;

use PDOException;
use core\App;
use core\Message;
use core\Utils;
use core\ParamUtils;
use core\RoleUtils;
use core\Validator;
use app\forms\BondForm;
use core\SessionUtils;

class AddBondCtrl {
    private $form;

    public function __construct() {
        $this->form = new BondForm();
        $this->v = new Validator();
    }


    public function action_add_bond() {
        // $this->getParams();
        
        if ($this->validate()) {
            $this->_insert_bond();
        }
        
        $this->generateView();
        
    }


    private function getParams() {

       $this->form->bond_type = ParamUtils::getFromPost('bond_type');
    //    Validator::validateFromRequest("emission_date", [])
       $this->form->emission_date = ParamUtils::getFromPost('emission_date');
       $this->form->period_fixed_rate = (empty(floatval(ParamUtils::getFromPost('period_fixed_rate'))) ? null : floatval(ParamUtils::getFromPost('period_fixed_rate')));
       $this->form->margin = (empty(floatval(ParamUtils::getFromPost('margin'))) ? null : floatval(ParamUtils::getFromPost('margin')));
       $this->form->penalty = floatval(ParamUtils::getFromPost('penalty'));

    //    $this->parsed_date = date('Y-m', strtotime($this->form->date));
    //    $this->first_day = date('Y-m-01', strtotime($this->parsed_date));
    }

    private function validate() {
        $this->form->bond_type = $this->v->validateFromPost("bond_type", [
            'trim'              => true,
            'required'          => true,
            'required_message'  => 'Musisz podac typ obligacji',
            'max_length'        => 3,
            'validator_message' => 'Wprowadz poprawny kod'
        ]);
        if (!$this->v->isLastOk()) {return false;}
        $this->form->emission_date = $this->v->validateFromPost("emission_date", [
            'required'          => true,
            'required_message'  => 'Musisz podac date emisji',
        ]);
        if (!$this->v->isLastOk()) {return false;}
        $this->form->period_fixed_rate = $this->v->validateFromPost("period_fixed_rate", [
            'float'             => true,
            'max'               => 100.0,
            'validator_message' => 'Wprowadz poprawna stope'
        ]);
        if (!$this->v->isLastOk()) {return false;}
        $this->form->margin = $this->v->validateFromPost("margin", [
            'float'             => true,
            'max'               => 100.0,
            'validator_message' => 'Wprowadz poprawna marze'
        ]);
        if (!$this->v->isLastOk()) {return false;}
        $this->form->penalty = $this->v->validateFromPost("penalty", [
            'float'             => true,
            'required'          => true,
            'max'               => 100.0,
            'validator_message' => 'Wprowadz poprawna marze'
        ]);
        if (!$this->v->isLastOk()) {return false;}
        return true;
    }


    private function _insert_bond() {
        try {
            App::getDB()->insert("bond", [
                "bond_type"         => $this->form->bond_type,
                "emission_date"     => $this->form->emission_date,
                "period_fixed_rate" => $this->form->period_fixed_rate,
                "margin"            => $this->form->margin,
                "penalty"           => $this->form->penalty,
            ]);
        } catch (PDOException $e) {
            Utils::addErrorMessage("Wystąpił błąd podczas wprowadzania rekordu ". $e->getMessage());
        }
        if (!App::getMessages()->isError()) {
            Utils::addInfoMessage("Bond inserted correctly");
        }
        // Utils::addInfoMessage("Bond inserted correctly");
    }


    public function generateView() {
        // $user_type = "";
        // if (RoleUtils::inRole("manager")) {
        //     $user_type = "manager";
        // } elseif (RoleUtils::inRole("user")) {
        //     $user_type = "user";
        // }
        $logged_user = SessionUtils::loadObject('logged_user', $keep = true);
        App::getSmarty()->assign('logged_user', $logged_user); 
        App::getSmarty()->display('add_bond_view.tpl');
    }

} 

