<?php
namespace Core\ORM;

interface DatabaseInterface {
    /**
     * @return void
     */
    function connect();

    /**
     * @return void
     */
    function disconnect();

    /**
     * @param string $tableName
     * @param array $params
     * @return mixed
     */
    function insert(string $tableName, array $params);

    /**
     * @param string $tableName
     * @param array $conditions
     * @param array $params
     * @return mixed
     */
    function update(string $tableName, array $params, array $conditions);

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