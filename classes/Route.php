<?php

class Route
{
    public static $validRoutes = [];

    public static function set($route, $function){

        self::$validRoutes[] = $route;
        // logichno b bylo b $this->
        // Метод __invoke() вызывается, когда скрипт пытается выполнить объект как функцию.

        if ($_GET['url'] == $route){
            $function->__invoke();
        } else {
            // TODO Error page
        }

        //print_r(self::$validRoutes);
    }
}