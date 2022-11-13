<? 
try {
    $redis = (new \Redis())->connect('redis');
    var_dump($redis);


} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), ' ',  date('d.m.Y H:i:s') , "\n";
} catch (Throwable $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
//phpinfo();