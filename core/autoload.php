<?php
//spl autoload
spl_autoload_register(function ($class) {
    //get all files in app folder
    $files = glob(__DIR__ . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . '**' . DIRECTORY_SEPARATOR . '*.php');
    foreach ($files as $file) {
        //get the file name
        $file_name = explode(DIRECTORY_SEPARATOR, $file);
        $file_name = end($file_name);
        $file_name = str_replace('.php', '', $file_name);
        //check if the file name is the same as the class name
        if ($file_name == $class) {
            require $file;
        }
    }
});

//init route
new Route($arr, $query);
