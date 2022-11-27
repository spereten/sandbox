<?php

declare(strict_types=1);
include __DIR__ . '/../composer/vendor/autoload.php';

echo (new \Spereten\String\Services\StringService('test'))->length();