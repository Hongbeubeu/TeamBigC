<?php
namespace Application\Controllers;

use Core\BaseController;
use Core\Model;
use Application\Models\UserModel;
use Application\Models\UserProfileModel;
use Core\Route;

class AuthenticationController extends BaseController {
    function login() {
        $formPost = $_POST;
        $this->secure_form($formPost);
        echo $formPost['email'] . "<br>";
        echo $formPost['password'] . "<br>";
        if (isset($formPost['logged']))
            echo $formPost['logged'] . "<br>";
    }

    function register() {
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
}