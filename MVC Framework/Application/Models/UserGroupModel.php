<?php
namespace Application\Models;

use Core\BaseModel;

class UserGroupModel extends BaseModel
{
    public $table = "User_Group";

    public function addUserToGroup(int $userId,int $groupId)
    {
        $timestamp = date("Y-m-d H:i:s");
        $params['created_at'] = $timestamp;
        $params['updated_at'] = $timestamp;
        $params['user_id'] = $userId;
        $params['group_id'] = $groupId;
        $this->dbo->insert($this->table, $params);
    }

    public function removeUserFromGroup(int $userId, int $groupId)
    {
        $this->dbo->delete($this->table)->where([['user_id', $userId], ['group_id', $groupId]])->exec();
    }

    public function countGroupUsers(int $groupId)
    {
        return $this->dbo 
                    ->table($this->table)
                    ->where([['group_id', $groupId]])
                    ->count();
    }

    public function getGroupUserAttended(int $userId)
    {
        return $this->dbo
                    ->table($this->table)
                    ->select('group_id')
                    ->where([['user_id', $userId]])
                    ->get()
                    ->toArray();
    }

    public function checkJoined(int $userId, int $groupId)
    {
        $count = $this->dbo
                    ->table($this->table)
                    ->where([['user_id', $userId], ['group_id', $groupId]])
                    ->count();
        if($count == 0)
            return false;
        else    
            return true;
    }
}