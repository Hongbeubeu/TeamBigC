<?php
namespace Application\Models;

use Core\BaseModel;

class PostGroupModel extends BaseModel
{
    public $table = "Post_Group";

    public function addPostToGroup(int $postId,int $groupId)
    {
        $timestamp = date("Y-m-d H:i:s");
        $params['created_at'] = $timestamp;
        $params['updated_at'] = $timestamp;
        $params['post_id'] = $postId;
        $params['group_id'] = $groupId;
        $this->dbo->insert($this->table, $params);
    }

    public function getGroupPosts(int $groupId)
    {
        return $this->dbo 
                    ->table($this->table)
                    ->select('post_id')
                    ->where([['group_id', $groupId]])
                    ->get()
                    ->toArray();
    }
}