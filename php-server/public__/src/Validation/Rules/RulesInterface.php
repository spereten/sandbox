<?php
declare(strict_types=1);

namespace Otus\Task\Validation\Rules;

interface RulesInterface
{
     public function validate(): bool;
     public function message(): string;
}