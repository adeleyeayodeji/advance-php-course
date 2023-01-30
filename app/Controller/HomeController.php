<?php

namespace App\Controller;

use App\Core\Request;
use App\Core\Session;

class HomeController
{
    public static function index(Request $request)
    {
        $name = "John Doe";
        $age = 30;
        $array = [
            "Adeleye Ayodeji",
            "Deborah",
            "Tunde"
        ];
        //set session user
        // $session = new Session;
        // $session->set('user', 'John Doe');
        //destroy session
        // $session->destroy();
        return view('home/index', compact('name', 'age', 'array'));
    }

    //dashboard
    public static function dashboard(Request $request)
    {
        echo "dashboard";
    }

    //about
    public static function about(Request $request)
    {
        echo "about";
    }

    public static function login(Request $request)
    {
        echo "login";
    }

    //contact
    public static function contact(Request $request)
    {
        echo "contact";
    }

    //blog
    public static function blog(Request $request, $args)
    {
        echo "blog";
        // var_dump($args);
    }

    //area
    public static function area(Request $request, $args)
    {
        echo "<h1>Area External</h1>";
    }
}
