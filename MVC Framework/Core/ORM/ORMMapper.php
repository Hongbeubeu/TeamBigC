<?php
namespace Core\ORM;

class ORMMapper implements MapperInterface {
    private $_tableName = '';
    private $_adapter;

    function __construct()
    {
        $this->_adapter = new MysqlAdapter();
        $this->loadClassProperties();
    }

    function finddAll(){

    }

    function findById(int $id)
    {
        
    }
    
    function save()
    {
        
    }

    function loadClassProperties()
    {
        
    }

    function buildResponseObject($result){

    }

    /**
     * @param string $tableName
     * @return void
     */
    public function setTableName(string $tableName) {
        $this->_tableName = $tableName;
    }
}