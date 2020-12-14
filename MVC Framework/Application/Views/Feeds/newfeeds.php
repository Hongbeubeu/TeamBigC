<!Doctype html>

<html>

<head>
    <title>Newfeeds</title>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="/public/css/newfeeds.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div class="navbar">
        <div class="navbar__account-info">
            <img class="navbar__avatar" src="/public/assets/avatar.jpg"></img>
            <p class="navbar__name">Lê Anh Dũng</p>
            <p class="navbar__email">dunglebeovaic@gmail.com</p>
            <a href="./logout">Log out</a>
        </div>
        <button class="navbar__donate-button">Donate</button>
        <div class="navbar__menu">
            <h3 class="navbar__menu-title">Menu</h3>
            <div class="navbar__menu-button">
                <img class="navbar__menu-icon" src="/public/assets/newfeed.png" />
                <a href="#" class="navbar__menu-title">Newfeeds</a>
            </div>
            <div class="navbar__menu-button">
                <img class="navbar__menu-icon" src="/public/assets/messages.png" />
                <a href="#" class="navbar__menu-title">Messages</a>
            </div>
            <div class="navbar__menu-button">
                <img class="navbar__menu-icon" src="/public/assets/notification.png" />
                <p href="#" class="navbar__menu-title" onclick="openPopup()">Notifications</p>
                <div class="notification__detail" id="notification">
                    <h4>Notifications</h4>
                    <hr>
                    <div class="notification__content">
                        <img class="avatar icon_medium relative" src="/public/assets/avatar.jpg">
                        <p class="notification__text">Nguyễn Văn Hồng likes your photo</p>
                        </img>
                    </div>
                    <hr>
                    <div class="notification__content">
                        <img class="avatar icon_medium relative" src="/public/assets/avatar.jpg">
                        <p class="notification__text">Nguyễn Văn Hồng likes your photo</p>
                        </img>
                    </div>
                    <hr>
                    <div class="notification__content">
                        <img class="avatar icon_medium relative" src="/public/assets/avatar.jpg">
                        <p class="notification__text">Nguyễn Văn Hồng likes your photo</p>
                        </img>
                    </div>
                </div>

            </div>
            <div class="navbar__menu-button">
                <img class="navbar__menu-icon" src="/public/assets/profile.png" />
                <a href="#" class="navbar__menu-title">Profile</a>
            </div>
            <div class="navbar__menu-button">
                <img class="navbar__menu-icon" src="/public/assets/settings.png" />
                <a href="#" class="navbar__menu-title">Settings</a>
            </div>

        </div>
    </div>
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
        <div class="newfeed__main">
            <?php
            foreach ($this->vars as $key => $arr) {
                $image = json_decode($arr['content'], true);
        ?>
            <div class="newfeed__post">
                <div class="newfeed__header">
                    <div class="newfeed__identify identify" src="#">
                        <img class="avatar icon_medium" src="/public/assets/avatar.jpg" />
                        <p class="name" style="display: inline;"> Tuan Le Minh</p>
                    </div>
                    <a href="#" class="newfeed__share-button"><img src="/public/assets/share.png" class="icon_medium" />
                    </a>
                    <a href="#" class="newfeed__like-button"><img src="/public/assets/heart.png"
                            class="icon_medium icon_heart" /> </a>
                </div>
                <div class="newfeed__content">
                    <p><?php echo $arr['caption'] ?></p>
                    <?php 
                    $numberImage = count($image);
                    if ($numberImage == 1) {
                        ?>
                    <img style="height: 100%; width: 100%" src="/public/uploads/<?php echo $image[0]?>" />
                    <?php
                    }
                    if ($numberImage > 1) {
                        ?>
                    <div>
                        <div class="slideshow-container">
                            <!-- Full-width images with number and caption text -->
                            <?php foreach ($image as $key=>$value) : ?>
                            <div class="mySlides  index<?php echo $key?> mySlides<?php echo $arr['id']?> fade">
                                <img src="/public/uploads/<?php echo $value?>" style="width:100%">
                            </div>
                            <?php endforeach ?>

                            <a class="prev" onclick="plusSlides(-1,<?php echo $arr['id']?>)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1, <?php echo $arr['id']?>)">&#10095;</a>
                        </div>
                        <br>

                        <!-- The dots/circles -->
                        <div style="text-align:center">
                            <?php foreach ($image as $key=>$value) : ?>
                            <span class="dot dot<?php echo $arr['id']?>"
                                onclick="currentSlide(<?php echo $key+1?>, <?php echo $arr['id']?>)"></span>
                            <?php endforeach ?>
                        </div>
                    </div>
                    <?php  
                    }
                    ?>

                </div>
                <div class="newfeed__comment">
                    <div class="newfeed__comment-main">
                        <div class="newfeed__identify identify" src="#">
                            <img class="avatar icon_small" src="/public/assets/avatar.jpg" />
                        </div>
                        <div class=newfeed__comment-content>
                            <span class="newfeed__comment-name" style="display: inline;"> Tuan Le Minh</span>
                            </br>
                            <span class="newfeed__comment-text"> Mình đăng ảnh đẹp quá</span>
                        </div>
                    </div>
                    <input class="newfeed__comment-input newfeed__input" type="text" placeholder="Write your comment" />
                </div>
            </div>
            <?php
            }
        ?>
            <div class="newfeed__post">
                <div class="newfeed__header">
                    <div class="newfeed__identify identify" src="#">
                        <img class="avatar icon_medium" src="/public/assets/avatar.jpg" />
                        <p class="name" style="display: inline;"> Tuan Le Minh</p>
                    </div>
                    <a href="#" class="newfeed__share-button"><img src="/public/assets/share.png" class="icon_medium" />
                    </a>
                    <a href="#" class="newfeed__like-button"><img src="/public/assets/heart.png"
                            class="icon_medium icon_heart" /> </a>
                </div>
                <div class="newfeed__content">
                    <p>Hôm nay tôi buồn quá</p>
                </div>
                <div class="newfeed__comment">
                    <div class="newfeed__comment-main">
                        <div class="newfeed__identify identify" src="#">
                            <img class="avatar icon_small" src="/public/assets/avatar.jpg" />
                        </div>
                        <div class=newfeed__comment-content>
                            <span class="newfeed__comment-name" style="display: inline;"> Tuan Le Minh</span>
                            </br>
                            <span class="newfeed__comment-text"> Mình đăng ảnh đẹp quá</span>
                        </div>
                    </div>
                    <input class="newfeed__comment-input newfeed__input" type="text" placeholder="Write your comment" />
                </div>
            </div>
        </div>
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
    <div class="newfeed__modal" id="myModal">
        <div class="newfeed__modal-content">
            <span class="close">&times;</span>
            <h3 class="newfeed__modal-header">Create post</h3>
            <hr>
            <form action="#" id="post-form">
                <input class="newfeed__modal-input" type="text" placeholder="What do you mind" />
                <br>
                <br>
                <div class="image-upload">
                    <label for="file-input">
                        <img class="icon_small" src="/public/assets/add-image.png" />
                    </label>

                    <input id="file-input" type="file" />
                </div>
                <br>
                <br>
                <input class="newfeed__modal-button" id="modal_button" type="submit" value="Post" />
            </form>
        </div>
    </div>

</body>
<script src="/public/js/handler.js"></script>

</html>