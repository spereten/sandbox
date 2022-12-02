<?php
declare(strict_types=1);

namespace Otus\Task\Validation;

abstract class ValidateRule
{
    abstract public function validate(): bool;
    abstract public function message(): string;


}