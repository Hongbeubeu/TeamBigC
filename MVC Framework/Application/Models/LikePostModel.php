<?php
namespace Application\Models;

use Core\BaseModel;

class LikePostModel extends BaseModel
{
    public $table = "Like_Post";

    public function like(array $paramsIn) 
    {
        $timestamp = date("Y-m-d H:i:s");
        $params['created_at'] = $timestamp;
        $params['updated_at'] = $timestamp;
        $params = array_merge($params, $paramsIn);
        $this->dbo->insert($this->table, $params);
    }

    public function unlike(array $paramsIn)
    {
        $this->dbo->delete($this->table, $paramsIn);
    }

    public function countLike(int $postId)
    {
        return $this->dbo
                ->table($this->table)
                ->where([['post_id', $postId]])
                ->count();
    }

    public function isLikedByUser(int $userId, int $postId)
    {
        $count = $this->dbo
                    ->table($this->table)
                    ->where([['user_id', $userId], ['post_id', $postId]])
                    ->count();
        if($count == 0)
            return false;
        else 
            return true;
    }
}