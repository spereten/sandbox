<?php

declare(strict_types=1);

namespace Spereten\String\Services;


class StringService {

    public function __construct(private string $string){}

    public function length(): int{
        return mb_strlen($this->string);
    }



}