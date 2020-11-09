<?php

class Database
{
    //Instance of class Database to connect database
    private static $dbConnection = null;

    private function __construct() {
    }

    public static function getConnection() {
        if(is_null(self::$dbConnection)) {
            self::$dbConnection = new PDO("mysql:host=localhost;dbname=todo_php", 'root', 'root');
        }
        return self::$dbConnection;
    }
}
?>