<div class="navbar">
    <div class="navbar__account-info">
        <?php if($this->userBaseInfo) : ?>
        <img class="navbar__avatar" id="user_picture" src="<?php echo $this->userBaseInfo[0]['picture'] ?>"></img>
        <p class="navbar__name" id="user_name"><?php echo $this->userBaseInfo[0]['display_name'] ?></p>
        <?php else : ?>
        <img class="navbar__avatar" id="user_picture" src="<?php echo $this->vars[0]['picture'] ?>"></img>
        <p class="navbar__name" id="user_name"><?php echo $this->vars[0]['display_name'] ?></p>
        <?php endif; ?>
        <p class="navbar__email"><?php echo $_SESSION['session_id'] ?></p>
        <a href="/logout">Log out</a>
    </div>
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
        <div class="navbar__menu-button">
            <img class="navbar__menu-icon" src="/public/assets/profile.png" />
            <a href="/profile/1" class="navbar__menu-title">Profile</a>
        </div>
        <div class="navbar__menu-button">
            <img class="navbar__menu-icon" src="/public/assets/settings.png" />
            <a href="#" class="navbar__menu-title">Settings</a>
        </div>

    </div>
</div>