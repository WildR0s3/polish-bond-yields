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
use app\forms\InflationReadingForm;

class AddInflationReadingCtrl {
    private $form;

    public function __construct() {
        $this->form = new InflationReadingForm();
        $this->v = new Validator();
    }

    public function action_add_inflation_reading() {
        // $this->getParams();
        
        if ($this->validate()) {
            $this->_insert_reading();
        }
        
        $this->generateView();
        
    }

    private function _insert_reading() {
        try {
            App::getDB()->insert("inflation_reading", [
                "reading_date"      => $this->form->reading_date,
                "reading_value"     => $this->form->reading_value,
            ]);
        } catch (PDOException $e) {
            Utils::addErrorMessage("Wystąpił błąd podczas wprowadzania rekordu ". $e->getMessage());
        }
        if (!App::getMessages()->isError()) {
            Utils::addInfoMessage("Inflation reading inserted correctly");
        }
    }

    private function validate() {
        $this->form->reading_date = $this->v->validateFromPost("reading_date", [
            'trim'              => true,
            'required'          => true,
            'validator_message' => 'Wprowadz date odczytu'
        ]);
        if (!$this->v->isLastOk()) {return false;}
        $this->form->reading_value = $this->v->validateFromPost("reading_value", [
            'trim'              => true,
            'required'          => true,
            'float'             => true,
            'validator_message' => 'Wprowadz odczyt'
        ]);
        if (!$this->v->isLastOk()) {return false;}

        return true;
    }

    public function generateView() {

        $logged_user = SessionUtils::loadObject('logged_user', $keep = true);
        App::getSmarty()->assign('logged_user', $logged_user); 
        App::getSmarty()->display('add_inflation_reading_view.tpl');
    }
}