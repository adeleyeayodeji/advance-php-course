<?php
//check if function view exist
if (!function_exists('view')) {
    /**
     * @param $view
     * @param array $args
     * @return html
     */
    function view($view, $args = [])
    {
        return \App\Core\View::Render($view, $args);
    }
}
