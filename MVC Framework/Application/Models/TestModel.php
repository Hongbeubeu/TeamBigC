<?php
namespace Application\Models;

use Core\BaseModel;

class TestModel extends BaseModel
{
    public $table = "items";
   
    public function getAllItems()
    {
        return $this->dbo->table($this->table)->get()->toArray();
    }
}