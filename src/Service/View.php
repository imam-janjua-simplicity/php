<?php

declare (strict_types=1);

namespace PhpKurs\Service;

use RuntimeException;

class View
{
    private string $path;

    public function __construct(string $path)
    {
        $this->path = TEMPLATE_ROOT . $path . '.phtml';

        if (!file_exists($this->path)) {
            echo $this->path;
            throw new RuntimeException('File path does not exist');
        }
    }

    public function render(?array $data = null)
    {
        if ($data !== null) {
            extract($data);
        }

        ob_start();
        require_once $this->path;
        $content = ob_get_contents();
        ob_end_clean();
        require_once TEMPLATE_ROOT . 'skeleton.phtml';
    }
}
