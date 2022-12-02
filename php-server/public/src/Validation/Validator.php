<?php
declare(strict_types=1);

namespace Otus\Task\Validation;

class Validator implements  \Stringable
{
    private array $errors = [];

    public function __construct(private string|null $string, private array $rules)
    {
        $this->process();
    }

    private function process(): void
    {
        foreach ($this->rules as $rule){
            $rule = new $rule((string)$this->string);
            if($rule->validate()){
                $this->errors[] = $rule->message();
            }
        }
    }

    public function isValid(): bool
    {
        return !count($this->errors);
    }


    public function __toString(): string
    {
        return implode('/',$this->errors);
    }
}