<?php
declare(strict_types=1);
namespace Otus\Task07\Config\Contracts;

interface ConfigContract
{
    public function get($key) : mixed;
}