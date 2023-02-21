<?php 

spl_autoload_register(function($class){
    $file = "models/".$class.".php";
    file_exists($file) ? include_once $file : false;
});