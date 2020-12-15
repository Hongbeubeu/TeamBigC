<!Doctype html>

<html>

<head>
    <title>Profile</title>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="/public/css/profile.css" rel="stylesheet" type="text/css">

</head>

<body>
    <?php
        foreach ($this->vars as $key => $arr) {
    ?>
    <div class="navbar">
        <div class="navbar__account-info">
            <img class="navbar__avatar" src=<?php echo $this->userBaseInfo[0]['picture']? $this->userBaseInfo[0]['picture']: "/public/assets/avatar.jpg" ?>></img>
            <p class="navbar__name"><?php echo $this->userBaseInfo[0]['display_name'] ?></p>
            <p class="navbar__email"><?php echo $_SESSION['session_id'] ?></p>
        </div>
        <?php if ($_SESSION['user_id'] == $arr['user_id']) echo 
            '<form action="/profile/updateAvt" method="post" enctype="multipart/form-data">
            <input type="file" name="photo" id="fileSelect">
            <input type="submit" name="submit" value="Upload file">
            </form>' 
        ?>
        <button class="navbar__donate-button">Donate</button>
        <div class="navbar__menu">
            <h3 class="navbar__menu-title">Menu</h3>
            <div class="navbar__menu-button">
                <img class="navbar__menu-icon" src="/public/assets/newfeed.png" />
                <a href="/newfeed" class="navbar__menu-title">Newfeeds</a>
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
            <div id="navbar_profile" class="navbar__menu-button">
                <img class="navbar__menu-icon" src="/public/assets/profile.png" />
                <a href="<?php echo "/profile/".$_SESSION['user_id'] ?>" class="navbar__menu-title">Profile</a>
            </div>
            <div class="navbar__menu-button">
                <img class="navbar__menu-icon" src="/public/assets/settings.png" />
                <a href="#" class="navbar__menu-title">Settings</a>
            </div>
            <div class="navbar__menu-button">
                <img class="navbar__menu-icon" src="/public/assets/icons8-logout-rounded-left-64.png" />
                <a href="login.html" class="navbar__menu-title">Logout</a>
            </div>

        </div>
    </div>
    <div class="right_pane">
        <div class="background">
            <div class="background_image">
                <div class="background_image_search">
                    <img src="/public/assets/icons8-search-48.png" />
                    <input class="newfeed__search-input" placeholder="Search" type="text" />
                </div>
                <hr>
                <!-- <div class="background_image_change_image">
                    <button>
                        <img src="/public/assets/icons8-camera-50.png" />
                        <p>Change Photo</p>
                    </button>
                </div> -->
            </div>
            <div class="btn-group" style="width:100%">
                <button style="width:25%">News</button>
                <button style="width:25%">Photos</button>
                <button style="width:25%">Donate Events</button>
                <button style="width:25%">Friends(10)</button>
            </div>
        </div>
        <div class="under_cover">
            <div class="newfeed">
                <div class="newfeed__control">
                    <input class="newfeed__input" id="newfeed__status" type="text" placeholder="What do you mind ?" />
                    <a href="#"><img src="/public/assets/add-image.png" class="icon-button icon_medium" /> </a>
                    <a href="#"><img src="/public/assets/stickers.png" class="icon-button icon_medium" /> </a>
                    <a href="#"><img src="/public/assets/video-call.png" class="icon-button icon_medium" /> </a>
                </div>
                    <?php include (PATH_ROOT.DS.'Application'.DS.'Views'.DS.'Modules'.DS.'newfeed_profile.php'); ?>
                </div>
                
                <div class="about_pane">
                    <div class="about_pane_title">
                        <p>About</p>
                        <?php if ($_SESSION['user_id'] == $arr['user_id']) echo 
                            '<img class="about_pane_title_img" src="/public/assets/icons8-edit-50.png" />
                            <a id="myBtn" onclick="openModalBox()">Edit</a>' 
                        ?>
                        <!-- <script language="javascript">
                            if ($_SESSION['user_id'] == $arr['user_id']){
                                document.getElementById("myBtn").style.display = 'none'
                                document.getElementsByName("photo").style.display = 'none'
                                document.getElementsByName("submit").style.display = 'none'
                            }
                        </script> -->
                    </div>
                    <hr>
                        <div class="infoUser">
                            <p>Display Name: </p>
                            <p class="data_info"><?php echo $arr['display_name'] ?></p>

                        </div>
                        <div class="infoUser">
                            <p>Gender: </p>
                            <p class="data_info"><?php echo ($arr['gender'] ? $arr['gender'] : " Null") ?></p>

                        </div>
                        <div class="infoUser">
                            <p>Date of Birth: </p>
                            <p class="data_info"><?php echo ($arr['date_of_birth'] ? $arr['date_of_birth'] : " Null")  ?></p>

                        </div>
                        <div class="infoUser">
                            <p>Education: </p>
                            <p class="data_info"><?php echo ($arr['education'] ? $arr['education'] : " Null")  ?></p>

                        </div>
                        <div class="infoUser">
                            <p>Description: </p>
                            <p class="data_info"><?php echo ($arr['about'] ? $arr['about'] : " Null")  ?></p>
                        </div>
                    <hr>
                    <div class="follow">
                        <div class="follower">
                            <p class="data_info">1000</p>
                            <p>Followers</p>
                        </div>
                        <div class="hr"></div>
                        <div class="following">
                            <p class="data_info">100</p>
                            <p>Following</p>
                        </div>
                    </div>

            </div>
        </div>
        <div class="container">
            <!-- The Modal -->
            <div id="myModalProfile" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <div class="toppane">
                        <h2>Update your profile</h2>
                        <div class="title_donate">
                            <img src="/public/uploads/updateinfo.png" alt="ImageCover" class="image_cover">
                            <p>Let's update your profile...</p>
                        </div>
                    </div>
                    <div class="bottompane">
                        <form action="/profile/update" method="post">
                            <div class="info_user">
                                <div>
                                    <p>Display Name</p>
                                    <input class="input_text" type="text" name="display_name" placeholder="Display name" />
                                </div>
                                <div>
                                    <p>Gender</p>
                                    <div id="select_choose">
                                        <div>
                                            <input type="radio" name="my-input" id="male" value="male" checked>
                                            <label for="male">Male</label>
                                        </div>
                                        <div>
                                            <input type="radio" name="my-input" id="female" value="female"> 
                                            <label for="female">Female</label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="info_user">
                                <div>
                                    <p>Date of Birth</p>
                                    <input class="input_text" type="text" name="birthday" />
                                </div>
                                <div>
                                    <p>Education</p>
                                    <input class="input_text" type="text" name="education" />
                                </div>
                            </div>
                            <div id="info_user_description">
                                <div>
                                    <p>Description</p>
                                    <textarea class="input_text" placeholder="What do you mind ?" name="description" cols="40" rows="4"></textarea>
                                </div>
                                <div id="select_btn">
                                    <button id="update_btn" >Update Profile</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <?php include (PATH_ROOT.DS.'Application'.DS.'Views'.DS.'Modules'.DS.'new_post_modal.php'); ?>
</body>
<script src="/public/js/handler.js"></script>

</html>