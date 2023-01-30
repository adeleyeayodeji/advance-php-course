<?php

namespace App\Core;

use App\Core\Session;

class MiddleWare
{
    public static function action($action = '')
    {
        if (method_exists(self::class, $action)) {
            return self::$action();
        } else {
            return ['error' => 'Middleware {' . $action . '} action not found', 'code' => 404];
        }
    }

    //user
    public static function user()
    {
        $session = new Session;
        if (!$session->has('user')) {
            return ['error' => 'You are not logged in', 'code' => 401, 'redirect' => '/login'];
        }
        return ['code' => 200];
    }
}
