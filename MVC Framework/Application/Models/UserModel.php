<?php
namespace Application\Models;

use Core\BaseModel;

class UserModel extends BaseModel
{
    public $table = "User";
   
    public function checkEmail(string $email) {
        return $this->dbo->table($this->table)->where([['email', $email]])->count();
    }

    public function addNewUser(array $paramsIn) {
        $timestamp = date("Y-m-d H:i:s");
        $params['account_status'] = "active";
        $params['created_at'] = $timestamp;
        $params['updated_at'] = $timestamp;
        $params = array_merge($params, $paramsIn);
        return $this->dbo->insert($this->table, $params);
    }
}