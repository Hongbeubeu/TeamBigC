<?php 
foreach($this->vars['people'] as $key => $arr) {
?>
<div class="column">
    <div class="card">
        <img class="avatar icon_medium" src="<?php echo $arr['picture'] ?>" />
        <p class="name"> <?php echo $arr['display_name'] ?></p>
        <p class="education"><?php echo $arr['about'] ?></p>
        <a href="/profile/<?php echo $arr['user_id'] ?>"><button class="button_profile" style="cursor: pointer;">VISIT PROFILE</button></a>
        <div class="add_friend_follow">
            <div class="following" onclick="" style="cursor: pointer;">
                <img src="/public/assets/icons8-user-groups-32.png" />
                <p>Follow</p>
            </div>
        </div>
    </div>
</div>
<?php
}
?>