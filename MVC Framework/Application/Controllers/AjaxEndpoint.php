<?php

namespace Application\Controllers;

use Application\Models\CommentModel;
use Application\Models\LikePostModel;
use Core\BaseController;

class AjaxEndPoint extends BaseController
{
	public function comment()
	{
		$commentModel = new CommentModel();
		$params['content'] = $_POST['comment'];
		$params['post_id'] = $_POST['postId'];
		$params['user_id'] = $_POST['userId'];
		$this->secure_form($params);
		$commentModel->addComment($params);
		echo $_POST['postId'];
	}

	public function like()
	{
		$likePostModel = new LikePostModel();
		$params['user_id'] = $_POST['userId'];
		$params['post_id'] = $_POST['postId'];
		$this->secure_form($params);
		$likePostModel->like($params);
		echo "liked";
	}

	public function unlike()
	{
		$likePostModel = new LikePostModel();
		$paramsIn = [
            ['user_id', (int)$_POST['userId']],
            ['post_id', (int)$_POST['postId']]
		];
		
		$likePostModel->unlike($paramsIn);
		echo "unliked";
	}
}
