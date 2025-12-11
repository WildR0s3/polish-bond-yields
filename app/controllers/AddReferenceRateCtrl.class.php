<?php

namespace app\controllers;

use PDOException;
use core\App;
use core\Message;
use core\Utils;
use core\ParamUtils;
use core\RoleUtils;
use core\Validator;
use core\SessionUtils;
use app\forms\ReferenceRateForm;


class AddReferenceRateCtrl {
    private $form;

    public function __construct() {
        $this->form = new ReferenceRateForm();
        $this->v = new Validator();
    }

    public function action_add_reference_rate() {
        
        if ($this->validate()) {
            $this->_insert_rate();
        }
        
        $this->generateView();
        
    }

    private function _insert_rate() {
        try {
            App::getDB()->insert("reference_rate", [
                "reference_rate_date"      => $this->form->reference_rate_date,
                "reference_rate_value"     => $this->form->reference_rate_value,
            ]);
        } catch (PDOException $e) {
            Utils::addErrorMessage("Wystąpił błąd podczas wprowadzania rekordu ". $e->getMessage());
        }
        if (!App::getMessages()->isError()) {
            Utils::addInfoMessage("Inflation reading inserted correctly");
        }
    }

    private function validate() {
        $this->form->reference_rate_date = $this->v->validateFromPost("reference_rate_date", [
            'trim'              => true,
            'required'          => true,
            'validator_message' => 'Wprowadz date stpy referencyjnej'
        ]);
        if (!$this->v->isLastOk()) {return false;}
        $this->form->reference_rate_value = $this->v->validateFromPost("reference_rate_value", [
            'trim'              => true,
            'required'          => true,
            'float'             => true,
            'validator_message' => 'Wprowadz stope'
        ]);
        if (!$this->v->isLastOk()) {return false;}

        return true;
    }

    public function generateView() {

        $logged_user = SessionUtils::loadObject('logged_user', $keep = true);
        App::getSmarty()->assign('logged_user', $logged_user); 
        App::getSmarty()->display('add_reference_rate_view.tpl');
    }
}
