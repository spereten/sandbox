<?php
declare(strict_types=1);

namespace Otus\Task;

use Otus\Task\Http\Response;
use Otus\Task\Validation\Rules\BracketsRule;
use Otus\Task\Validation\Validator;
use \Otus\Task\Http\Request;

class Application
{

    private Request $request;

    public function __construct()
    {
        $this->request = Request::create();
    }

    public function run(): Response
    {

        try{
            if($this->request->isPost()){
                $validator = new Validator($this->request->post->get('string'), [BracketsRule::class]);
                if($validator->isValid()){
                    return new Response('Строка прошла проверку', status: 200);
                }else{
                    return new Response($validator, status: 400);
                }
            }
        }catch (\Exception $exception){
            return new Response($exception, status: 500);
        }
    }
}