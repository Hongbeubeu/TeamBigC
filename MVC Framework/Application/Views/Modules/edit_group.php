 <!-- The Modal -->
 <div id="modalEditGroup" class="modal">
     <!-- Modal content -->
     <div class="modal-content_update_group">
         <span class="close" onclick="closeModalBox('modalEditGroup')">&times;</span>
         <div class="toppane_update_group">
             <h2>Update info group</h2>
             <div class="title_edit_group">
                 <img src="/public/uploads/updateinfo.png" alt="ImageCover" class="image_cover">
                 <p>Let's update information your group...</p>
             </div>
         </div>
         <div class="bottompane_update_group">
             <form action="/edit-group" method="POST">
                 <div class="info_user">
                     <div>
                         <p>Name Group</p>
                         <input class="input_text" type="text" name="groupame" placeholder="Name Group" value="<?php echo $this->vars[0]['group_name'] ?>" />
                     </div>
                     <div>
                         <p>Slogan Group</p>
                         <input class="input_text" type="text" name="slogan" value="<?php echo $this->vars[0]['slogan'] ?>" />
                     </div>
                 </div>

                 <div class="info_user">
                     <div>
                         <p>Star target</p>
                         <input class="input_number" type="number" name="targetStar" value="<?php echo $this->vars[0]['target_star'] ?>" />
                     </div>
                 </div>
                 <div class="info_user">
                     <div>
                         <p>Description</p>
                         <input class="input_text" type="text" name="description" value="<?php echo $this->vars[0]['description'] ?>" />
                     </div>
                 </div>
                 <input type="hidden" name="url" value="<?php echo $_SERVER['REQUEST_URI'] ?>"/>
                 <input type="submit" id="btn_update_group" onclick="" value="Update">
             </form>
         </div>
     </div>
 </div>