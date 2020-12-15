<?php

namespace Application\Models;

use Core\BaseModel;

class PostModel extends BaseModel
{
    public $table = "Post";

    public function postStatus(int $userId, string $type, string $caption, array $content = [])
    {
        $timestamp = date("Y-m-d H:i:s");

        $params['user_id'] = $userId;
        $params['type'] = $type;
        $params['caption'] = $caption;
        var_dump($content);
        if (!empty($content)) {
            $jsonContend = json_encode($content);
            $params['content'] = $jsonContend;
        }
        $params['created_at'] = $timestamp;
        $params['updated_at'] = $timestamp;
        $this->dbo
            ->insert($this->table, $params);
    }

    public function getPosts(int $userId)
    {
        return $this->dbo
            ->table($this->table)
            ->where([['user_id', $userId]])
            ->get()
            ->toArray();
    }
}
