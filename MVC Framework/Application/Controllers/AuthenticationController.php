<?php

namespace Application\Controllers;

use Core\BaseController;
use Application\Models\UserModel;
use Application\Models\UserProfileModel;

class AuthenticationController extends BaseController
{
    function login()
    {
        $formPost = $_POST;
        $this->secure_form($formPost);
        $email = $formPost['email'];
        $password = $formPost['password'];
        $userModel = new UserModel();
        if ($userModel->checkEmail($email) != 0) {
            $encriptPassword = md5($password);
            $hookPassword = $userModel->getPasswordByEmail($email);
            if ($hookPassword == $encriptPassword) {
                $id = $userModel->getUserId($email);
                $session_id = $email;
                $_SESSION['session_id'] = $session_id;
                $_SESSION['user_id'] = $id;
                header('location:/newfeed');
            } else {
                $this->setError('Nhập mật khẩu hoặc email sai!');
                $hint['email'] = $email;
                $this->setParameter($hint);
                $this->render(DS . "Authentications" . DS . "login");
            }
        } else {
            $this->setError('Nhập mật khẩu hoặc email sai!');
            $this->render(DS . "Authentications" . DS . "login");
        }
    }

    function register()
    {
        $formPost = $_POST;
        //filter input 
        $this->secure_form($formPost);

        //get input from form
        $email = $formPost['email'];
        $password = $formPost['password'];
        $confirmPassword = $formPost['confirmpassword'];
        $displayName = $formPost['displayname'];

        $userModel = new UserModel();
        //check validable email
        if ($userModel->checkEmail($email) == 0) {
            if ($password == $confirmPassword) {
                $pass = md5($password);
                $params['email'] = $email;
                $params['password'] = $pass;
                $userId = $userModel->addNewUser($params);

                $userProfileModel = new UserProfileModel();
                $profileParams['user_id'] = $userId;
                $profileParams['picture'] = '/public/assets/default.jpg';
                $profileParams['display_name'] = $displayName;
                $userProfileModel->setProfileInformation($profileParams);
                $session_id = $email;
                $_SESSION['session_id'] = $session_id;
                $_SESSION['user_id'] = $userId;
                header('location:/newfeed');
            } else {
                //password unmatch
                $this->setError('Nhập mật khẩu không khớp');
                $this->render(DS . "Authentications" . DS . "register");
            }
        } else {
            //email already exist in system
            $this->setError('Email đã tồn tại');
            $this->render(DS . "Authentications" . DS . "register");
        }
    }

    function logout()
    {
        unset($_SESSION['session_id']);
        unset($_SESSION['user_id']);
        session_destroy();
        header('location:/login');
    }
}
