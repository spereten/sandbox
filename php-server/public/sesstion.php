<?php

echo '<pre>';
echo $_SERVER['HOSTNAME']; echo '<br>';
if(!is_null($_SESSION['test'])){
    echo 'session exists: ' . $_SESSION['test'];
}else{
    $_SESSION['test'] = date('d.m.Y H:i:s');
}



