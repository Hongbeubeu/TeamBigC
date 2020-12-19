<!DOCTYPE html>
<html>

<head>
    <title>Create Group</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/public/css/donate.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="container">
        <button id="myBtn" onclick="onClickCreateGroup()">
            Donate
        </button>
        <!-- The Modal -->
        <div id="myModal" class="modal">
            <!-- Nội dung form đăng nhập -->
            <div class="modal-content_create_group">
                <form action="#">
                    <span class="close">&times;</span>
                    <div class="toppane_create_group">
                        <h2>Create Group</h2>
                        <div class="title_donate_create_group">
                            <img src="/public/assets/background.jpg" alt="Avatar" class="avatar">

                        </div>
                    </div>
                    <div class="bottompane_create_group">
                        <form action="" method="post">
                            <div class="info_card">
                                <div>
                                    <p>Name Group</p>
                                    <input class="input_text" type="text" />
                                </div>
                            </div>
                            <div class="info_card">
                                <div>
                                    <p>Slogan Group</p>
                                    <input class="input_text" type="text" />
                                </div>
                            </div>
                            <div class="info_card">
                                <div>
                                    <p>Discription</p>
                                    <input class="input_text" type="text" />
                                </div>
                            </div>
                            <div class="info_card">
                                <div>
                                    <p>Star Target</p>
                                    <input class="input_number" type="number" />
                                </div>
                            </div>
                            <button id="btn_create_group" onclick="">Create</button>
                        </form>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>
<script src="/public/js/handler.js"></script>

</html>