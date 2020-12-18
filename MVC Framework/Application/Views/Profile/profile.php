<!Doctype html>

<html>

<head>
    <title>Profile</title>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="/public/css/style.css" rel="stylesheet" type="text/css">

</head>

<body>
<?php include (PATH_ROOT.DS.'Application'.DS.'Views'.DS.'Modules'.DS.'new_post_modal.php'); ?>

    <?php include (PATH_ROOT.DS.'Application'.DS.'Views'.DS.'Modules'.DS.'navbar.php'); ?>

    <?php
        foreach ($this->vars as $key => $arr) { 
    ?>

    <div class="right_pane">
        <div class="background">
        <div id="search__profile">
         <?php include (PATH_ROOT.DS.'Application'.DS.'Views'.DS.'Modules'.DS.'searchbar.php'); ?>
         </div>
            <div class="background_image">
                <div class="background_image_change_image">
                    <button>
                        <img src="/public/assets/icons8-camera-50.png" />
                        <p>Change Photo</p>
                    </button>
                </div>
            </div>
        </div>
        <div class="under_cover">
            <div class="newfeed" id="newfeed__profile">
                <?php include (PATH_ROOT.DS.'Application'.DS.'Views'.DS.'Modules'.DS.'newfeed_control.php'); ?>
                <?php include (PATH_ROOT.DS.'Application'.DS.'Views'.DS.'Modules'.DS.'newfeed_main.php'); ?>
            </div>
            <div>
                <?php include (PATH_ROOT.DS.'Application'.DS.'Views'.DS.'Modules'.DS.'about_info_user.php'); ?>
                <?php include (PATH_ROOT.DS.'Application'.DS.'Views'.DS.'Modules'.DS.'suggestion.php'); ?>
            </div>
        </div>
        <?php include (PATH_ROOT.DS.'Application'.DS.'Views'.DS.'Modules'.DS.'edit_profile.php'); ?>
        <?php include (PATH_ROOT.DS.'Application'.DS.'Views'.DS.'Modules'.DS.'edit_post.php'); ?>
    </div>
    <?php } ?>
</body>
<script src="/public/js/handler.js"></script>

</html>