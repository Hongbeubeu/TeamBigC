<?php

namespace Application\Controllers;

use Application\Models\CommentModel;
use Core\BaseController;

class AjaxEndPoint extends BaseController
{
	public function comment($comment, $postId, $userId)
	{
		$commentModel = new CommentModel();
		$params['content'] = $comment;
		$params['post_id'] = $postId;
		$params['user_id'] = $userId;
		$this->secure_form($params);
		$commentModel->addComment($params);
		echo $comment;
	}
}
