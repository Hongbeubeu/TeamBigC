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
        <div class="group_attended">
            <p>GROUPS ATTENDED</p>
            <div class="newfeed__identify identify" src="#">
                <img class="avatar icon_medium" src="/public/assets/avatar.jpg" />
                <p class="name" style="display: inline;">VÌ BỮA ĂN CỦA TRẺ MỒ CÔI VIỆT NAM</p>
                <button class="visit_gr_attended">Visit</button>
            </div>
            <div class="newfeed__identify identify" src="#">
                <img class="avatar icon_medium" src="/public/assets/avatar.jpg" />
                <p class="name" style="display: inline;">Chiến dịch gây quỹ dịp sinh nhật của Anh Quan</p>
                <button class="visit_gr_attended">Visit</button>
            </div>
            <div id="newfeed__identify_identity_hide">
                <div class="newfeed__identify identify" src="#">
                    <img class="avatar icon_medium" src="/public/assets/avatar.jpg" />
                    <p class="name">Chiến dịch gây quỹ dịp sinh nhật của Linh</p>
                    <button class="visit_gr_attended">Visit</button>
                </div>
            </div>
            <a href="#" onclick="seeMoreGroup()" id="see_more">See more</a>
            

        </div>

    </div>
    <?php include (PATH_ROOT.DS.'Application'.DS.'Views'.DS.'Modules'.DS.'new_post_modal.php'); ?>

</body>
<script src="/public/js/handler.js"></script>
<script src="/public/js/ajax_endpoint.js"></script>
<script src="/public/js/handle_see_more_group.js"></script>
</html>