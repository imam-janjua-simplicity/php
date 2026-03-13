<?php

declare (strict_types=1);

namespace PhpKurs\Controller;

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

            header("Location: /show?firstname={$_POST['firstname']}");
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
       echo $firstname = $_GET['firstname'];

    }

    public function testAction()
    {
        $this->view('index/test');
    }

}
