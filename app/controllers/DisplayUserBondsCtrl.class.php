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
use app\services\EDOBondCalculationService;

class DisplayUserBondsCtrl {


    public function __construct() {
        $this->logged_user = SessionUtils::loadObject('logged_user', $keep = true);
        $this->COI_array = array();
        $this->TOS_array = array();
        $this->EDO_array = array();
    }

    public function action_display_user_bonds() {
        // $this->retrieve_bonds();
        $page = (int)ParamUtils::getFromGet('page') ? : 1;
        $limit = 5;
        $offset = ($page - 1) * $limit;
        $coiService = new COIBondCalculationService();
        $coiService($page, $offset);
        $this->COI_array = $coiService->COI_array;
        // $this->COI_array = (new COIBondCalculationService())($page, $offset)->COI_array;
        // $this->TOS_array = (new TOSBondCalculationService())($page, $offset)->TOS_array;
        $this->EDO_array = (new EDOBondCalculationService())($page, $offset)->EDO_array;
        $tosService = new TOSBondCalculationService();
        $tosService($page, $offset);
        $this->TOS_array = $tosService->TOS_array;
        $this->page = $tosService->page;
        $this->total_pages = $tosService->total_pages;
        $this->generateView();
    }
    # calculate all neccessary stats for each bond
    # display all bonds sorted by bond type and purchase date

    public function generateView() {

        $logged_user = SessionUtils::loadObject('logged_user', $keep = true);
        App::getSmarty()->assign('COI_array', $this->COI_array);
        App::getSmarty()->assign('TOS_array', $this->TOS_array);
        App::getSmarty()->assign('EDO_array', $this->EDO_array);
        App::getSmarty()->assign('current_page', $this->page);
        App::getSmarty()->assign('total_pages', $this->total_pages);
        App::getSmarty()->assign('logged_user', $logged_user);
        if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
            App::getSmarty()->display('display_user_bonds_partial.tpl');
        } else {
            App::getSmarty()->display('display_user_bonds.tpl');
        }
        
    }


}