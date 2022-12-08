<?php
declare(strict_types=1);
namespace Otus\Task06\View;

class View implements \Stringable
{

    public function __construct(private array $data, private string $view)
    {

    }

    public static function make(array $data, string $view){


        return new self($data, $view);

    }
    public function render(){
        ob_start();

        extract($this->data);
        include $this->view;

        return ob_get_clean();
    }

    public function __toString(): string
    {
        return $this->render();
    }
}