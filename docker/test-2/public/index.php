<? 
try {
    $redis = (new \Redis());
    var_dump($redis->connect('redis'));
   // var_dump(get_class_methods($redis)); 

} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), ' ',  date('d.m.Y H:i:s') , "\n";
} catch (Throwable $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
//phpinfo();