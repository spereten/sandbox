<?php

namespace Otus\Task06\Container\Contracts;

interface ContainerContract
{

    public function get($id);

    public function has($id);

    public function set($id, $value);
}