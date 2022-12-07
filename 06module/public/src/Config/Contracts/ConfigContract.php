<?php
declare(strict_types=1);
namespace Otus\Task06\Config\Contracts;

interface ConfigContract
{
    public function get($key) : mixed;
}