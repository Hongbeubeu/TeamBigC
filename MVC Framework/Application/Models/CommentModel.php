<?php
namespace Application\Models;

use Core\BaseModel;

class CommentModel extends BaseModel
{
    public $table = "Comment";

    public function addComment(array $paramsIn) {
        $timestamp = date("Y-m-d H:i:s");
        $params['created_at'] = $timestamp;
        $params['updated_at'] = $timestamp;
        $params = array_merge($params, $paramsIn);
        $this->dbo->insert($this->table, $params);
    }

    public function getCommentsByPostId(int $postId) 
    {
        return $this->dbo
                ->table($this->table)
                ->select('user_id, post_id, content')
                ->where([['post_id', $postId]])
                ->limit(5)
                ->get()
                ->toArray();
    }
}