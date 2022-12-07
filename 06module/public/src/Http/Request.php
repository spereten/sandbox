<?php
declare(strict_types=1);

namespace Otus\Task06\Http;

use Otus\Task06\Http\Parameters\PostParameter;

class Request
{
    public ?PostParameter $post = null;

    protected function __construct(array $post){
        $this->post = new PostParameter($post);
    }

    public static function create(): static
    {
        return new static($_POST);
    }

    public function isPost(): bool
    {
        return $_SERVER['REQUEST_METHOD'] === 'POST';
    }

}