<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\LoginForm;
use app\forms\User;
use core\SessionUtils;



class RegisterUserCtrl {

    public function __construct(){

		$this->form = new LoginForm();

	}


    public function action_register_user() {
        $this->generateView();
    }

    public function action_register_new_user() {
       
		$this->form->login = ParamUtils::getFromRequest('login');
		$this->form->pass = ParamUtils::getFromRequest('password');

        if ($this->validate()) {
            Utils::addErrorMessage('Poprawnie zarejestrowano uzytkownika - zaloguj sie');
            App::getRouter()->redirectTo("register_user"); // to change later for specific view related to role
        } else {
            $this->generateView();
        }     
        

    }


    public function validate() {

        // sprawdzenie, czy potrzebne wartości zostały przekazane
        if (empty($this->form->login)) {
            Utils::addErrorMessage('Nie podano loginu');
        }
        if (empty($this->form->pass)) {
            Utils::addErrorMessage('Nie podano hasła');
        }

        // potentially wrong
        if (App::getMessages()->isError())
            return false;

        try {
            $user_data = App::getDB()->insert("user", [
           "username"   => $this->form->login,
           "password"   => $this->form->pass,
           "role"       => "user" 
        ]);
        } catch (PDOException $e) {
             Utils::addErrorMessage("Wystąpił błąd podczas nowego uzytkownika ". $e->getMessage());
        }
        if (!App::getMessages()->isError()) {
            Utils::addInfoMessage("Uzytkownik zarejestrowany poprawnie");
        }
      
        return !App::getMessages()->isError();

    }

    public function generateView() {
        // App::getSmarty()->assign('form', $this->form); // dane formularza do widoku
        $logged_user = SessionUtils::loadObject('logged_user', $keep = true);
        App::getSmarty()->assign('logged_user', $logged_user); 
        App::getSmarty()->display('register_user_view.tpl');
    }

}

