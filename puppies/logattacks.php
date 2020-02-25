<?php

$logline = "---------------------------------------------------------------------\n";
$logline .= "[Attack: " . $_REQUEST['attack'] . "]\nResult: " . $_REQUEST['result'] . "\n";
$logline .= "---------------------------------------------------------------------\n\n";

file_put_contents('logs.txt', $logline.PHP_EOL , FILE_APPEND | LOCK_EX);

?>