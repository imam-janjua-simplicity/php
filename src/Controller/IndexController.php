<?php

declare (strict_types=1);

namespace PhpKurs\Controller;

use PhpKurs\Model\Human;
use PhpKurs\Model\Profession;



class IndexController
{

    public function indexAction() 
    {
        $human = new Human('Merle', 'Pallenberg', '19', new Profession(Profession::PROFESSION['taxifahrer']));

        require_once APP_ROOT . '/View/index.php';
    }

      public function testAction() 
    {
        echo 'test';
    }
}