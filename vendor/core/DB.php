<?php

namespace vendor\core;

class DB
{

    private $pdo;
    private static $instance;

    private function __construct() {
        $db = require ROOT . '/config/config_db.php';
        $this->pdo = new \PDO($db['dsn'], $db['user'], $db['pass']);
    }

    public static function instance(){
        if(self::$instance === null){
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function execute($sql){
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute();
    }

    public function query(){

    }

}