<?php
class Render
{
    //view
    public static function view($view, $data = [])
    {
        //check if the view file exists
        if (file_exists(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR  . 'views' . DIRECTORY_SEPARATOR . $view . '.php')) {
            //extract data
            extract($data);
            //require the view file
            require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR  . 'views' . DIRECTORY_SEPARATOR . $view . '.php';
        } else {
            //view file not found
            ErrorController::view_not_found();
        }
    }

    //extends
    public static function extends($view, $data = [])
    {
        //check if the view file exists
        if (file_exists(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR  . 'views' . DIRECTORY_SEPARATOR . $view . '.php')) {
            //extract data
            extract($data);
            //require the view file
            require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR  . 'views' . DIRECTORY_SEPARATOR . $view . '.php';
        } else {
            //view file not found
            ErrorController::view_not_found();
        }
    }
}
