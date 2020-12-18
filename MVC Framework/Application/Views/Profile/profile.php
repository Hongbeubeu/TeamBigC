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
            <div class="btn-group" style="width:100%">
                <button style="width:25%">News</button>
                <button style="width:25%">Photos</button>
                <button style="width:25%">Donate Events</button>
                <button style="width:25%">Friends(10)</button>
            </div>
        </div>
        <div class="under_cover">
            <div class="newfeed" id="newfeed__profile">
                <?php include (PATH_ROOT.DS.'Application'.DS.'Views'.DS.'Modules'.DS.'newfeed_control.php'); ?>
                <?php include (PATH_ROOT.DS.'Application'.DS.'Views'.DS.'Modules'.DS.'newfeed_main.php'); ?>
            </div>

            <div class="about_pane">
                <div class="about_pane_title">
                    <p>About</p>
                    <span id="btnEditProfile" onclick="onClickEditProfile()">
                    <img class="about_pane_title_img" src="/public/assets/icons8-edit-50.png" />
                    </span>
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
            <div id="modalEditProfile" class="modal">

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
                                    <input class="input_text" type="text" name="display_name"
                                        placeholder="Display name" />
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
                                    <textarea class="input_text" placeholder="What do you mind ?" name="description"
                                        cols="40" rows="4"></textarea>
                                </div>
                                <div id="select_btn">
                                    <button id="update_btn">Update Profile</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
</body>
<script src="/public/js/handler.js"></script>
<script src="/public/js/handle_heart_share.js"></script>

</html>