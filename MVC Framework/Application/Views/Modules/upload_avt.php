 <!-- The Modal edit post -->
 <div id="edit_avt" class="modal_edit_post">
     <!-- Modal content -->
     <div class="modal-content_upload_avt">
         <span id="close_edit_post" onclick="closeModalBox('edit_avt')">&times;</span>
         <div class="toppane_upload_avt">
             <h2 style="margin-left:20px;color:black">Upload Avatar</h2>
         </div>
         <div class="bottompane_upload_avt">
             <img src="/public/assets/background.jpg" />
             <form action="/profile/updateAvt" method="POST" enctype="multipart/form-data">
                 <input type="file" name="fileToUpload" id="myFile" />
                 <input id="submit_upload_img" type="submit" name="submit"/>
             </form>
         </div>
     </div>
 </div>