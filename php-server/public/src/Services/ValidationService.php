<?php
declare(strict_types=1);

namespace Otus\Task\Services;

class ValidationService implements \Stringable
{
    private array $errors = [];


    public function isValid(string $string) : bool{
        if (!$string) {
            $this->setError('Тело запроса не должно быть пустым');
        }

        $stack = [];
        for ($i = 0; $i <= strlen($string) - 1; $i++) {
            $symbol = $string[$i];

            if (!in_array($symbol, ['(', ')'])) {
                $this->setError('Недопустимый символ в теле запроса');
            }
            if ($symbol === '(') {
                $stack[] = $symbol;
            } else {
                array_pop($stack);
            }
        }
        $this->setError('Тело запроса не должно быть пустым');

        return count($stack) === 0;
    }

    public function valid(){
        return true;
    }

    public function getMessages() : array{
        return ['Ошибки'];
    }

    private function setError($error){
        $this->errors = array_merge($this->errors, [$error]);
    }

    public function __toString(): string
    {
        return implode('', $this->errors);
    }
}