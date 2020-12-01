<?php
namespace Core\ORM;

use DatabaseConnect;
class MysqlAdapter implements DatabaseInterface {

    //connection to database
    private $connection = null;
    private $query;
    private $stmt;
    //Constructor
    function __construct() {
    }
    
    /**
     * @method connect() is used for get connection to database
     * @return void
     */
    function connect() {
        $this->connection = DatabaseConnect::getInstance()->getConnection();
    }

    /**
     * @method disconnect() is used for disconnect to database
     * @return void
     */
    function disconnect() {
        DatabaseConnect::getInstance()->disconnect();
        $this->connection = null;
    }

    function insert(string $tableName, array $params) {
        $query = 'INSERT INTO $tableName (';
        foreach ($params as $column => $value) {
            if ($column != array_key_last($params))
                $query .= $column . ', ';
            else
                $query .= $column . ') ';
        }
        
        $query .= 'VALUES (';
        foreach ($params as $column => $value) {
            if ($column != array_key_last($params))
                $query .= '?, ';
            else
                $query .= '?)';
        }
        $stmt = $this->connection->prepare($query);
        $i = 0;
        foreach ($params as $column => $value) {
            ++$i;
            $stmt->bindValue($i, $value);
        }
        $stmt->execute();
    }
    //todo need to fix generate where string
    function generateWhereString(array $arrayValues) {
        $buildString = '';
        foreach($arrayValues as $key => $value) {
            $buildString .= $key . '=?';
        }
        return null;
    }

    function update(string $tableName, array $params, array $conditions) {
        $query = 'UPDATE $tableName SET ';
        foreach($params as $column => $value) {
            if ($column != array_key_last($params))
                $query .= $column . '=?, ';
            else
                $query .= $column . '=? ';
        $whereString = $this->generateWhereString($conditions);
        }
    }

    function select(string $tableName, string $columns, array $conditions, int $limit, int $offset) {
        
    }

    function delete(string $tableName, array $conditions) {
        
    }
    /**
     * @param array $keys
     * @param array $values
     * @return string
     */
    function generateUpdateString(array $keys, array $values) {

    }

    function fetchFields(string $tableName) {
        
    }
}