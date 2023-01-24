<?php

namespace App\Controller;

use App\Core\Request;

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
        return view('home/index', compact('name', 'age', 'array'));
    }

    //about
    public static function about(Request $request)
    {
        echo "about";
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
