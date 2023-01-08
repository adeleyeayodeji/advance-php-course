<?php

namespace App\Core;

class View
{
    //render
    public static function render($view, $args = [])
    {
        $file = "resource/views/$view.php";
        if (is_readable($file)) {
            echo self::getContent($file, $args);
        } else {
            echo self::notFound($file);
        }
        exit;
    }

    //return render
    public static function returnRender($view, $args = [])
    {
        $file = "resource/views/$view.php";
        if (is_readable($file)) {
            return self::getContent($file, $args);
        } else {
            return self::notFound($file);
        }
        exit;
    }

    //get content
    public static function getContent($file, $args = [])
    {
        extract($args, EXTR_SKIP);
        ob_start();
        require $file;
        $content = ob_get_clean();
        return $content;
    }

    //not found
    public static function notFound($fileError = '')
    {
        http_response_code(404);
        return self::returnRender('error/404', array('fileError' => $fileError));
    }
}
