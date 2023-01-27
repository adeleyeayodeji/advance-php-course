<?php

namespace App\Core;

use App\Core\Session;

class View
{
    //render
    public static function render($view, $args = [])
    {
        $file = "resource/views/$view.php";
        //check if file exists
        if (is_readable($file)) {
            //show content
            echo self::getContent($file, $args);
        } else {
            //show error
            echo self::notFound($file);
        }
    }

    //returnRender
    public static function returnRender($view, $args = [])
    {
        $file = "resource/views/$view.php";
        //check if file exists
        if (is_readable($file)) {
            //show content
            return self::getContent($file, $args);
        } else {
            //show error
            return self::notFound($file);
        }
    }

    //show content
    public static function getContent($file, $args = [])
    {
        //extract args
        extract($args, EXTR_SKIP);
        //start buffer
        ob_start();
        //include file
        require $file;
        //get buffer content
        $content = ob_get_clean();
        //return content
        return $content;
    }

    //not found
    public static function notFound($fileError = "")
    {
        http_response_code(404);
        return self::returnRender('error/404', ['fileError' => $fileError]);
    }

    //include file
    public static function include($view, $args = [])
    {
        return self::returnRender($view, $args);
    }

    //section
    public static function section($section)
    {
        //save buffer name
        $GLOBALS['buffer'] = $section;
        //start buffer
        ob_start();
    }

    //end section
    public static function endsection()
    {
        //get buffer content
        $content = ob_get_clean();
        //hold content
        $GLOBALS[$GLOBALS['buffer']] = $content;
    }

    //extend
    public static function extend($view, $section = null, $args = [])
    {
        if (isset($GLOBALS[$section])) {
            //get content
            $content = $GLOBALS[$section];
            //unset content
            unset($GLOBALS[$section]);
        } else {
            $content = "";
        }
        //get view
        $view = self::returnRender($view, $args);
        // check if {{ exists
        if (strpos($view, '{{') !== false) {
            //replace {{ with content
            $yield = str_replace('{{' . $section . '}}', $content, $view);
        } else {
            //show view
            $yield = $view;
        }
        //show yield
        return $yield;
    }

    //pushScript
    public static function pushScript($name)
    {
        //save buffer name
        $GLOBALS['scriptName'] = $name;
        ob_start();
    }

    //endPushScript
    public static function endPushScript()
    {
        //get buffer content
        $content = ob_get_clean();
        //save session
        $session = new Session();
        $session->set($GLOBALS['scriptName'], $content);
        //unset script name
        unset($GLOBALS['scriptName']);
    }

    //yield
    public static function yield($section)
    {
        //check if section exists in session
        $session = new Session();
        if ($session->has($section)) {
            //get section
            $section = $session->get($section);
            //unset section
            $session->unset($section);
            //show section
            echo $section;
        }
    }
}
