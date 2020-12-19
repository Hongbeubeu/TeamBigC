 <!-- The Modal edit post -->
 <div class="container">
            <div id="edit_post_<?php echo $list['id'] ?>" class="modal_edit_post">
                <!-- Modal content -->
                <div class="modal-content_edit_post">
                    <span id="close_edit_post" onclick="closeModalBox('edit_post_<?php echo $list['id'] ?>')">&times;</span>
                    <div class="toppane">
                        <h2>Edit Post</h2>
                    </div>
                    <div class="bottompane_edit_post">
                        <form action="/edit-post" method="POST">
                            <div class="name_user_edit_post">
                                <div id="avt_edit_post">
                                    <img src="<?php echo $list['picture'] ?>" />
                                    <p class="name"><?php echo $list['display_name'] ?></p>
                                </div>
                                <div id="body_edit_post">
                                    <input name="caption" class="newfeed__input_mind" placeholder="What do you mind ?" type="text" value="<?php echo $list['caption'] ?>"/>
                                </div>
                            </div>
                            <input type="hidden" name="url" value="<?php  echo $_SERVER['REQUEST_URI'] ?>"/>
                            <input type="hidden" name="post_id" value="<?php echo $list['id'] ?>"/>
                            <input type="submit" id="save_post" name="submit" value="Save">
                        </form>
                    </div>
                </div>
            </div>
        </div>