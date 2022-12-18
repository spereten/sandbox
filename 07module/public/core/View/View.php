<?php
declare(strict_types=1);
namespace Otus\Task07\Core\View;

class View implements \Stringable
{

    public function __construct($viewDir)
    {
        $this->dir = $viewDir;
    }

    public function render(array $data, string $view){

        $file = $this->dir . DIRECTORY_SEPARATOR . $view . '.php';

        if(!is_file($file)){
            throw new \Exception(sprintf('Файл "%s" шаблонизатора не найден', $file));
        }
        ob_start();
        extract($data);

        include $file;

        return ob_get_contents();
    }

    public function __toString(): string
    {
        return $this->render();
    }
}