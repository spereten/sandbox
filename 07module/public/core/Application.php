<?php
declare(strict_types=1);

namespace Otus\Task07;

use Otus\Task07\App\Services\EmailReaderService;
use Otus\Task07\Config\Config;
use Otus\Task07\Container\Container;
use Otus\Task07\Http\Response;
use Otus\Task07\App\Validation\Rules\EmailDNSRule;
use Otus\Task07\App\Validation\Rules\EmailRule;
use Otus\Task07\Validation\Validator;
use Otus\Task07\View\View;

class Application extends Container
{

    public function run(): Response
    {

        try{

            return '';
        }catch (\Exception $exception){

        }
    }

    public function registerContainers(){

        $this->set('app_path', __DIR__ . '/..');

        $this->set('config', new Config($this['app_path'] . '/config/app.php'));
        $this->set('view' , new View($this['config']['path_view']));
    }
}