<div class="newfeed__main">
    <?php
    foreach ($this->varsPost as $key => $arrPost) {
        $image = json_decode($arrPost['content'], true);
    ?>
        <div class="newfeed__post">
            <div class="newfeed__header">
                <div class="newfeed__identify identify" src="#">
                    <img class="avatar icon_medium" src="<?php echo $arrPost['picture'] ?>" />
                    <p class="name" style="display: inline;"> <?php echo $arrPost['display_name'] ?></p>
                </div>

                <a href="#" class="newfeed__share-button"><img src="/public/assets/share.png" class="icon_medium" /> </a>
                <a href="#" class="newfeed__like-button"><img src="/public/assets/heart.png" class="icon_medium icon_heart" /> </a>


            </div>
            <div class="newfeed__content">
                <p><?php echo $arrPost['caption'] ?></p>
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
                    <div class="mySlides  index<?php echo $key?> mySlides<?php echo $arr['id']?> fade">
                        <img src="/public/uploads/<?php echo $value?>" style="width:100%">
                    </div>
                    <?php endforeach ?>

                    <a class="prev" onclick="plusSlides(-1,<?php echo $arr['id']?>)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1, <?php echo $arr['id']?>)">&#10095;</a>
                </div>
                <br>

                <!-- The dots/circles -->
                <div style="text-align:center">
                    <?php foreach ($image as $key=>$value) : ?>
                    <span class="dot dot<?php echo $arr['id']?>"
                        onclick="currentSlide(<?php echo $key+1?>, <?php echo $arr['id']?>)"></span>
                    <?php endforeach ?>
                </div>
            </div>
            <?php  
            }
        }   
            ?>
            </div>
            <div class="newfeed__comment">
                <div class="newfeed__comment-main">
                    <div class="newfeed__identify identify" src="#">
                        <img class="avatar icon_small" src="/public/assets/avatar.jpg" />
                    </div>
                    <div class=newfeed__comment-content>
                        <span class="newfeed__comment-name" style="display: inline;"> Tuan Le Minh</span>
                        </br>
                        <span class="newfeed__comment-text"> Mình đăng ảnh đẹp quá</span>
                    </div>
                </div>
                <input class="newfeed__comment-input newfeed__input" type="text" placeholder="Write your comment" />
            </div>
        </div>
    <?php
        }
    ?>
    </div>