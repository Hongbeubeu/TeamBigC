<?php

namespace Application\Controllers;

use Application\Models\GroupModel;
use Application\Models\PostGroupModel;
use Application\Models\PostModel;
use Application\Models\UserGroupModel;
use Application\Models\UserModel;
use Application\Models\UserProfileModel;
use Core\BaseController;

class HomeController extends BaseController
{
    function login()
    {
        if ($this->checkLogin() == true) {
            header('location:/newfeed');
        }
        $this->render(DS . "Authentications" . DS . "login");
    }

    function register()
    {
        $this->render(DS . "Authentications" . DS . "register");
    }

    function newfeed()
    {
        if ($this->checkLogin()) {
            $postModel = new PostModel();
            $userModel = new UserModel();
            $userProfileModel = new UserProfileModel();
            $userBaseInfo = $userProfileModel->getUserBaseInformation($_SESSION['user_id']);
            $userBaseInfo[0]['star'] = $userModel->getStar($_SESSION['user_id'])[0]['star'];
            $this->setUserBaseInfo($userBaseInfo);
            $posts = $postModel->getPosts($_SESSION['user_id']);
            $this->setParameterPost($posts);
            $this->render(DS . "Feeds" . DS . "newfeeds");
            // $this->render(DS . "Searchs" . DS . "search");
        } else
            header('location:/login');
    }

    function profile($id)
    {
        if (!$this->checkLogin())
            header('location:/login');
        else {
            $userModel = new UserModel();
            if (!$userModel->checkId($id))
                header('location:/profile/' . $_SESSION['user_id']);
            else {
                $userProfileModel =  new UserProfileModel();
                $postModel = new PostModel();
                //Get information of mine|another people profile site
                $userInfo = $userProfileModel->getProfileInformation($id);
                $userBaseInfo[0]['star'] = $userModel->getStar($_SESSION['user_id'])[0]['star'];
                $posts = $postModel->getPostsMyselft($id);
                $this->setParameterPost($posts);
                $this->setParameter($userInfo);
                $this->render(DS . "Profile" . DS . "profile");
            }
        }
    }

    function group($groupId)
    {
        if (!$this->checkLogin())
            header('location:/login');
        else {
            $groupModel = new GroupModel();
            $userProfileModel = new UserProfileModel();
            $userModel = new UserModel();
            $userBaseInfo = $userProfileModel->getUserBaseInformation($_SESSION['user_id']);
            $groupInfo = $groupModel->getGroupInformation($groupId);
            $userBaseInfo[0]['star'] = $userModel->getStar($_SESSION['user_id'])[0]['star'];
            $postGroupModel = new PostGroupModel();
            $postModel = new PostModel();
            $groupPosts = $postGroupModel->getGroupPosts($groupId);
            
            $count = count($groupPosts);
            for($i = 0; $i < $count; $i++){
                $groupPosts[$i]['id'] = $groupPosts[$i]['post_id'];
                $post = $postModel->getPost($groupPosts[$i]['id']);
                $groupPosts[$i] = $post[0];
            }
            $ownerGroupInfo = $userProfileModel->getUserBaseInformation($groupInfo[0]['owner_id']);
            $groupInfo[0]['picture'] = $ownerGroupInfo[0]['picture'];
            $groupInfo[0]['name'] = $ownerGroupInfo[0]['display_name'];
            $userGroupModel = new UserGroupModel();
            $groupInfo[0]['members'] = $userGroupModel->countGroupUsers($groupId);
            $this->setParameterPost($groupPosts);
            $this->setUserBaseInfo($userBaseInfo);
            $this->setParameter($groupInfo);
            $this->render(DS . "Groups" . DS . "groups"); 
        }
    }

    function error() 
    {
        $this->render(DS . "Groups" . DS . "groups");
    }
    function test()
    {
        $this->render(DS . "Modules" . DS . "profilecopy");
    }
}
