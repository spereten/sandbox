<?php
declare(strict_types=1);

namespace Otus\Task06;

use Otus\Task06\App\Services\EmailReaderService;
use Otus\Task06\Config\Config;
use Otus\Task06\Container\Container;
use Otus\Task06\Http\Response;
use Otus\Task06\App\Validation\Rules\EmailDNSRule;
use Otus\Task06\App\Validation\Rules\EmailRule;
use Otus\Task06\Validation\Validator;
use Otus\Task06\View\View;

class Application extends Container
{

    public function run(): Response
    {

        try{

            $file = new EmailReaderService($this['config']['path_to_email']);
            $emails = [];

            foreach ($file->getEmails() as $email) {
                $validator = Validator::make($email, [new EmailRule(), new EmailDNSRule()]);
                $emails[$email] = $validator->isValid();
            }

            return new Response($this['view']->render(compact('emails'), 'app'));

        }catch (\Exception $exception){
            return new Response($exception->getMessage(), status: 500);
        }
    }

    public function registerContainers(){

        $this->set('app_path', __DIR__ . '/..');

        $this->set('config', new Config($this['app_path'] . '/config/app.php'));
        $this->set('view' , new View($this['config']['path_view']));
    }
}