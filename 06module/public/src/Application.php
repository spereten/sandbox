<?php
declare(strict_types=1);

namespace Otus\Task06;

use Otus\Task06\Config\Config;
use Otus\Task06\Http\Response;
use Otus\Task06\Http\Request;
use Otus\Task06\Services\EmailReaderService;
use Otus\Task06\Validation\Rules\EmailDNSRule;
use Otus\Task06\Validation\Rules\EmailRule;
use Otus\Task06\Validation\Validator;

class Application
{

    private Request $request;
    private Config $config;

    public function __construct()
    {
        $this->request = Request::create();
        $this->config = new Config();
    }

    public function run(): Response
    {

        try{
            $data = [];
            $file = new EmailReaderService($this->config->get('path.emails'));

                foreach ($file->getEmails() as $email) {
                    $data[] =  $validator = Validator::make($email, [new EmailRule(), new EmailDNSRule()]);
                }
                var_dump($data);

            return new Response($data, status: 200);

        }catch (\Exception $exception){
            return new Response($exception->getMessage(), status: 500);
        }
    }
}