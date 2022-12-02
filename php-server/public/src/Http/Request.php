<?php
declare(strict_types=1);

namespace Otus\Task\Http;

use Otus\Task\Http\Parameter\PostParameter;

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

}