<div class="container">
            <!-- The Modal -->
            <div id="modalEditProfile" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close" onclick="closeModalBox('modalEditProfile')">&times;</span>
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
                                    <input class="input_text" type="text" name="display_name" value="<?php echo $arr['display_name']?$arr['display_name']:'' ?>"
                                        placeholder="Display name" />
                                </div>
                                <div>
                                    <p>Gender</p>
                                    <div id="select_choose">
                                        <div>
                                            <input type="radio" name="my-input" id="male" value="male" <?php if($arr['gender'] == 'male') echo 'checked' ?>>
                                            <label for="male">Male</label>
                                        </div>
                                        <div>
                                            <input type="radio" name="my-input" id="female" value="female" <?php if($arr['gender'] == 'female') echo 'checked' ?>>
                                            <label for="female">Female</label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="info_user">
                                <div>
                                    <p>Date of Birth</p>
                                    <input class="input_text" type="text" name="birthday" value="<?php echo $arr['date_of_birth']?$arr['date_of_birth']:'' ?>" />
                                </div>
                                <div>
                                    <p>Education</p>
                                    <input class="input_text" type="text" name="education" value="<?php echo $arr['education']?$arr['education']:'' ?>" />
                                </div>
                            </div>
                            <div id="info_user_description">
                                <div>
                                    <p>Description</p>
                                    <textarea class="input_text" placeholder="What do you mind ?" name="description"
                                        cols="40" rows="4"><?php echo $arr['about']?$arr['about']:'' ?></textarea>
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