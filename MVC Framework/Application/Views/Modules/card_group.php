<?php 
foreach($this->vars['group'] as $key => $arr) {
?>
<div class="column">
    <div class="card" onclick="return onClickGrouped(<?php echo $key ?>)">
        <img class="avatar icon_medium" src="/public/assets/donation.png" />
        <p class="card__name"> <?php echo $arr['group_name'] ?></p>
        <p class="education"><?php echo $arr['slogan'] ?></p>
        <a href="/group/<?php echo $arr['id']?>"><button class="button_profile" style="cursor: pointer;">Visit Group</button></a>
        <div class="add_friend_follow" id="btnGroup_<?php echo $key?>">
        <?php if($key%5) :?>
            <div class="join_group btn__disabled" onclick="joinGroup()" style="cursor: pointer;">
                <img class="imgss" src="/public/assets/group_man.png"/>
                    <p>Joined</p>
            </div>
            <?php else : ?>
                <div class="join_group" onclick="joinGroup()" style="cursor: pointer;">
                <img class="imgss" id="imgCardGroup_<?php echo $key ?>" src="/public/assets/group_man.png"/>
                    <p id="followCardGroup_<?php echo $key ?>">Join group</p>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php
}
?>