<?php
$host = dirname(__FILE__)."/server.sock";
set_time_limit(5); // To prevent possible hang, unlikely in client.
function connect($h,$msg)
{
    $s = socket_create(AF_UNIX,SOCK_STREAM,0);

    try{
        $conn_outcome = socket_connect($s,$h);

        try
        {
            socket_write($s,$msg,strlen($msg));
        }
        catch(Exception $e)
        {
            printf($e->getMessage());
            socket_close($s);
        }
        sleep(3);
        printf("\n%s\n",socket_read($s,1024));
        socket_close($s);
        printf("Closed.");

    }
    catch(Exception $e)
    {
        printf($e->getMessage());
        socket_close($s);
    }

}

connect($host,'Helloo_010101!');