<!Doctype html>

<html>

<head>
    <title>Newfeeds</title>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="/public/css/newfeeds.css" rel="stylesheet" type="text/css">

</head>

<body>
<?php include (PATH_ROOT.DS.'Application'.DS.'Views'.DS.'Modules'.DS.'navbar.php'); ?>
    <div class="newfeed">
        <div class="newfeed__search">
            <input class="newfeed__search-input" placeholder="Search" type="search" />
        </div>
        <div class="newfeed__control">
            <input class="newfeed__input" id="newfeed__status" type="text" placeholder="What do you mind ?" />
            <a href="#"><img src="/public/assets/add-image.png" class="icon-button icon_medium" /> </a>
            <a href="#"><img src="/public/assets/stickers.png" class="icon-button icon_medium" /> </a>
            <a href="#"><img src="/public/assets/video-call.png" class="icon-button icon_medium" /> </a>
        </div>
        <?php include (PATH_ROOT.DS.'Application'.DS.'Views'.DS.'Modules'.DS.'newfeed_main.php'); ?>
    </div>
    <div class="suggestion">
        <div class="suggestion__donate">
            <p>SUGGESTION DONATE</p>
            <div class="newfeed__identify identify" src="#">
                <img class="avatar icon_medium" src="/public/assets/avatar.jpg" />
                <p class="name" style="display: inline;">Hội hảo tâm giúp đỡ miền trung</p>
            </div>
            <div class="newfeed__identify identify" src="#">
                <img class="avatar icon_medium" src="/public/assets/avatar.jpg" />
                <p class="name" style="display: inline;">Hội hảo tâm giúp đỡ miền trung</p>
            </div>
            <div class="newfeed__identify identify" src="#">
                <img class="avatar icon_medium" src="/public/assets/avatar.jpg" />
                <p class="name" style="display: inline;">Hội hảo tâm giúp đỡ miền trung</p>
            </div>

        </div>
        <div class="suggestion__add">
            <p>SUGGESTION ADD</p>
            <div class="newfeed__identify identify" src="#">
                <img class="avatar icon_medium" src="/public/assets/avatar.jpg" />
                <p class="name" style="display: inline;">Nguyễn Văn Hồng</p>
            </div>
            <div class="newfeed__identify identify" src="#">
                <img class="avatar icon_medium" src="/public/assets/avatar.jpg" />
                <p class="name" style="display: inline;">Nguyễn Văn Hồng</p>
            </div>
            <div class="newfeed__identify identify" src="#">
                <img class="avatar icon_medium" src="/public/assets/avatar.jpg" />
                <p class="name" style="display: inline;">Nguyễn Văn Hồng</p>
            </div>
        </div>

    </div>
    <?php include (PATH_ROOT.DS.'Application'.DS.'Views'.DS.'Modules'.DS.'new_post_modal.php'); ?>

</body>
<script src="/public/js/handler.js"></script>

</html>