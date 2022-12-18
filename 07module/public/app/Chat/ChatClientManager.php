<?php


namespace Otus\Task07\App\Chat;

use Otus\Task07\App\Chat\Contracts\SocketManagerContract;
use Otus\Task07\Core\Socket\ClientUNIXSocket;
use Otus\Task07\Core\Socket\Contracts\DomainSocketContract;
use Otus\Task07\Core\Socket\ServerUNIXSocket;

class ChatClientManager implements SocketManagerContract
{
    private ClientUNIXSocket $socket;

    public function __construct(private DomainSocketContract $domain)
    {
        $this->socket = new ClientUNIXSocket($this->domain);
    }

    public function initialize(){
        $this->socket->socket();
        $this->socket->bind();
    }

    public function start(){
        while (true){
            $message = fgets(fopen('php://stdin', 'r'));
            var_dump($message);
            if($message){
                $this->socket->write($message);
            }
        }
    }

}