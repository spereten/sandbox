<?php
declare(strict_types=1);

namespace Otus\Task\Validation;

class Validator implements  \Stringable
{
    private array $errors = [];

    public function __construct(private readonly string $string, private readonly array $rules)
    {
        $this->process();
    }

    private function process(): void
    {
        foreach ($this->rules as $rule){
            $rule = new $rule($this->string);
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
        return 'test';
    }
}