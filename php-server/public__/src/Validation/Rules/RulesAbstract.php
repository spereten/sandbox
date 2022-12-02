<?php
declare(strict_types=1);

namespace Otus\Task\Validation\Rules;

abstract class RulesAbstract
{

    public function __construct(protected string $string){}

}