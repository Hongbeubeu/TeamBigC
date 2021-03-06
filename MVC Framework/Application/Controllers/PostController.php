<?php

namespace Application\Controllers;

use Application\Models\CommentModel;
use Application\Models\LikePostModel;
use Application\Models\PostGroupModel;
use Application\Models\PostModel;
use Core\BaseController;

class PostController extends BaseController
{
    public function post()
    {
        if ($_POST['caption'] === '' && !isset($_POST['fileToUpload'])) {
            header('location:/newfeed');
        }

        $target_dir = PATH_ROOT . DS . "public" . DS . "uploads" . DS;
        $caption = "";
        if (isset($_POST['caption']))
            $caption = $this->secure_input($_POST['caption']);
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
            $type = 'normal';
            if (strlen(strstr($_POST['url'], 'group')))
                $type = 'group';
            if(isset($arrayImage)){
                $postId = $postModel->postStatus($userId, $type, $caption, $arrayImage);                    
            }
            else{
                $postId = $postModel->postStatus($userId, $type, $caption);
            }
            if($type == 'group'){
                $postGroupModel = new PostGroupModel();
                $arr = explode('/', $_POST['url']);
                $groupId = end($arr);
                $postGroupModel->addPostToGroup($postId, $groupId);
            }
        } else {
            header('location:/error');
        }
        header('location:' . $_POST['url']);
    }

    public function editPost()
    {
        $caption = $this->secure_input($_POST['caption']);
        $postModel = new PostModel();
        $params['caption'] = $caption;
        $postId = $_POST['post_id'];
        $url = $_POST['url'];
        $postModel->updatePost($params, $postId);
        header('location:' . $url);
    }

    public function deletePost()
    {
        $formPost = $_POST;
        $this->secure_form($formPost);
        $likePostModel = new LikePostModel();
        $likePostModel->deleteLikePost($formPost['post_id']);
        $postGroupModel = new PostGroupModel();
        $postGroupModel->deletePostInGroup($formPost['post_id']);
        $commentModel = new CommentModel();
        $commentModel->deleteCommentsFromPost($formPost['post_id']);
        $postModel = new PostModel();
        $postModel->deletePost($formPost['post_id']);
        header('location:' . $formPost['url']);
    }
}
