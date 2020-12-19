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

    public function getGroupUsers(int $groupId)
    {
        return $this->dbo 
                    ->table($this->table)
                    ->select('user_id')
                    ->where([['group_id', $groupId]])
                    ->get()
                    ->toArray();
    }
}