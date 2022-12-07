<?php
declare(strict_types=1);

namespace Otus\Task06\Config;

use Otus\Task06\Config\Contracts\ConfigContract;


class Config implements ConfigContract
{
    const PATH_CONFIG = __DIR__ . '/../../config.ini';
    private array $container = [];

    public function __construct()
    {
        if(!is_file(self::PATH_CONFIG)){
            throw new \LogicException('Файл с почтовыми адресами не существует');
        }
        if(!is_readable(self::PATH_CONFIG)){
            throw new \LogicException('Файл с почтовыми адресами не доступе для чтения');
        }

        $this->container = parse_ini_file(self::PATH_CONFIG);
    }

    public function get($key) : mixed
    {
        return $this->container[$key] ?? null;
    }

}