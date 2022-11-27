<?php

declare(strict_types=1);

require __DIR__ . '/./vendor/autoload.php';

echo (new Spereten\String\Services\StringService('test'))->length() . PHP_EOL;
echo string('tetes')->length() . PHP_EOL;;