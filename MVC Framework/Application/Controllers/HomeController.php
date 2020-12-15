<?php

namespace Application\Controllers;

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
            $this->setParameter($posts);
            $this->render(DS . "Feeds" . DS . "newfeeds");
        } else
            header('location:/login');
    }

    function profile($id)
    {
    
        if (!$this->checkLogin())
            header('location:/login');
        else {
            $userProfileModel =  new UserProfileModel();
            $postModel = new PostModel();
            $userInfo = $userProfileModel->getProfileInformation($id);
            $userBaseInfo = $userProfileModel->getUserBaseInformation($_SESSION['user_id']);
            $this->setUserBaseInfo($userBaseInfo);
            $posts = $postModel->getPostsMyselft($id);
            $this->setParameterPost($posts);
            //$this->setUserBaseInfo($userBaseInfo);
            $this->setParameter($userInfo);
            $this->render(DS . "Profile" . DS . "profile");
        }
    }

    function error() 
    {
        $this->render(DS . "Layouts" . DS . "error");
    }
}
