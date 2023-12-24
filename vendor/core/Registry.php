<?php

namespace vendor\core;

class Registry{

    public static $objects = [];

    private static $instance;

    private function __construct(){
        $db = require ROOT . '/config/config.php';
        foreach ($db['components'] as $name => $component){
            self::$objects[$name] = new $component;
        }
    }

    public static function instance(){
        if(self::$instance === null){
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function __get($name)
    {
        if(is_object(self::$objects[$name])){
            return self::$objects[$name];
        }
    }

    public function __set($name, $object)
    {
        if(!isset(self::$objects[$name])){
            self::$objects[$name] = new $object;
        }
    }

    public function getList(){
        echo '<pre>';
        echo var_dump(self::$objects);
        echo '</pre>';
    }

}