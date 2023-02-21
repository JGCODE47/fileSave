<?php 

spl_autoload_register(function($class){
    $file = "controllers/".$class.".php";
    file_exists($file) ? include_once $file : false;
});