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
        $view = new View('index/index');

        if (!isset($_SESSION['human']))
        {
            header("Location: /create");
        }

        $unserializedHumans = [];
        foreach($_SESSION['human'] as $id => $human) {
            $unserializedHumans[$id] = unserialize($human);
        }
        //var_dump($_SESSION['human']);
        $view->render(['unserializedHumans' => $unserializedHumans]);
    }

    public function createAction(): void
    {
        if (!empty($_POST)) {
            $human = new Human($_POST['firstname'], $_POST['lastname'], $_POST['age'], new Profession(Profession::PROFESSION[$_POST['profession']]));

            if (empty($_SESSION['human']))
            {
                $_SESSION['human'] = [];
            }
            $_SESSION['human'][] = serialize($human);

            //var_dump($_SESSION['human']);
            $lastId = array_key_last($_SESSION['human']);
            header('Location: /show?id=' . $lastId);
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
        $id = $_GET['id'];

        if (!isset($_SESSION['human'][$id]))
        {
            throw new RuntimeException('Human not found');
        }

        $view = new View('index/show');
        $unserializedHuman = unserialize($_SESSION['human'][$id]);

        $view->render(['human' => $unserializedHuman]);
    }

    public function testAction(): void
    {
        $view = new View('index/test');
        $view->render();
    }

    public function updateAction(): void
    {
        $id = $_GET['id'];
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
        $unserializeHuman = unserialize($_SESSION['human'][$id]);
        $view->render(['human' => $unserializeHuman]);
    }

    public function deleteAction(): void
    {
        $deleteId = $_POST['id'];
        unset($_SESSION['human'][$deleteId]);
        header("Location: /");
    }
}
