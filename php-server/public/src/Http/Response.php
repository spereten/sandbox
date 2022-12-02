<?php
declare(strict_types=1);

namespace Otus\Task\Http;

class Response implements \Stringable
{

    public function __construct(private readonly ?\Stringable $result, private readonly string $status)
    {
    }

    public function __toString(): string
    {
        return '';
    }
}