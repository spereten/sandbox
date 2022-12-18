<?php
$host = dirname(__FILE__)."/server.sock";
error_reporting(E_ERROR | E_PARSE);

$socket = socket_create(AF_UNIX,SOCK_STREAM,0);
socket_connect($socket, $host);
/*Client
    socket()
    bind() [optional, see below]
    connect() [does an implicit bind on an ephemeral port if not already bound]
*/
while (true){

    $message = fgets(fopen('php://stdin', 'r'));
    if($message){
        $rs = socket_write($socket, $message, strlen($message));
        echo socket_strerror(socket_last_error()) . PHP_EOL;

    }
}

# https://www.php.net/manual/ru/function.socket-accept.php