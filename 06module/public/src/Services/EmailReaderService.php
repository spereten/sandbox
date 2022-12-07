<?php
declare(strict_types=1);

namespace Otus\Task06\Services;

class EmailReaderService
{
    private array $container = [];

    public function __construct(private string $file){

        if(!is_file($this->file)){
            throw new \LogicException('Файл с почтовыми адресами не существует');
        }
        if(!is_readable($this->file)){
            throw new \LogicException('Файл с почтовыми адресами не доступе для чтения');
        }
    }

    public function getEmails(): array
    {
        if($this->container)
            $this->readFile();

        return $this->container;
    }

    private function readFile(){
        $this->container = file($this->file);
    }
}