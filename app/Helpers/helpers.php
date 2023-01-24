<?php
//check if function exists
if (!function_exists('view')) {
    //view
    /*
    * @param string $view
    * @param array $args
    * @return html
    */
    function view($view, $args = [])
    {
        return \App\Core\View::render($view, $args);
    }
}

//check if ade_include function exists
if (!function_exists('ade_include')) {
    //ade_include
    /*
    * @param string $view
    * @param array $args
    * @return html
    */
    function ade_include($view, $args = [])
    {
        echo \App\Core\View::include($view, $args);
    }
}


//extend
if (!function_exists('extend')) {
    //extend
    /*
    * @param string $view
    * @param array $args
    * @return html
    */
    function extend($view, $section = null, $args = [])
    {
        echo \App\Core\View::extend($view, $section, $args);
    }
}

//section
if (!function_exists('section')) {
    //section
    /*
    * @param string $view
    * @param array $args
    * @return html
    */
    function section($view)
    {
        return \App\Core\View::section($view);
    }
}

//endsection
if (!function_exists('endsection')) {
    //endsection
    /*
    * @param string $view
    * @param array $args
    * @return html
    */
    function endsection()
    {
        return \App\Core\View::endsection();
    }
}
