<?php
// get the url
$uri = (isset($_SERVER['REQUEST_URI'])) ? $_SERVER['REQUEST_URI'] : false;
$query = (isset($_SERVER['QUERY_STRING'])) ? $_SERVER['QUERY_STRING'] : '';
$url = str_replace([$query, '?'], '', $uri); // you can edit this part to do something with the query
$arr = explode('/', $url);
array_shift($arr);
require __DIR__ . DIRECTORY_SEPARATOR . 'core' . DIRECTORY_SEPARATOR . 'autoload.php';
