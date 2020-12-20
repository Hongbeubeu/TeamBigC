<div class="newfeed__main">
    <?php
        foreach ($this->varsPost as $key => $list) {
        $image = json_decode($list['content'], true);
        include (PATH_ROOT.DS.'Application'.DS.'Views'.DS.'Modules'.DS.'edit_post.php'); 
    ?>
    <div class="newfeed__post">
        <div class="newfeed__header">
            <div class="newfeed__identify identify" onclick="OpenUserProfile(<?php echo $list['user_id'] ?>)">
                <img class="avatar icon_medium" src="<?php echo $list['picture'] ?>" />
                <p class="name" style="display: inline;"> <?php echo $list['display_name'] ?></p>
            </div>
            <div class="newfeed_option_button">
                <div class="newfeed_select_button">
                    <div class="newfeed__like-button"><img
                            src="<?php echo $list['is_liked']?'/public/assets/icons8-heart-64.png':'/public/assets/heart.png' ?>"
                            class="icon_select" id="icon_select_heart"
                            onclick="changeIcon(this, '<?php echo $_SESSION['user_id'] ?>', '<?php echo $list['id'] ?>')" />
                    </div>
                    <p id="count_like_of_post_<?php echo $list['id'] ?>"><?php echo $list['like_count'] ?></p>
                </div>
                <hr>
                <div class="newfeed_select_button">
                    <div class="newfeed__share-button"><img src="/public/assets/share.png" class="icon_select"
                            id="icon_select_share" /> </div>
                    <p>100</p>
                </div>
                <?php 
                    if ($_SESSION['user_id'] == $list['user_id']) {
                ?>
                <div class="newfeed_select_button">
                    <img id="choose_select_<?php echo $list['id']?>" onclick="openSelect('<?php echo $list['id']?>')" src="/public/assets/icons8-ellipsis-24.png" style="width:30px;height:30px" />
                    <div class="select_remove_edit" id="select_<?php echo $list['id']?>">     
                            <p class="select__text" id="edit_post" onclick="openModalEditPost('edit_post_<?php echo $list['id']?>' )">Edit</p>
                            <p class="select__text" onclick="removePost(<?php echo $list['id']?>)">Remove</p>
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>

        </div>
        <div class="newfeed__content">
            <p><?php echo $list['caption'] ?></p>
            <?php 
                if(is_array($image)) {
                    $numberImage = count($image);
                    if ($numberImage == 1) {
            ?>
            <img style="height: 100%; width: 100%" src="/public/uploads/<?php echo $image[0]?>" />
            <?php
                    }
                    if ($numberImage > 1) {
            ?>
            <div>
                <div class="slideshow-container">
                    <!-- Full-width images with number and caption text -->
                    <?php foreach ($image as $key=>$value) : ?>
                    <div class="mySlides  index<?php echo $key?> mySlides<?php echo $list['id']?> fade">
                        <img src="/public/uploads/<?php echo $value?>" style="width:100%">
                    </div>
                    <?php endforeach ?>

                    <a class="prev" onclick="plusSlides(-1,<?php echo $list['id']?>)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1, <?php echo $list['id']?>)">&#10095;</a>
                </div>
                <br>

                <!-- The dots/circles -->
                <div style="text-align:center">
                    <?php foreach ($image as $key=>$value) : ?>
                    <span class="dot dot<?php echo $list['id']?>"
                        onclick="currentSlide(<?php echo $key+1?>, <?php echo $list['id']?>)"></span>
                    <?php endforeach ?>
                </div>
            </div>
            <?php  
                    }
                }   
            ?>

        </div>
        <div class="newfeed__comment">
            <div class="newfeed__comment-container" id="comment-container__<?php echo $list['id']?>">
                <?php 
                foreach($list['comments'] as $comment)
                {
                ?>
                <div class="newfeed__comment-main">
                    <div class="newfeed__identify identify" src="#">
                        <img class="avatar icon_small" src="<?php echo $comment['picture'] ?>" />
                    </div>
                    <div class=newfeed__comment-content>
                        <span class="newfeed__comment-name" style="display: inline;"> <?php echo $comment['display_name'] ?></span>
                        </br>
                        <span class="newfeed__comment-text"><?php echo $comment['content'] ?></span>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
            <input id="comment_input__<?php echo $list['id']?>" class="newfeed__comment-input newfeed__input"
                onkeydown="return addComment(event, '<?php echo $_SESSION['user_id'] ?>', '<?php echo $list['id']  ?>')"
                type="text" placeholder="Write your comment" />
        </div>
    </div>
    
    <?php
        }
    ?>
</div>
