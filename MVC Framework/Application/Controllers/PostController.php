<?php

namespace Application\Controllers;

use Application\Models\PostModel;
use Core\BaseController;

class PostController extends BaseController
{
    public function status()
    {
        if ($_POST['caption'] === '' && !isset($_POST['fileToUpload'])) {
            header('location:/newfeed');
        }

        $target_dir = PATH_ROOT . DS . "public" . DS . "uploads" . DS;
        $caption = "";
        if (isset($_POST['caption']))
            $caption = $_POST['caption'];
        $userId = $_POST['userId'];

        $uploadOk = 1;

        //check uploadfile
        $count = count($_FILES["fileToUpload"]['name']);
        echo $_FILES['fileToUpload']['name'][0];
        if ($_FILES['fileToUpload']['name'][0] != '') {
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
                        $uploadOk = 1;
                    } else {
                        $uploadOk = 0;
                        break;
                    }
                }

                // Check file size
                if ($_FILES["fileToUpload"]["size"][$i] > 104857600) {
                    $uploadOk = 0;
                    break;
                }

                // Allow certain file formats
                if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                    $uploadOk = 0;
                    break;
                }
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"][$i], $target_file)) {
                    $arrayImage[] = $fileName;
                } else {
                    header('location:/newfeed');
                }
            }
        }
        //insert data to database
        if ($uploadOk) {
            $postModel = new PostModel();
            if(isset($arrayImage))
                $postModel->postStatus($userId, "normal", $caption, $arrayImage);
            else
                $postModel->postStatus($userId, "normal", $caption);
        } else {
            header('location:/error');
        }
        header('location:/newfeed');
    }
}
