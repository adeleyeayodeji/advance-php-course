<?php
class Route
{
    public static $arr = [];
    public static $query = [];

    public function __construct($arr, $query)
    {
        self::$arr = $arr;
        self::$query = $query;

        //debug mode
        $this->debug_mode();

        $this->init();
    }

    //debug_mode
    public function debug_mode()
    {
        //unset the first element
        array_shift(self::$arr);
    }

    //init route
    public function init()
    {
        $class = (isset(self::$arr[0]) && self::$arr[0] != '') ? self::$arr[0] : 'index';
        //ucfirst
        $class = ucfirst($class);
        //method
        $method = (isset(self::$arr[1]) && self::$arr[1] != '') ? self::$arr[1] : 'index';
        //param
        $param = (isset(self::$arr[2]) && self::$arr[2] != '') ? self::$arr[2] : null;

        if (class_exists($class)) {
            $obj = new $class();
            $reflector = new ReflectionClass($class);
            $fn = $reflector->getFileName();
            $directory = dirname($fn);
            //check if directory is class path
            if (strpos($directory, 'class') !== false) {
                //check if method exists
                if (method_exists($obj, $method)) {
                    //check if param is null
                    if ($param == null) {
                        //call the method
                        $obj->$method();
                    } else {
                        //call the method with param
                        $obj->$method($param);
                    }
                } else {
                    //method not found
                    ErrorController::method_not_found();
                }
            } else {
                //class not found
                ErrorController::error_404();
            }
        } else {
            ErrorController::error_404();
        }
    }
}
