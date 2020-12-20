<div class="suggestion">
    <div class="suggestion__donate">
        <p>SUGGESTION GROUP DONATE</p>
        <?php
        foreach ($this->vars['groups'] as $key => $arr) {
        ?>
            <div class="newfeed__identify identify" src="#">
                <img class="avatar icon_medium" src="/public/assets/donation.png" />
                <p class="name" style="display: inline;"><?php echo $arr['group_name'] ?></p>
                <a href="/group/<?php echo $arr['id'] ?>"><button class="visit_gr_attended">Visit</button></a>
            </div>
        <?php
        }
        ?>

    </div>
    <hr>
    <div class="suggestion__add">
        <p>SUGGESTION ADD</p>
        <?php
        foreach ($this->vars['users'] as $key => $arr) {
        ?>
            <div class="newfeed__identify identify" src="#">
                <img class="avatar icon_medium" src="<?php echo $arr['picture'] ?>" />
                <p class="name" style="display: inline;"><?php echo $arr['display_name'] ?></p>
                <a href="/profile/<?php echo $arr['user_id'] ?>"><button class="visit_gr_attended">Visit</button></a>
            </div>
        <?php
        }
        ?>
    </div>
    <hr>
    <div class="group_attended">
        <p>GROUPS ATTENDED</p>
        <?php
        foreach ($this->vars['group_attendeds'] as $key => $arr) {
        ?>
        <div class="newfeed__identify identify" src="#">
            <img class="avatar icon_medium" src="/public/assets/donation.png" />
            <p class="name" style="display: inline;"><?php echo $arr['group_name'] ?></p>
            <a href="/group/<?php echo $arr['group_id'] ?>"><button class="visit_gr_attended">Visit</button></a>
        </div>
        <?php
        }
        ?>
    </div>

</div>