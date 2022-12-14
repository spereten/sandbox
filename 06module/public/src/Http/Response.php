<?php
declare(strict_types=1);

namespace Otus\Task06\Http;
use \Stringable;
class Response implements Stringable
{

    public function __construct(private string|Stringable $result, private int $status = 200){}

    public function __toString(): string
    {
        var_dump('tet'); die();
        http_response_code($this->status);
        return (string)$this->result;
    }
}