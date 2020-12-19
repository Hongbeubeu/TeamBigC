<div class="right_sub_pane">
                <div class="about_pane">
                    <div class="about_pane_title">
                        <p>About</p>
                    </div>
                    <hr>
                    <div class="infoUser">
                        <p>Members: </p>
                        <p class="data_info">2.5K</p>
                    </div>
                    <div class="infoUser">
                        <p>Donated:</p>
                        <p class="data_info">100</p>
                    </div>
                    <div class="infoUser">
                        <p>Liked: </p>
                        <p class="data_info">60K</p>
                    </div>
                    <div class="infoUser">
                        <p>Shared: </p>
                        <p class="data_info">2.5K</p>
                    </div>
                    <div class="infoUser">
                        <p>Description: </p>
                        <p class="data_info"><?php echo $this->vars[0]['description'] ?></p>
                    </div>
                    <hr>
                    <div class="donated">
                        <div>
                            <p><?php echo $this->vars[0]['current_star'] ?> </p>
                            <img src="/public/assets/icons8-star-48.png" />
                            <p> of <?php echo $this->vars[0]['target_star'] ?> </p>
                            <img src="/public/assets/icons8-star-48.png" />
                            <p> raised</p>
                        </div>
                        <progress id="porgress_donated" value="<?php echo $this->vars[0]['current_star'] ?>" max="<?php echo $this->vars[0]['target_star'] ?>"></progress>
                        <button onclick="openDonateDetail()">Donate</button>
                    </div>
                </div>
                <div>
                    <div class="created_user">
                        <div class="created_user_title">
                            <p>Created</p>
                        </div>
                        <hr>
                        <div>
                            <div class="info_user_created">
                                <img id="avt_user_created" src="/public/assets/avatar.jpg" />
                                <p class="data_info">Lê Anh Dũng</p>
                            </div>
                            <img id="messages_user_created" src="/public/assets/messages.png" />
                        </div>
                    </div>
                </div>
            </div>