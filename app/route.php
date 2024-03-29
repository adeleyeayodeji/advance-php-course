<?php

use App\Controller\HomeController;
use App\Core\Request;
use App\Core\Route;

$route = new Route;
$route::get('/', [HomeController::class, 'index']);
//blog
$route::get('/blog/{id}/{title}', [HomeController::class, 'blog']);
$route::get('/blog/{id}/{title}/{slug}/{amount}', [HomeController::class, 'blog']);
//middleware
$route->middleware('user', function ($middleware) use ($route) {
    $route::get('/dashboard', [HomeController::class, 'dashboard'], $middleware);
});
//static
$route::get('/about', [HomeController::class, 'about']);
$route::get('/login', [HomeController::class, 'login']);
$route::get('/contact-us', [HomeController::class, 'contact']);
//inline function
$route::get('/area/{id}/{title}', function (Request $request, $args) {
    echo "<h1>Area</h1>";
    var_dump($args);
});
// external  function
$route::get('/area/{id}/{title}/{slug}', [HomeController::class, 'area']);
//run
$route::run();
