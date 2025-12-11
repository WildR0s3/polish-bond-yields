<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('view'); #default action
App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('login_show',               'LoginCtrl');
Utils::addRoute('login',                    'LoginCtrl');
Utils::addRoute('logout',                   'LoginCtrl');
Utils::addRoute('register_user',            'RegisterUserCtrl');
Utils::addRoute('register_new_user',        'RegisterUserCtrl');
Utils::addRoute('view',                     'MainCtrl');
Utils::addRoute('calculate',                'CalculateCtrl');
Utils::addRoute('add_bond',                 'AddBondCtrl',              ['manager']);
Utils::addRoute('add_inflation_reading',    'AddInflationReadingCtrl',  ['manager']);
Utils::addRoute('add_reference_rate',       'AddReferenceRateCtrl',     ['manager']);
Utils::addRoute('display_user_bonds',       'DisplayUserBondsCtrl',     ['user']);
Utils::addRoute('edit_user_bonds',          'EditUserBondsCtrl',        ['user']);
Utils::addRoute('add_user_bonds',           'AddUserBondsCtrl',         ['user']);
//Utils::addRoute('action_name', 'controller_class_name');