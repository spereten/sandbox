<?php
declare(strict_types=1);

namespace Otus\Task\Validation;


class BracketsRule extends ValidateRule
{

    public function __construct(private readonly string $string){}

    public function validate() : bool
    {

        $stack = [];
        for ($i = 0; $i <= strlen($this->string) - 1; $i++) {
            $symbol = $this->string[$i];

            if (!in_array($symbol, ['(', ')'])) {
                return false;
            }
            if ($symbol === '(') {
                $stack[] = $symbol;
            } else {
                array_pop($stack);
            }
        }

        return count($stack) === 0;
    }

    public function message() : string
    {
        return 'Тело запроса не должно быть пустым';
    }






}