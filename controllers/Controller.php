<?php

class Controller
{
    public static function createView($viewName)
    // po psr-0 metod mae nazuvatusia pershe z maloi bykvu
    {
        require_once './Views/' . $viewName . '.php';
    }
}