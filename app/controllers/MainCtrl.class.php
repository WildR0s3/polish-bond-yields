<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\RoleUtils;
use core\SessionUtils;

class MainCtrl {
    
    public function action_view() {
		        
        // $variable = 123;
        // $user_type = "";
        // if (RoleUtils::inRole("manager")) {
        //     $user_type = "manager";
        // } elseif (RoleUtils::inRole("user")) {
        //     $user_type = "user";
        // }
        
        // App::getMessages()->addMessage(new Message("Hello world message", Message::INFO));
        // Utils::addInfoMessage("Or even easier message :-)");
        
        // App::getSmarty()->assign("value",$variable);
        $logged_user = SessionUtils::loadObject('logged_user', $keep = true);
        App::getSmarty()->assign('logged_user', $logged_user);        
        App::getSmarty()->display("first_view.tpl");
        
        
        
    }
    
}
