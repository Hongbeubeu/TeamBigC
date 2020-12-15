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
        $posts = $this->dbo
            ->table($this->table)
            ->get()
            ->toArray();
        $count = count($posts);
        for($i = 0; $i < $count; $i++) {
            $userProfile = new UserProfileModel();
            $user = $userProfile->getUserBaseInformation($posts[$i]['user_id']);
            $posts[$i]['picture'] = $user[0]['picture'];
            $posts[$i]['display_name'] = $user[0]['display_name'];
        }
        return $posts;
    }
}
