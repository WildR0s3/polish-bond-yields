<?php

namespace app\controllers;

use PDOException;
use core\App;
use core\Message;
use core\Utils;
use core\ParamUtils;
use core\RoleUtils;
use core\SessionUtils;
use models\COIObject;
use app\services\COIBondCalculationService;
use app\services\TOSBondCalculationService;

class DisplayUserBondsCtrl {


    public function __construct() {
        $this->logged_user = SessionUtils::loadObject('logged_user', $keep = true);
        $this->COI_array = array();
        $this->TOS_array = array();
    }

    public function action_display_user_bonds() {
        // $this->retrieve_bonds();
        $this->COI_array = (new COIBondCalculationService())()->COI_array;
        $this->TOS_array = (new TOSBondCalculationService())()->TOS_array;
        $this->generateView();
    }


    # calculate all neccessary stats for each bond
    # display all bonds sorted by bond type and purchase date











    public function generateView() {

        $logged_user = SessionUtils::loadObject('logged_user', $keep = true);
        App::getSmarty()->assign('COI_array', $this->COI_array);
        App::getSmarty()->assign('TOS_array', $this->TOS_array);
        App::getSmarty()->assign('logged_user', $logged_user); 
        App::getSmarty()->display('display_user_bonds.tpl');
    }


}