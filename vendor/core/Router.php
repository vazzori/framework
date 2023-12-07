<?php

class Router
{
//    public function __construct(){
//        echo 'hello, world';
//    }

    protected static $routes = [];
    protected static $route = [];

    protected $test;

    public static function add($regexp, $route = []){
        self::$routes[$regexp] = $route;
    }

    public static function getRoutes(){
        return self::$routes;
    }

    public static function getRoute(){
        return self::$route;
    }

    protected static function matchRoute($url){
        foreach (self::$routes as $pattern => $route){
            if(preg_match("#$pattern#i", $url, $matches)){
                foreach ($matches as $k => $v){
                    if(is_string($k)){
                        $route[$k] = $v;
                    }
                }
                if(!isset($route['action'])){
                    $route['action'] = 'index';
                }
                self::$route = $route;
                return true;
            }
        }
        return false;
    }

    public static function dispatch($url){
        if(self::matchRoute($url)){
            $controller = self::upperCamelCase(self::$route['controller']);
            if(class_exists($controller)){
                $cObj = new $controller;
                $action = self::lowerCamelCase(self::$route['action'].'Action');
                if(method_exists($cObj, $action)){
                    $cObj->$action();
                }else{
                    echo "Method <b>$controller::$action</b> not found";
                }
            }else{
                echo "Controller <b>$controller</b> not found";
            }
        }else{
            http_response_code(404);
            include '404.php';
        }
    }

    protected static function upperCamelCase($name){
        // по курсу
        //$name = str_replace('-', ' ', $name);
        //$name = ucwords($name, ' ');
        //$name = str_replace(' ', '', $name);

        return str_replace(' ', '', ucwords(str_replace('-', ' ', $name), ' '));

        //моя реализация
        //$name = ucwords($name, '-');
        //$name = str_replace('-', '', $name);

    }

    protected static function lowerCamelCase($name){
        return lcfirst(self::upperCamelCase($name));
    }

}