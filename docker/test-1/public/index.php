<?php

try {
    $redis = (new \Redis())->connect('redis');
    $pdo = (new PDO('mysql:dbname=default;host=mysql', 'default', 'default'));
    $memcached = (new Memcache());
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), ' ',  date('d.m.Y H:i:s') , "\n";
} catch (Throwable $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
phpinfo();