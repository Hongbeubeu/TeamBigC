<?php

namespace Application\Controllers;

use Core\BaseController;

class AjaxEndPoint extends BaseController
{
	public function comment($comment, $postId, $userId)
	{
		echo $comment . $postId . $userId;
	}
}
