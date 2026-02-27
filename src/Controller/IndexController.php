<?php

declare (strict_types=1);

namespace PhpKurs\Controller;

use PhpKurs\Model\Human;
use PhpKurs\Model\Profession;
use PhpKurs\Service\View;



class IndexController
{
    private View $view;

    public function __construct()
    {
       $this->view = new View(); 

    }

    public function indexAction() 
    {
        $human = new Human('Merle', 'Pallenberg', '19', new Profession(Profession::PROFESSION['taxifahrer']));

        $this->view->render('/View/index.php', ['human' => $human]);
    }

      public function testAction() 
    {
        $this->view->render('/View/test.php');
    }

}