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

    public function getPasswordByEmail(string $email) {
        $output = $this->dbo->table($this->table)->where([['email', $email]])->get()->toArray();
        return $output[0]['password'];
    }

    public function getUserId(string $email) {
        $output = $this->dbo->table($this->table)->where([['email', $email]])->get()->toArray();
        return $output[0]['id'];
    }

    public function getUserInfo(int $id) {
        return $this->dbo->table($this->table)->where([['id', $id]])->get()->toArray();
    }

    public function checkId(int $id){
        $count = $this->dbo
                    ->table($this->table)
                    ->where($id)
                    ->count();
        if ($count <= 0)
           return false;
        else
            return true;
    }

    public function getStar(int $id) {
        return $this->dbo
                    ->table($this->table)
                    ->select('star')
                    ->where($id)
                    ->get()
                    ->toArray();
    }
}