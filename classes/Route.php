<?php

/**
 * Created by PhpStorm.
 * User: art25
 * Date: 31.08.2017
 * Time: 23:53
 */
class Route
{
    public static $validRoutes = array();

    public static function set($route, $function){
        self::$validRoutes[] = $route;
        print_r(self::$validRoutes);
    }
}