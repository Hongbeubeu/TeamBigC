<?php
namespace Core\ORM;

class MysqlAdapter implements DatabaseInterface {

    function __construct(){
        $this->parent->__construct();
    }

    function connect()
    {
        
    }

    function disconnect()
    {
        
    }

    function insert(string $tableName, array $columns, array $values)
    {
        
    }

    function update(string $tableName, array $columns, array $values, array $conditions)
    {
        
    }

    function select(string $tableName, string $columns, array $conditions, int $limit, int $offset)
    {
        
    }

    function delete(string $tableName, array $conditions)
    {
        
    }
    /**
     * @param array $keys
     * @param array $values
     * @return string
     */
    function generateUpdateString(array $keys, array $values){

    }

    function generateWhereString(array $arrayValues){

    }

    function fetchFields(string $tableName)
    {
        
    }
}