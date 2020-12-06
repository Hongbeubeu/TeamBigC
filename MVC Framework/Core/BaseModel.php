<?php
namespace Core;

use Core\ORM\QueryBuilder;

class BaseModel {
    protected $dbo;
    function __construct()
    {
        $this->dbo = QueryBuilder::getInstance();
    }
}