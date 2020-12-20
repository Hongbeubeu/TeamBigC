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
            $userBaseInfo = $this->getUserBaseInfo();
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
                $userBaseInfo = $this->getUserBaseInfo();
                $posts = $postModel->getPostsMyselft($id);
                $this->setUserBaseInfo($userBaseInfo);
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
            //get list id which in groupId
            $postModel = new PostModel();
            $postGroupModel = new PostGroupModel();
            $groupPosts = $postGroupModel->getGroupPosts($groupId);
            
            //get post by id, which query in $groupPosts
            $count = count($groupPosts);
            for($i = 0; $i < $count; $i++){
                $groupPosts[$i]['id'] = $groupPosts[$i]['post_id'];
                $post = $postModel->getPost($groupPosts[$i]['id']);
                $groupPosts[$i] = $post[0];
            }

            //get group information
            $userGroupModel = new UserGroupModel();
            $groupModel = new GroupModel();
            $userProfileModel = new UserProfileModel();
            $groupInfo = $groupModel->getGroupInformation($groupId);
            $ownerGroupInfo = $userProfileModel->getUserBaseInformation($groupInfo[0]['owner_id']);
            $groupInfo[0]['picture'] = $ownerGroupInfo[0]['picture'];
            $groupInfo[0]['name'] = $ownerGroupInfo[0]['display_name'];
            $groupInfo[0]['members'] = $userGroupModel->countGroupUsers($groupId);

             //get user base information
             $userBaseInfo = $this->getUserBaseInfo();

             //bind values to view
            $this->setParameterPost($groupPosts);
            $this->setUserBaseInfo($userBaseInfo);
            $this->setParameter($groupInfo);

            //render view
            $this->render(DS . "Groups" . DS . "groups"); 
        }
    }

    public function search()
    {
        $arr = explode('?', $_SERVER['REQUEST_URI']);
        $search = str_replace('search=', '', $arr[1]);
        $search = $this->secure_input($search);
        $userProfileModel = new UserProfileModel();
        $groupModel = new GroupModel();
        $resultPeople = $userProfileModel->search($search);
        
        $resultGroup = $groupModel->search($search);
        $result['people'] = $resultPeople;
        $result['group'] = $resultGroup;
        $userBaseInfo = $this->getUserBaseInfo();
        $this->setUserBaseInfo($userBaseInfo);
        $this->setParameter($result);
        $this->render(DS . "Searchs" . DS . "search");
    }

    private function getUserBaseInfo()
    {
        $userProfileModel = new UserProfileModel();
        $userModel = new UserModel();
        $userBaseInfo = $userProfileModel->getUserBaseInformation($_SESSION['user_id']);
        $userBaseInfo[0]['star'] = $userModel->getStar($_SESSION['user_id'])[0]['star'];
        return $userBaseInfo;
    }

    function error() 
    {
        $this->render(DS . "Layouts" . DS . "error");
    }
    function test()
    {
        $this->render(DS . "Modules" . DS . "profilecopy");
    }
}
