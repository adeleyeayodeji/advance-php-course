<?php
class ErrorController
{
    //404
    public static function error_404()
    {
        $message = '404 - Page not found';
        return Render::view('errors/404', compact('message'));
    }

    //class_not_found
    public static function class_not_found()
    {
        $message = 'Class not found';
        return Render::view('errors/404', compact('message'));
    }

    //method_not_found
    public static function method_not_found()
    {
        $message = 'Method not found';
        return Render::view('errors/404', compact('message'));
    }

    //view not found
    public static function view_not_found()
    {
        $message = 'View not found';
        return Render::view('errors/404', compact('message'));
    }

    //500
    public static function error_500()
    {
        $message = '500 - Internal Server Error';
        return Render::view('errors/500', compact('message'));
    }
}
