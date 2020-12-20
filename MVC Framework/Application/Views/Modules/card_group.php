<?php 
foreach($this->vars['group'] as $key => $arr) {
?>
<div class="column">
    <div class="card">
        <img class="avatar icon_medium" src="/public/assets/donation.png" />
        <p class="card__name"> <?php echo $arr['group_name'] ?></p>
        <p class="education"><?php echo $arr['slogan'] ?></p>
        <a href="/group/<?php echo $arr['id']?>"><button class="button_profile" style="cursor: pointer;">Visit Group</button></a>
        <div class="add_friend_follow">
            <div class="join_group" onclick="joinGroup()" style="cursor: pointer;">
                <img class="imgss" src="/public/assets/group_man.png"/>
                <p>Join Group</p>
            </div>
        </div>
    </div>
</div>
<?php
}
?>