<?php

namespace Application\Controllers;

use Application\Models\GroupModel;
use Application\Models\UserGroupModel;
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
        $userGroupModel = new UserGroupModel();
        $userGroupModel->addUserToGroup($_SESSION['user_id'], $groupId);
        header('location:/group/' . $groupId);
    }

    public function editGroup()
    {
        $formPost = $_POST;
        $this->secure_form($formPost);
        $params['group_name'] = $formPost['groupName'];
        $params['slogan'] = $formPost['slogan'];
        $params['target_star'] = $formPost['targetStar'];
        $params['description'] = $formPost['description'];
        $groupModel = new GroupModel();
        $arr = explode('/', $_POST['url']);
        $groupId = end($arr);
        $groupModel->updateGroup($params, $groupId);
        header('location:' . $formPost['url']);
    }
}
