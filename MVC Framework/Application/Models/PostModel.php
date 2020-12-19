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
            ->select('id, user_id, caption, content')
            ->limit(6)
            ->orderBy('id', 'DESC')
            ->get()
            ->toArray();
        $posts = $this->getMoreInformation($posts);
        return $posts;
    }

    public function getPostsMyselft(int $userId)
    {
        $posts = $this->dbo
                        ->table($this->table)
                        ->where([['user_id', $userId]])
                        ->orderBy('id', 'DESC')
                        ->limit(10)
                        ->get()
                        ->toArray();
        $posts = $this->getMoreInformation($posts);
        return $posts;
    }

    public function updatePost(array $params, int $postId)
    {
        $this->dbo->update($this->table, $params)->where([['id', $postId]])->exec();
    }

    private function getMoreInformation($posts)
    {
        $count = count($posts);
        for($i = 0; $i < $count; $i++) {
            $userProfile = new UserProfileModel();
            $user = $userProfile->getUserBaseInformation($posts[$i]['user_id']);
            $posts[$i]['picture'] = $user[0]['picture'];
            $posts[$i]['display_name'] = $user[0]['display_name'];
            $commentModel = new CommentModel();
            $comments = $commentModel->getCommentsByPostId($posts[$i]['id']);
            $countComment = count($comments);
            for($j = 0; $j < $countComment; $j++){
                $userCmt = $userProfile->getUserBaseInformation($comments[$j]['user_id']);
                $comments[$j]['picture'] = $userCmt[0]['picture'];
                $comments[$j]['display_name'] = $userCmt[0]['display_name'];
            }
            $posts[$i]['comments'] = $comments;
            $likePostModel = new LikePostModel();
            $likeCounts = $likePostModel->countLike($posts[$i]['id']);
            $posts[$i]['like_count'] = $likeCounts;
            $isLiked = $likePostModel->isLikedByUser($_SESSION['user_id'], $posts[$i]['id']);
            $posts[$i]['is_liked'] = $isLiked;
        }
        return $posts;
    }
    
}
