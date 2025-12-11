<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\LoginForm;
use app\forms\User;
use core\SessionUtils;


class LoginCtrl {
	private $form;
    private $user_data;
    private $user_data_container;

    public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->form = new LoginForm();
        $this->user_data_container = new User();
	}

    public function getParams(){
		// 1. pobranie parametrów
		$this->form->login = ParamUtils::getFromRequest('login');
		$this->form->pass = ParamUtils::getFromRequest('password');
	}


    public function validate() {

        $this->getParams();
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

        $user_data = App::getDB()->select("user", [
            "id_user",
           "username",
           "password",
           "role" 
        ], [
            "username" => $this->form->login
        ]);

        if ($user_data[0]['password'] == $this->form->pass) {
            RoleUtils::addRole($user_data[0]['role']);
            session_start();
            $this->user_data_container->user_id = $user_data[0]['id_user'];
            $this->user_data_container->username = $user_data[0]['username'];
            $this->user_data_container->role = $user_data[0]['role'];
            SessionUtils::storeObject('logged_user', $this->user_data_container);
        } else {
            Utils::addErrorMessage('Niepoprawny login lub hasło');
        }

        return !App::getMessages()->isError();

    }

    public function action_login() {
        if ($this->validate()) {
            Utils::addErrorMessage('Poprawnie zalogowano do systemu');
            App::getRouter()->redirectTo("view"); // to change later for specific view related to role
        } else {
            $this->generateView();
        }     
    }

    public function action_login_show() {
        $this->generateView();
    }

    public function action_logout() {
        // 1. zakończenie sesji
        session_destroy();
        RoleUtils:: removeRole("manager");
        RoleUtils:: removeRole("user");
        // 2. idź na stronę główną - system automatycznie przekieruje do strony logowania
        App::getRouter()->redirectTo('view');
    }

    public function generateView() {
        // App::getSmarty()->assign('form', $this->form); // dane formularza do widoku
        $logged_user = SessionUtils::loadObject('logged_user', $keep = true);
        App::getSmarty()->assign('logged_user', $logged_user); 
        App::getSmarty()->display('login_view.tpl');
    }




}