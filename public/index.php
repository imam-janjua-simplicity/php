<?php

declare (strict_types=1);
namespace PhpKurs\Public;
use PhpKurs\Model\Profession;
use PhpKurs\Model\Human;
use PhpKurs\Controller\IndexController;

session_start();
chdir(dirname(__DIR__));

require_once 'vendor/autoload.php';
require_once 'config/config.php';

$indexController = new IndexController();
$request = trim(strtok($_SERVER['REQUEST_URI'], '?'));

// Router
switch($request) {
    case '/': 
        $indexController->createAction();
        break;      
    case '/show': 
        $indexController->showAction();
        break;      
    case '/test': 
        $indexController->testAction();
        break;
    case '/update':
        $indexController->updateAction();
        break;
    case '/delete':
        $indexController->deleteAction();
        break;
    default: 
        echo '404';
}


