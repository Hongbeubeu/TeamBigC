<?php

namespace Application\Controllers;

use Application\Models\PostModel;
use Application\Models\UserModel;
use Application\Models\UserProfileModel;
use Core\BaseController;

class HomeController extends BaseController
{

    private function checkLogin()
    {
        if (!isset($_SESSION['session_id'])) {
            return false;
        }
        return true;
    }

    function login()
    {
        if ($this->checkLogin() == true) {
            header('location:/newfeed');
        } else
            $this->render(DS . "Authentication" . DS . "login");
    }

    function register()
    {
        $this->render(DS . "Authentication" . DS . "register");
    }

    function newfeed()
    {
        if ($this->checkLogin()) {
            $postModel = new PostModel();
            $posts = $postModel->getPosts(14);
            $this->setParameter($posts);
            $this->render(DS . "Feeds" . DS . "newfeeds");
        } else
            header('location:/login');
    }

    function status($id)
    {
        $data = [
            'id' => $id
        ];
        $this->setParameter($data);
        $this->render(DS . "Posts" . DS . "status_post");
    }
    function profile(){
        {
            if ($this->checkLogin()) {
                $userModel = new UserModel();
                $email = $_SESSION['session_id'];
                $userId = $userModel->getUserId($email);
                $userProfileModel =  new UserProfileModel();
                $userInfo = $userProfileModel->getProfileInformation($userId);
                $this->setParameter($userInfo);
                $this->render(DS . "Profile" . DS . "profile");
            } else
                header('location:/login');
        }
       
    }
}
