<?php
namespace Application\Models;

use Core\BaseModel;

class FollowingRelationShipModel extends BaseModel
{
    public $table = "Following_RelationShip";

    public function follow(int $followerId,int $userId)
    {
        $timestamp = date("Y-m-d H:i:s");
        $params['created_at'] = $timestamp;
        $params['updated_at'] = $timestamp;
        $params['following_id'] = $followerId;
        $params['user_id'] = $userId;
        $this->dbo->insert($this->table, $params);
    }
}