<?php

namespace Application\Controllers;

use Core\BaseController;
use Core\Model;
use Application\Models\UserModel;
use Application\Models\UserProfileModel;
use Core\Route;

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
                $_SESSION['session_id'] = $email;
                if (isset($formPost['logged'])) {
                    setcookie('session_id', $email, time() + (86400 * 30), "/");
                }
                header('location:/newfeed');
            } else {
                header('location:/login');
            }
        } else {
            header('location:/login');
        }
    }

    function register()
    {
        $formPost = $_POST;
        $this->secure_form($formPost);

        $email = $formPost['email'];
        $password = $formPost['password'];
        $confirmPassword = $formPost['confirmpassword'];
        $displayName = $formPost['displayname'];

        $userModel = new UserModel();
        if ($userModel->checkEmail($email) == 0) {
            if ($password == $confirmPassword) {
                $pass = md5($password);
                $params['email'] = $email;
                $params['password'] = $pass;
                $userId = $userModel->addNewUser($params);

                $userProfileModel = new UserProfileModel();
                $profileParams['user_id'] = $userId;
                $profileParams['display_name'] = $displayName;
                $userProfileModel->setProfileInformation($profileParams);
            } else {
                echo "pass khong khop";
            }
        } else {
            echo "Email da duoc su dung";
        }
    }

    function logout()
    {
        unset($_SESSION['session_id']);
        header('location:/login');
    }
}
