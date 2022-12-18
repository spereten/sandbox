<?php
declare(strict_types=1);

namespace Otus\Task07\App\Chat;

use Otus\Task07\Core\Socket\Contracts\DomainSocketContract;

class ChatManager
{
    public function __construct(private DomainSocketContract $domain){}

    public function make(string $type){

        if($type === 'server'){
            return new ChatServerManager($this->domain);
        }
        if($type === 'client'){
            return new ChatClientManager($this->domain);
        }

    }

}


