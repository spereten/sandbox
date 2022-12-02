<?php
declare(strict_types=1);

namespace Otus\Task;

use Otus\Task\Http\Response;
use Otus\Task\Validation\BracketsRule;
use Otus\Task\Validation\Validator;

class Application
{
   // private $request = null;

    public function __construct()
    {
        //$this->request = \Otus\Task\Http\Request::createFromGlobals();
    }

    public function run(){

        try{

            $validator = new Validator('post', [BracketsRule::class]);
            if(!$validator->isValid()){
                return new Response($validator, status: '200');
            }else{
                return new Response(status: '400');

            }

        }catch (\Exception $exception){

        }
    }
}