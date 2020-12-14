<?php

namespace Application\Controllers;

use Application\Models\PostModel;
use Application\Models\UserModel;
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
            $posts = $postModel->getPosts(14);
            $this->setParameter($posts);
            $this->render(DS . "Feeds" . DS . "newfeeds");
        } else
            header('location:/login');
    }

    function status($id)
    {
        if (!$this->checkLogin())
            header('location:/login');
        else {
            $data = [
                'id' => $id
            ];
            $this->setParameter($data);
            $this->render(DS . "Posts" . DS . "status_post");
        }
    }

    function profile($id)
    {
        if (!$this->checkLogin())
            header('location:/login');
        else {
            if ($id != $_SESSION['user_id'])
                header('location:/profile/' . $_SESSION['user_id']);
            else {
                $this->render(DS . "Feeds" . DS . "profile");
            }
        }
    }
}
