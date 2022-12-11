<?php
$host = dirname(__FILE__)."/server.sock";
unlink($host);
set_time_limit(5);


$socket = socket_create(AF_UNIX,SOCK_STREAM,0);
socket_bind($socket,$host);


while (true){
    socket_listen($socket, 1);
    $read   = array($socket);
    $write  = NULL;
    $except = NULL;
    socket_select($read, $write, $except, 0);
    if(!empty($read))
    {
        $c = socket_accept($socket);
        printf(socket_read($c,1024));
        socket_write($c,'Yo!',3);
    }
}



function listen($h)
{
    $s = socket_create(AF_UNIX,SOCK_STREAM,0);

    try
    {
        #sleep(5);
        if(socket_bind($s,$h))
        {
            $r = $w = $e = array();
            $r = [$s];
            while(socket_listen($s))
            {
                socket_select($r,$w,$e,NULL); // calling, gets modified.
                if(!empty($r))
                {
                    $c = socket_accept($s);
                    printf(socket_read($c,1024));
                    socket_write($c,'Yo!',3);
                }
            }
        }
    }
    catch(Exception $e)
    {
        printf($e->getMessage());
        socket_close($s);
    }

}
listen($host);