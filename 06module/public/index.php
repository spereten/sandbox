<?php
declare(strict_types=1);

use \Otus\Task06\Application;

include __DIR__ . '/vendor/autoload.php';


$application = new Application;

$application->registerContainers();

$application->run();



