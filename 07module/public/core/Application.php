<?php
declare(strict_types=1);

namespace Otus\Task07\Core;

use Otus\Task07\Core\Config\Config;
use Otus\Task07\Core\Container\Container;
use Otus\Task07\Core\View\View;

class Application extends Container
{
    public function __construct()
    {
        $this->registerContainers();
    }

    public function run($controller){
        $controller();
    }

    public function registerContainers(){

        $this->set('app_path', __DIR__ . '/..');
        $this->set('config', new Config($this['app_path'] . '/config/app.php'));
        $this->set('view', new View($this['config']['path_view']));

    }

    public function isCommandLine(): bool
    {
        return php_sapi_name() === "cli";
    }
}