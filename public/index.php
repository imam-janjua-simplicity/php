<?php

declare (strict_types=1);

namespace PhpKurs\Public;
// session_start();

use PhpKurs\Model\Profession;
use PhpKurs\Model\Human;
use PhpKurs\Controller\IndexController;


chdir(dirname(__DIR__));

require_once 'vendor/autoload.php';
require_once 'config/config.php';

// $profession = new Profession(profession: 'Busfahrer'); 
// $human = new Human(firstname: "Lukas", lastname: "sir", age: "11", profession: $profession );
// echo $human->getFirstName();

// var_dump($_SERVER);

$indexController = new IndexController();

$request = trim(strtok($_SERVER['REQUEST_URI'], '?'));

// Router
switch($request) {
    case '/': 
        $indexController->indexAction();
        break;      
    case '/show': 
        $indexController->showAction();
        break;      
    case '/test': 
        $indexController->testAction();
        break; 
    default: 
        echo '404';
}


