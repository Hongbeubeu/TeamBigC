<?php
namespace Core\ORM;

interface DatabaseInterface {
    /**
     * @return bool
     */
    function connect();

    /**
     * @return void
     */
    function disconnect();

    /**
     * @param string $tableName
     * @param array $columns
     * @param array $values
     * @return mixed
     */
    function insert(string $tableName, array $columns, array $values);

    /**
     * @param string $tableName
     * @param array $conditions
     * @param array $columns
     * @param array $values
     * @return mixed
     */
    function update(string $tableName, array $columns, array $values, array $conditions);

    /**
     * @param string $tableName
     * @param string $columns
     * @param array $conditions
     * @param int $limit
     * @param int $offset
     * @return mixed
     */
    function select(string $tableName,string $columns, array $conditions, int $limit, int $offset);

    /**
     * @param string $tableName
     * @param array $conditions
     * @return mixed
     */
    function delete(string $tableName, array $conditions);

    /**
     * @param string $tableName
     * @return array
     */
    function fetchFields(string $tableName);
}