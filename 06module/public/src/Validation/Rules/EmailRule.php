<?php
declare(strict_types=1);

namespace Otus\Task06\Validation\Rules;

use Otus\Task06\Validation\Rules;

class EmailRule extends Rules
{

    public function validate() : bool
    {
       return (bool)filter_var($this->getValue(), FILTER_VALIDATE_EMAIL);
    }

    public function message() : string
    {
        return  sprintf('Почта "%s" не прошла валидацию.', $this->value) ;
    }

}