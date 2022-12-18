<?php

namespace Otus\Task07\App;

use League\Flysystem\Exception;
use Otus\Task07\Core\Application;
use Otus\Task07\Core\Http\Response;
use Otus\Task07\Core\Socket\DomainSocket;

use Otus\Task07\App\Chat\ChatManager;


class Controller
{
    public function __construct(private Application $application){}

    public function __invoke()
    {
        try{
            if(!$this->application->isCommandLine()){
                throw new \DomainException('Скрипт работает только в режиме cli');
            }

            $config = $this->application->getContainer('config');
            $chatManager = new ChatManager(new DomainSocket($config['socket']));
            $instance = $chatManager->make($_SERVER['argv'][1]);
            $instance->initialize();
            $instance->start();

        }catch (\Exception $exception){

        }
    }

}