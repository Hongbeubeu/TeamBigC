<?php

namespace Application\Controllers;

use Application\Models\GroupModel;
use Application\Models\PostModel;
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
            $userProfileModel = new UserProfileModel();
            $userBaseInfo = $userProfileModel->getUserBaseInformation($_SESSION['user_id']);
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
                //Get information of another people profile site
                // $userBaseInfo = $userProfileModel->getUserBaseInformation($id);
                $userInfo = $userProfileModel->getProfileInformation($id);
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
            $userBaseInfo = $userProfileModel->getUserBaseInformation($_SESSION['user_id']);
            $groupInfo = $groupModel->getGroupInformation($groupId);
            $postModel = new PostModel();
            // $groupPosts = $postModel->getGroupPosts($groupId);
            // $this->setParameterPost($groupPosts);
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
