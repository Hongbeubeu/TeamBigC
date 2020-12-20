<?php
namespace Application\Models;

use Core\BaseModel;

class FollowingRelationShipModel extends BaseModel
{
    public $table = "Following_Relationship";

    public function follow(int $followerId,int $userId)
    {
        $timestamp = date("Y-m-d H:i:s");
        $params['created_at'] = $timestamp;
        $params['updated_at'] = $timestamp;
        $params['following_id'] = $followerId;
        $params['user_id'] = $userId;
        $this->dbo->insert($this->table, $params);
    }

    public function unfollow(int $unfollowerId, int $userId)
    {
        $this->dbo->delete($this->table)->where([['following_id', $unfollowerId], ['user_id', $userId]])->exec();
    }
    public function getCountFollower(int $userId)
    {
        return $this->dbo
                    ->table($this->table)
                    ->where([['user_id', $userId]])
                    ->count();
    }

    public function getCountFollowing(int $followerId)
    {
        return $this->dbo
                    ->table($this->table)
                    ->where([['following_id', $followerId]])
                    ->count();
    }

    public function checkFollow(int $followerId, int $userId)
    {
        $count = $this->dbo
                    ->table($this->table)
                    ->where([['following_id', $followerId], ['user_id', $userId]])
                    ->count();
        if($count == 0)
            return false;
        else    
            return true;
    }
}