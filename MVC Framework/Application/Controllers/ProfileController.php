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
        //if ($display_name == "" || $gender == ""|| $birthday ==  "" || $about ==  ""){
            //$this->render(DS . "Profile" . DS . "profile");   
        //}
        //else{
            $userProfileModel = new UserProfileModel();
            $userId = $_SESSION['user_id'];
            $profileParams['display_name'] = $display_name;
            $profileParams['gender'] = $gender;
            $profileParams['date_of_birth'] = $birthday;
            $profileParams['education'] = $education;
            $profileParams['about'] = $about;
            $result = $userProfileModel->updateInformation($profileParams,$userId);
            echo $result;
            if ($result == 1){
                header('location:/profile/' . $_SESSION['user_id']);
                $userInfo = $userProfileModel->getProfileInformation($userId);
                $this->setParameter($userInfo);
                $this->render(DS . "Profile" . DS . "profile");
            }
            else{
                echo "update no success";
            }
       // }
        
    }

}
