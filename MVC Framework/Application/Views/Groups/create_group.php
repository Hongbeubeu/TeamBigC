
        <!-- The Modal -->
        <div id="myModal" class="modal">
            <!-- Nội dung form tạo group -->
            <div class="modal-content_create_group">
            <form action="/create-group" method="POST">
                    <span class="close" onclick="closeModalBox('myModal')">&times;</span>
                    <div class="toppane_create_group">
                        <h2>Create Group</h2>
                        <div class="title_donate_create_group">
                            <img src="/public/assets/background.jpg" alt="Avatar" class="avatar">

                        </div>
                    </div>
                    <div class="bottompane_create_group">
                        
                            <div class="info_card">
                                <div>
                                    <p>Name Group</p>
                                    <input name="groupName" class="input_text" type="text" />
                                </div>
                            </div>
                            <div class="info_card">
                                <div>
                                    <p>Slogan Group</p>
                                    <input name="slogan" class="input_text" type="text" />
                                </div>
                            </div>
                            <div class="info_card">
                                <div>
                                    <p>Discription</p>
                                    <input name="description" class="input_text" type="text" />
                                </div>
                            </div>
                            <div class="info_card">
                                <div>
                                    <p>Star Target</p>
                                    <input name="targetStar" class="input_number" type="number" />
                                </div>
                            </div>
                            <input type="submit" id="btn_create_group" name="submit" value="Create"/>
                    </div>

                </form>
            </div>
        </div>
