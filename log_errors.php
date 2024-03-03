<?php
error_reporting(E_ALL);
ini_set("display_errors",0);

function customErrorHandler($errno, $errstr, $errfile, $errline){
    $message =  "Error: [$errno] $errstr - $errfile:$errline";
    error_log($message . PHP_EOL, 3, "error_logs.txt");
}

set_error_handler("customErrorHandler");