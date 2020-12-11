<!DOCTYPE html>
<html>

<head>
    <title>Đăng nhập</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/public/css/donate.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="container">
        <button href="#" id="myBtn" onclick="openModalBox()">
            Donate
        </button>
        <!-- The Modal -->
        <div id="myModal" class="modal">
            <!-- Nội dung form đăng nhập -->
            <div class="modal-content">
                <form action="#">
                    <span class="close">&times;</span>
                    <div class="toppane">
                        <h2>Checkout</h2>
                        <div class="title_donate">
                            <img src="/public/assets/avatar.jpg" alt="Avatar" class="avatar">
                            <div class="title_subtitle">
                                <p id="title">VÌ BỮA ĂN CHO TRẺ MỒ CÔI VIỆT NAM</p>
                                <p id="subtitle">Fundraiser by Lê Dũng</p>
                            </div>
                        </div>
                    </div>
                    <div class="bottompane">
                        <form action="" method="post">

                            <p>Donation amount(Star)</p>

                            <input class="input_number" type="number" placeholder="Amount" />

                            <p>Payment method</p>

                            <div>
                                <input type="radio" name="my-input" id="visa" checked>
                                <label for="visa"><img src="/public/assets/visa.PNG" alt="Avatar" class="visa"></label>

                                <input type="radio" name="my-input" id="paypal">
                                <label for="paypal"><img src="/public/assets/paypal.PNG" alt="Avatar" class="paypal"></label>
                            </div>

                            <div class="info_card">
                                <div>
                                    <p>Cardholder Name</p>
                                    <input class="input_text" type="text" />
                                </div>
                                <div>
                                    <p>Expiration date</p>
                                    <input class="input_text" type="date" />
                                </div>
                            </div>

                            <div class="info_card">
                                <div>
                                    <p>Credit card number</p>
                                    <input class="input_text" type="text" />
                                </div>
                                <div>
                                    <p>Cvv code</p>
                                    <input class="input_cvv" type="number" />
                                    <button id="btn">Donate</button>
                                </div>
                            </div>

                        </form>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>
<script src="/public/js/handle_modal.js"></script>

</html>