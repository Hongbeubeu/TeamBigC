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
                        <form action="/profile/update" method="post">
                            <div class="info_user">
                                <div>
                                    <p>Name Group</p>
                                    <input class="input_text" type="text" name="display_name"
                                        placeholder="Name Group" />
                                </div>
                                <div>
                                    <p>Slogan Group</p>
                                    <input class="input_text" type="text" />
                                </div>
                            </div>
                           
                            <div class="info_user">
                                <div>
                                    <p>Star target</p>
                                    <input class="input_number" type="number" />
                                </div>
                            </div>
                            <div class="info_user">
                                <div>
                                    <p>Description</p>
                                    <input class="input_text" type="text" />
                                </div>
                            </div>
                            <button id="btn_update_group" onclick="">Update</button>
                        </form>
                    </div>
                </div>
            </div>