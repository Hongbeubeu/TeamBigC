<?php

class DatabaseConnect
{
    //Instance of class Database to connect database
    private static $instance = null;
    private $conn;
    //Connect database input
    // private $host = '35.192.204.170';
    // private $user = 'letuan';
    // private $password = 'Technology@123';
    // private $dbname = 'social_network';

    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $dbname = 'todo';

    private function __construct() {
        $this->conn = new PDO("mysql:host={$this->host};
        dbname={$this->dbname}", $this->user, $this->password,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    }

    public static function getInstance() {
        if(!self::$instance) {
            self::$instance = new DatabaseConnect();
        }
        return self::$instance;
    }

    function getConnection() {
        return $this->conn;
    }

    function disconnect() {
        $this->conn = null;
    }

    function getcon() {
        return $this->conn;
    }
}
