<?php
namespace Otus\Task07\Core\Socket;

use Otus\Task07\Core\Socket\Contracts\DomainSocketContract;
use Otus\Task07\Core\Socket\Exceptions\SocketException;

class ClientUNIXSocket{

    private \Socket $socket;

    public function __construct(private DomainSocketContract $domain){}


    public function socket(){
        $this->socket = socket_create(AF_UNIX,SOCK_STREAM,0);
        if(!$this->socket){
           new SocketException(socket_strerror(socket_last_error()));
        }
    }
    public function bind(){
        $result = socket_bind($this->socket, $this->domain->getHost());
        if(!$result){
            new SocketException(socket_strerror(socket_last_error()));
        }
    }

    public function write(string $message){
        $result = socket_write($this->socket, $message, strlen($message));
        if(!$result){
            new SocketException(socket_strerror(socket_last_error()));
        }
    }
}