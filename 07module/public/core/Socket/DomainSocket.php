<?php
namespace Otus\Task07\Core\Socket;

use Otus\Task07\Core\Socket\Contracts\DomainSocketContract;

class DomainSocket implements DomainSocketContract {

    public function __construct(private string $host){
        if(file_exists($this->host)){
            unlink($this->host);
        }
    }

    public function getHost(): string{
        return $this->host;
    }

}