
        <!-- The Modal -->
        <div id="myModal_donate_detail" class="modal">
            <!-- Nội dung form đăng nhập -->
            <div class="modal-content">
            <form action="/donate" method="POST">
                    <span class="close" onclick="closeModalBox('myModal_donate_detail')">&times;</span>
                    <div class="toppane">
                        <h2>Checkout</h2>
                        <div class="title_donate">
                            <img src="/public/assets/avatar.jpg" alt="Avatar" class="avatar">
                            <div class="title_subtitle">
                                <p id="title"><?php echo $this->vars[0]['group_name'] ?></p>
                                <p id="subtitle">Fundraiser by <?php echo $this->vars[0]['name'] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="bottompane">

                            <p>Donation amount(Star)</p>

                            <input name="amount_star" class="input_number" type="number" placeholder="Amount Star" />
                            <input name="group_id" type="hidden" value="<?php echo $this->vars[0]['id'] ?>"/>
                            <input type="submit" id="btn_donated" value="Donate">

                    </div>

                </form>
            </div>
        </div>
