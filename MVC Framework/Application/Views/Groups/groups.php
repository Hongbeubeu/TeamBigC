<!Doctype html>

<html>

<head>
    <title>Group</title>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="/public/css/group.css" rel="stylesheet" type="text/css">
    <link href="/public/css/newfeeds.css" rel="stylesheet" type="text/css">
    <link href="/public/css/donate.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php include (PATH_ROOT.DS.'Application'.DS.'Views'.DS.'Modules'.DS.'navbar.php'); ?>
    <div class="right_pane">
        <div class="background_image_title">
            <img src="/public/assets/avatar.jpg" />
            <p id="name_group">Name Group</p>
            <p id="slogan_group">Slogan</p>
        </div>
        <div class="under_cover">
            <div class="newfeed">
            <?php include (PATH_ROOT.DS.'Application'.DS.'Views'.DS.'Modules'.DS.'newfeed_control.php'); ?>
            <?php include (PATH_ROOT.DS.'Application'.DS.'Views'.DS.'Modules'.DS.'newfeed_main.php'); ?>
            </div>
            <?php include (PATH_ROOT.DS.'Application'.DS.'Views'.DS.'Modules'.DS.'about_info_group.php'); ?>
        </div>
    </div>
    <?php include (PATH_ROOT.DS.'Application'.DS.'Views'.DS.'Modules'.DS.'new_post_modal.php'); ?>
    <?php include (PATH_ROOT.DS.'Application'.DS.'Views'.DS.'Donates'.DS.'donate_detail.php'); ?>
</body>
<script src="/public/js/handler.js"></script>
<script src="/public/js/handle_read_more.js"></script>

</html>