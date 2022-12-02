<?php
declare(strict_types=1);

namespace Otus\Task\Http;
use \Stringable;
class Response implements Stringable
{

    public function __construct(private readonly Stringable | string $result, private readonly string $status)
    {
    }

    public function __toString(): string
    {
        echo $this->status;
        return $this->result;
    }
}