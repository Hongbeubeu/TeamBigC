<div class="newfeed__modal" id="modalNewPost">
        <div class="newfeed__modal-content">
            <span class="close">&times;</span>
            <h3 class="newfeed__modal-header">Create post</h3>
            <hr>
            <form action="/status" id="post-form" method="POST"  enctype="multipart/form-data">
                <input class="newfeed__modal-input" name="caption" type="text" placeholder="What do you mind" />
                <br>
                <br>
                <div class="image-upload">
                    <label for="file-input">
                        <img class="icon_small" src="/public/assets/add-image.png" />
                    </label>

                    <input id="file-input" name="fileToUpload[]" type="file" multiple="multiple"/>
                    <input type="hidden" name="userId" value="<?php echo $_SESSION['user_id'] ?>" />
                </div>
                <br>
                <br>
                <input class="newfeed__modal-button" id="modal_button" type="submit" value="Post" />
            </form>
        </div>
</div>