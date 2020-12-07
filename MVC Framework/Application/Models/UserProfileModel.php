<?php
namespace Application\Models;

use Core\BaseModel;

class UserProfileModel extends BaseModel
{
    public $table = "User_Profile";
   
    public function setProfileInformation(array $paramsIn) {
        $timestamp = date("Y-m-d H:i:s");
        $params['created_at'] = $timestamp;
        $params['updated_at'] = $timestamp;
        $params = array_merge($params, $paramsIn);
        return $this->dbo->insert($this->table, $params);
    }
}