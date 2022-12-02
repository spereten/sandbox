<?php
declare(strict_types=1);

namespace Otus\Task\Http;
use \Stringable;
class Response implements Stringable
{

    public function __construct(private string|null|Stringable $result, private int $status){}

    public function __toString(): string
    {
        http_response_code($this->status);
        return (string)$this->result;
    }
}