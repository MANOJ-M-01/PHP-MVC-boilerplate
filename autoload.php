<?php 
function autoloader($class)
{
    $filename = BASE_PATH . '/' . str_replace('\\', '/', $class) . '.php'; 
    if(file_exists($filename)) {
        require_once $filename;
    }else{
        var_dump($filename);
        echo "file not exist";
        exit();
    }
}

spl_autoload_register('autoloader');