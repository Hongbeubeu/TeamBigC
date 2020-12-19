<?php

namespace Application\Controllers;

use Application\Models\GroupModel;
use Core\BaseController;
use Application\Models\UserModel;
use Application\Models\UserProfileModel;

class GroupController extends BaseController
{
    public function createGroup()
    {
        $formPost = $_POST;
        $this->secure_form($formPost);
        $params['owner_id'] = $_SESSION['user_id'];
        $params['group_name'] = $formPost['groupName'];
        $params['slogan'] = $formPost['slogan'];
        $params['description'] = $formPost['description'];
        $params['target_star'] = $formPost['targetStar'];
        $groupModel = new GroupModel();
        $groupId = $groupModel->createGroup($params);
        header('location:/group/' . $groupId);
    }
}
