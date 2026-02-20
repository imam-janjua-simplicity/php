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

        $this->render('/View/index.php', ['human' => $human]);
    }

      public function testAction() 
    {
        $this->render('/View/test.php');
    }

    private function render(string $path, ?array $data = null )
    {
        if ($data !== null) {
            extract($data);
        }

        ob_start();
        require_once APP_ROOT . $path;
        $content = ob_get_contents();
        ob_end_clean();

        require_once APP_ROOT . '/View/skeleton.php';
    }
}