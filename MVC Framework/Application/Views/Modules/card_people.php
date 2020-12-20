<?php 
foreach($this->vars['people'] as $key => $arr) {
?>
<div class="column">
    <div class="card" onclick="return onClickFollow(<?php echo $key ?>)">
        <img class="avatar icon_medium" src="<?php echo $arr['picture'] ?>" />
        <p class="card__name"> <?php echo $arr['display_name'] ?></p>
        <p class="education"><?php echo $arr['about'] ?></p>
        <a href="/profile/<?php echo $arr['user_id'] ?>"><button class="button_profile" style="cursor: pointer;">VISIT
                PROFILE</button></a>
        <div class="add_friend_follow" id="btnPeople_<?php echo $key?>">
            <?php if($key%4) : ?>
            <div class="following btn__disabled" onclick="" style="cursor: pointer;">
                <img src="/public/assets/icons8-user-groups-32.png" />
                <p>Followed</p>
            </div>
            <?php else : ?>
            <div class="following" onclick="" style="cursor: pointer;">
                <img id="imgCardPeople_<?php echo $key ?>" src="/public/assets/icons8-user-groups-32.png" />
                <p id="followCardPeople_<?php echo $key ?>">Follow</p>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php
}
?>