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
            $human = new Human($_POST['inputFirstname'], 'Pallenberg', $_POST['inputAlter'], new Profession(Profession::PROFESSION[$_POST['inputProfession']]));
            var_dump($human);
            exit;
        }  

        try {
            $view = new View('index/index');
        } catch (RuntimeException $e) {
            echo $e->getMessage();
            exit;
        }

        $view->render(['human' => $human]);
    }

    public function testAction()
    {
        $this->view('index/test');
    }

}
