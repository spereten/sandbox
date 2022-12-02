<?php
declare(strict_types=1);

namespace Otus\Task\Validation\Rules;

interface Rules
{
     public function validate(): bool;
     public function message(): string;
}