<?php

declare (strict_types=1);

namespace PhpKurs\Service;

class View
{
    public function render(string $path, ?array $data = null )
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