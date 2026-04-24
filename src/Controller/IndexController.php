<?php

declare (strict_types=1);


namespace PhpKurs\Controller;

session_start();

use PhpKurs\Model\Human;
use PhpKurs\Model\Profession;
use PhpKurs\Service\View;
use RuntimeException;



class IndexController
{
    public function indexAction()
    {
        if (!empty($_POST)) {
            $human = new Human($_POST['firstname'], $_POST['lastname'], $_POST['age'], new Profession(Profession::PROFESSION[$_POST['profession']]));
            var_dump($human);


            $_SESSION['human'] = $human;
            header("Location: /show");
            var_dump($_SESSION);
            exit;
        }   

        try {
            $view = new View('index/index');
        } catch (RuntimeException $e) {
            echo $e->getMessage();
            exit;
        }

        $view->render();



        // $view->render(['human' => $human]);


    }

    public function showAction ()
    {   
        
        $view = new View('index/show');
        //var_dump($_SESSION);
       //echo $_SESSION['human'];

       $view->render(['human' => $_SESSION['human']]);

    }

    public function testAction()
    {
        $this->view('index/test');
    }

}
