<?php

namespace Application\Models;

use Core\BaseModel;

class GroupModel extends BaseModel
{
    public $table = "Group";

    public function createGroup(array $paramsIn)
    {
        $timestamp = date("Y-m-d H:i:s");
        $params['created_at'] = $timestamp;
        $params['updated_at'] = $timestamp;
        $params['current_star'] = 0;
        $params = array_merge($params, $paramsIn);
        return $this->dbo->insert($this->table, $params);
    }

    public function getGroupInformation(int $groupId)
    {
        return $this->dbo
                    ->table($this->table)
                    ->select('owner_id, group_name, slogan, description, current_star, target_star')
                    ->where($groupId)
                    ->get()
                    ->toArray();
    }












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
    public function updateInformation(array $paramsIn)
    {
        $timestamp = date("Y-m-d H:i:s");
        $params['updated_at'] = $timestamp;
        $params = array_merge($params, $paramsIn);
        $userId = $_SESSION['user_id'];
        return $this->dbo->update($this->table, $params)->where([['user_id', $userId]])->exec();
    }
}
