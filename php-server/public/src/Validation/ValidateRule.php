<?php
declare(strict_types=1);

namespace Otus\Task\Validation;

interface ValidateRule
{
     public function validate(): bool;
     public function message(): string;
}