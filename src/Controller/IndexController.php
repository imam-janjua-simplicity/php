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

    }

    public function createAction(): void
    {
        if (!empty($_POST)) {
            $human = new Human($_POST['firstname'], $_POST['lastname'], $_POST['age'], new Profession(Profession::PROFESSION[$_POST['profession']]));

            if (empty($_SESSION['human']))
            {
                $_SESSION['human'] = [];
            }
            $_SESSION['human'][] = $human;
            header("Location: /show");
            exit;
        }   

        try {
            $view = new View('index/create');
        } catch (RuntimeException $e) {
            echo $e->getMessage();
            exit;
        }

        $view->render();
    }

    public function showAction(): void
    {
        $view = new View('index/show');
        $view->render(['human' => $_SESSION['human']]);
    }

    public function testAction(): void
    {
        $this->view('index/test');
    }

    public function updateAction(): void
    {
        if (!empty($_POST)) {
            $human = new Human($_POST['firstname'], $_POST['lastname'], $_POST['age'], new Profession(Profession::PROFESSION[$_POST['profession']]));

            $_SESSION['human'] = $human;
            header("Location: /show");
            exit;
        }

        try {
            $view = new View('index/update');
        } catch (RuntimeException $e) {
            echo $e->getMessage();
            exit;
        }


        $view = new View('index/update');
        $view->render(['human' => $_SESSION['human']]);
    }

    public function deleteAction(): void
    {
        unset($_SESSION['human']);
    }
}
