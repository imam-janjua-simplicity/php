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
        $human = new Human('Merle', 'Pallenberg', '19', new Profession(Profession::PROFESSION['taxifahrer']));

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
