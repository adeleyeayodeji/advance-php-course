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

//ade_yield
if (!function_exists('ade_yield')) {
    //ade_yield
    /*
    * @param string $view
    * @param array $args
    * @return html
    */
    function ade_yield($view)
    {
        return \App\Core\View::yield($view);
    }
}

//pushScript
if (!function_exists('pushScript')) {
    //pushScript
    /*
    * @param string $view
    * @param array $args
    * @return html
    */
    function pushScript($view)
    {
        return \App\Core\View::pushScript($view);
    }
}

//endPushScript
if (!function_exists('endPushScript')) {
    //endPushScript
    /*
    * @param string $view
    * @param array $args
    * @return html
    */
    function endPushScript()
    {
        return \App\Core\View::endPushScript();
    }
}

//redirect
//check if function exists
if (!function_exists('redirect')) {
    //redirect
    /*
    * @param string $url
    * @return void
    */
    function redirect($url)
    {
        return \App\Core\Route::redirect($url);
    }
}
