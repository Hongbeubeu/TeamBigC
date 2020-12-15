<?php

namespace Application\Models;

use Core\BaseModel;

class UserProfileModel extends BaseModel
{
    public $table = "User_Profile";

    public function setProfileInformation(array $paramsIn)
    {
        $timestamp = date("Y-m-d H:i:s");
        $params['created_at'] = $timestamp;
        $params['updated_at'] = $timestamp;
        $params = array_merge($params, $paramsIn);
        return $this->dbo
                        ->insert($this->table, $params);
    }

    public function getUserBaseInformation($userId) {
        return $this->dbo
                    ->table($this->table)
                    ->select('picture, display_name')
                    ->where([['user_id', $userId]])
                    ->get()
                    ->toArray();
    }

    public function getProfileInformation($user_id)
    {
        return $this->dbo->table($this->table)->where([['user_id', $user_id]])->get()->toArray();
    }
    public function updateInformation(array $paramsIn, $paramsQuery)
    {
        $timestamp = date("Y-m-d H:i:s");
        $params['created_at'] = $timestamp;
        $params['updated_at'] = $timestamp;
        $params = array_merge($params, $paramsIn);
        return $this->dbo->updateProfile($this->table, $params, $paramsQuery);
    }
}
