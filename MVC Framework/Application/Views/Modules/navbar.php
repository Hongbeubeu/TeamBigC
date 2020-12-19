<div class="navbar">
    <div class="navbar__account-info">
        <?php if($this->userBaseInfo) : ?>
        <img class="navbar__avatar" id="user_picture" src="<?php echo $this->userBaseInfo[0]['picture'] ?>"></img>
        <p class="navbar__name" id="user_name"><?php echo $this->userBaseInfo[0]['display_name'] ?></p>
        <?php else : ?>
        <img class="navbar__avatar" id="user_picture" src="<?php echo $this->vars[0]['picture'] ?>"></img>
        <p class="navbar__name" id="user_name"><?php echo $this->vars[0]['display_name'] ?></p>
        <?php endif; ?>
    </div>
    <button class="navbar__donate-button" onclick="onClickCreateGroup()">Create Group</button>
    <div class="navbar__donate-star"> <span ><?php echo $this->userBaseInfo[0]['star'] ?> </span> <img style="width: 16px" src="/public/assets/icons8-star-48.png"/>  </div>
    <div class="navbar__menu">
        <h3 class="navbar__menu-title" style="margin-bottom: 0.5rem">Menu</h3>
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
            <span class="navbar__menu-title" onclick="openPopup()">Notifications</span>
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
        <div class="navbar__menu-button">
            <img class="navbar__menu-icon" src="/public/assets/logout.png" />
            <a href="/logout" class="navbar__menu-title">Log Out</a>
        </div>

    </div>
</div>
<?php include (PATH_ROOT.DS.'Application'.DS.'Views'.DS.'Groups'.DS.'create_group.php'); ?>
 <!-- The Modal -->
 <!-- <div id="myModal" class="modal">
            
            <div class="modal-content_create_group">
                <form action="#">
                    <span class="close" onclick="closeModalBox('myModal')">&times;</span>
                    <div class="toppane_create_group">
                        <h2>Create Group</h2>
                        <div class="title_donate_create_group">
                            <img src="/public/assets/background.jpg" alt="Avatar" class="avatar">

                        </div>
                    </div>
                    <div class="bottompane_create_group">
                        <form action="" method="post">
                            <div class="info_card">
                                <div>
                                    <p>Name Group</p>
                                    <input class="input_text" type="text" />
                                </div>
                            </div>
                            <div class="info_card">
                                <div>
                                    <p>Slogan Group</p>
                                    <input class="input_text" type="text" />
                                </div>
                            </div>
                            <div class="info_card">
                                <div>
                                    <p>Discription</p>
                                    <input class="input_text" type="text" />
                                </div>
                            </div>
                            <div class="info_card">
                                <div>
                                    <p>Star Target</p>
                                    <input class="input_number" type="number" />
                                </div>
                            </div>
                            <button id="btn_create_group" onclick="">Create</button>
                        </form>
                    </div>

                </form>
            </div>
        </div> -->