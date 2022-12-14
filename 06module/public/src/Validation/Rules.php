<?php
declare(strict_types=1);

namespace Otus\Task06\Validation;

use Otus\Task06\Validation\Contract\RuleContract;

abstract class Rules implements RuleContract
{
    protected mixed $value;

    public function setValue(mixed $value)
    {
        $this->value = $value;
    }

    public function getValue(): mixed
    {
        return $this->value;
    }
}