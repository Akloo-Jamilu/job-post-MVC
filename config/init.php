<?php 

// require_once 'config.php';

// Auto load
spl_autoload_register(function ($class_name){
    require_once './lib/' . $class_name . '.php';
});

