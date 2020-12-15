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

    public function updateAvt()
    {
        // Kiểm tra phương thức gửi form đi có phải là POST hay ko ?
		if($_SERVER["REQUEST_METHOD"] == "POST"){
            $target_dir = PATH_ROOT . DS . "public" . DS . "assets" . DS;
		    // Kiểm tra quá trình upload file có bị lỗi gì không ?
		    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
		    	// Mảng chưa định dạng file cho phép
		        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
		        // Lấy thông tin file bao gồm tên file, loại file, kích cỡ file
		        $filename = $_FILES["photo"]["name"];
		        $filetype = $_FILES["photo"]["type"];
		        $filesize = $_FILES["photo"]["size"];
		    
		        // Kiểm tra định dạng file .jpg, png,...
		        $ext = pathinfo($filename, PATHINFO_EXTENSION);
		        // Nếu không đúng định dạng file thì báo lỗi
		        if(!array_key_exists($ext, $allowed)) die("Lỗi : Vui lòng chọn đúng định dang file.");
		    
		        // Cho phép kích thước tối đa của file là 5MB
		        $maxsize = 5 * 1024 * 1024;
		        // Nếu kích thước lớn hơn 5MB thì báo lỗi
		        if($filesize > $maxsize) die("Lỗi : Kích thước file lớn hơn giới hạn cho phép");
		    
		        // Kiểm tra file ok hết chưa
		        if(in_array($filetype, $allowed)){
		            // Kiểm tra xem file đã tồn tại chưa, nếu rồi thì báo lỗi, không thì tiến hành upload
		            if(file_exists("/public/uploads/" . $_FILES["photo"]["name"])){
		                echo $_FILES["photo"]["name"] . " đã tồn tại";
		            } else{
                        // Hàm move_uploaded_file sẽ tiến hành upload file lên thư mục upload
		                if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_dir . $_FILES["photo"]["name"])){
                            // Thông báo thành công
                            $picture = "/public/assets/" . $_FILES["photo"]["name"];
                            $userProfileModel = new UserProfileModel();
                            $userId = $_SESSION['user_id'];
                            $profileParams['picture'] = $picture;
                            $result = $userProfileModel->updateInformation($profileParams,$userId);
                            if ($result == 1){
                                header('location:/profile/' . $_SESSION['user_id']);
                                $userInfo = $userProfileModel->getProfileInformation($userId);
                                $this->setParameter($userInfo);
                                $this->render(DS . "Profile" . DS . "profile");
                            }
                            else{
                                echo "update no success";
                            }
                        } else{
                            // Thông báo thất bại
		                    echo "Upload file Thất bại";
                        }
		                
		            } 
		        } else{
		            echo "Lỗi : Có vấn đề xảy ra khi upload file"; 
		        }
		    } else{
		        echo "Lỗi: " . $_FILES["photo"]["error"];
		    }
		}
    }
}
