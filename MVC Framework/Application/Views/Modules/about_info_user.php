<div class="about_pane">
    <div class="about_pane_title">
        <p>About</p>
        <?php 
            if($_SESSION['user_id'] == $arr['user_id']) {
        ?>
        <span id="btnEditProfile">
            <img onclick="onClickEditProfile()" class="about_pane_title_img" src="/public/assets/icons8-edit-50.png" />
        </span>
        <?php 
            }
        ?>
    </div>
    <hr>
    <div class="infoUser">
        <p>Display Name: </p>
        <p class="data_info"><?php echo $arr['display_name'] ?></p>

    </div>
    <div class="infoUser">
        <p>Gender: </p>
        <p class="data_info"><?php echo ($arr['gender'] ? $arr['gender'] : " ") ?></p>

    </div>
    <div class="infoUser">
        <p>Date of Birth: </p>
        <p class="data_info"><?php echo ($arr['date_of_birth'] ? $arr['date_of_birth'] : "")  ?></p>

    </div>
    <div class="infoUser">
        <p>Education: </p>
        <p class="data_info"><?php echo ($arr['education'] ? $arr['education'] : "")  ?></p>

    </div>
    <div class="infoUser">
        <p>Description: </p>
        <p class="data_info"><?php echo ($arr['about'] ? $arr['about'] : "")  ?></p>
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
<button id="btn_follow" onclick="follow_user()">Follow</button>