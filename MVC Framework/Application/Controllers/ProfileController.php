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
        $userProfileModel = new UserProfileModel();
        $userId = $_SESSION['user_id'];
        $profileParams['display_name'] = $display_name;
        $profileParams['gender'] = $gender;
        $profileParams['date_of_birth'] = $birthday;
        $profileParams['education'] = $education;
        $profileParams['about'] = $about;
        $result = $userProfileModel->updateInformation($profileParams, $userId);
        if ($result == 1) {
            header('location:/profile/' . $_SESSION['user_id']);
            $userInfo = $userProfileModel->getProfileInformation($userId);
            $this->setParameter($userInfo);
            $this->render(DS . "Profile" . DS . "profile");
        } else {
            echo "update no success";
        }
        // }

    }

    public function updateAvt()
    {
        // Kiểm tra phương thức gửi form đi có phải là POST hay ko ?
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $userId = $_SESSION['user_id'];
            $target_dir = PATH_ROOT . DS . "public" . DS . "uploads" . DS;
            //Generate new file name
            $temp = explode(".", $_FILES["fileToUpload"]["name"]);
            $fileName = $userId . "_" . "_" . time() . "." . end($temp);
            $target_file = $target_dir . $fileName;

            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            // Check if image file is a actual image or fake image
            if (isset($_POST["submit"])) {
                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                if ($check !== false) {
                    $uploadOk = 1;
                } else {
                    $uploadOk = 0;
                }
            }

            // Check file size
            if ($_FILES["fileToUpload"]["size"] > 104857600) {
                $uploadOk = 0;
            }

            // Allow certain file formats
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                $uploadOk = 0;
            }

            //insert data to database
            if ($uploadOk) {
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    $arrayImage[] = $fileName;
                    $userProfileModel = new UserProfileModel();
                    $params['picture'] =  DS . "public" . DS . "uploads" . DS . $fileName;
                    $userProfileModel->updateInformation($params);
                } else {
                    header('location:/profile/' . $userId);
                }
            } else {
                header('location:/error');
            }
            header('location:/profile/' . $userId);
        }
    }
}
