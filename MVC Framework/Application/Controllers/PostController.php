<?php

namespace Application\Controllers;

use Application\Models\PostModel;
use Core\BaseController;

class PostController extends BaseController
{

    private function checkLogin()
    {
        if (!isset($_SESSION['session_id'])) {
            return false;
        }
        return true;
    }

    public function status()
    {
        $target_dir = PATH_ROOT . DS . "public" . DS . "uploads" . DS;
        $caption = "";
        if(isset($_POST['caption']))
            $caption = $_POST['caption'];
        $userId = $_POST['userId'];

        $uploadOk = 1;

        //check uploadfile
        $count = count($_FILES["fileToUpload"]['name']);
        for ($i = 0; $i < $count; $i++) {

            //Generate new file name
            $temp = explode(".", $_FILES["fileToUpload"]["name"][$i]);
            $fileName = $userId . "_" . $i . "_" . time() . "." . end($temp);
            $target_file = $target_dir . $fileName;

            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            // Check if image file is a actual image or fake image
            if (isset($_POST["submit"])) {
                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"][$i]);
                if ($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                    break;
                }
            }

            // Check if file already exists
            if (file_exists($target_file)) {
                echo "Sorry, file already exists.";
                $uploadOk = 0;
                break;
            }

            // Check file size
            if ($_FILES["fileToUpload"]["size"][$i] > 104857600) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
                break;
            }

            // Allow certain file formats
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
                break;
            }
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"][$i], $target_file)) {
                $arrayImage[] = $fileName;
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }

        //insert data to database
        if ($uploadOk && isset($arrayImage) && !empty($arrayImage)) {
            $postModel = new PostModel();
            $postModel->postStatus($userId, "normal", $caption, $arrayImage);
        }
    }
}
