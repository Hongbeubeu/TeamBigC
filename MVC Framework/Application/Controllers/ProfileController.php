<?php

namespace Application\Controllers;

use Core\BaseController;
use Application\Models\UserModel;
use Application\Models\UserProfileModel;

class ProfileController extends BaseController
{
    public function update()
    {
        $formPost = $_POST;
        $this->secure_form($formPost);
        $display_name = $formPost['display_name'];
        $gender = $formPost['my-input'];
        $birthday = $formPost['birthday'];
        $education = $formPost['education'];
        $about = $formPost['description'];
        // echo $display_name;
        // echo $gender;
        // echo $birthday;
        // echo $education;
        // echo $about;
        // echo "true";
        $userProfileModel = new UserProfileModel();
        $userModel = new UserModel();
        $email = $_SESSION['session_id'];
        $userId = $userModel->getUserId($email);
        //$queryId['user_id'] = $userId;
        $profileParams['display_name'] = $display_name;
        $profileParams['gender'] = $gender;
        $profileParams['date_of_birth'] = $birthday;
        $profileParams['education'] = $education;
        $profileParams['about'] = $about;
        $userProfileModel->updateInformation($profileParams,$userId);
        
    }

}
