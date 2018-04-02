<?php

class Route {
    protected static $routes;
    public static function get(...$args)
    {
        self::$routes[] = $args;
    }

}