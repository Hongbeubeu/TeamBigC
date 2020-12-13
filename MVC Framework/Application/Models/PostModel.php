<?php
namespace Application\Models;

use Core\BaseModel;

class PostModel extends BaseModel
{
    public $table = "Post";
   
    public function postStatus(int $userId, string $type, string $caption, array $content) {
        $timestamp = date("Y-m-d H:i:s");
        $jsonContend = json_encode($content);
        $params['user_id'] = $userId;
        $params['type'] = $type;
        $params['caption'] = $caption;
        $params['content'] = $jsonContend;
        $params['created_at'] = $timestamp;
        $params['updated_at'] = $timestamp;
        $this->dbo
            ->insert($this->table, $params);
    }

    public function getPosts(int $userId) {
        return $this->dbo
            ->table($this->table)
            ->get()
            ->toArray();
    }
}