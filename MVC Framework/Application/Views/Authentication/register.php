<!DOCTYPE html>
<html>

<head>
    <title>Đăng ký</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/public/css/login-register.css" rel="stylesheet" type="text/css" />
    
</head>

<body>
    <main>
        <div class="container">
            <div class="leftpane">
                <div class="content">
                    <h1>Together Forever</h1>
                    <div class="under-h1">
                        <button class="btn"><img src="/public/assets/icons8-google-64.png" />
                            Log in with Gmail
                        </button>
                        <div style="align-items: center;">
                            <hr class="divider1">
                            <p class="suggestion">OR REGISTER WITH EMAIL</p>
                            <hr class="divider2">
                        </div>
                        <div class="form-input">
                            <form action="/register" method="POST" id="myForm">
                                <div class="input-box">
                                    <input type="text" name="email" placeholder="Email" id="email" required>
                                </div>
                                <div class="input-box">
                                    <input type="password" name="password" placeholder="Password">
                                </div>
                                <div class="input-box">
                                    <input type="password" name="confirmpassword" placeholder="Confirm Password">
                                </div>
                                <div class="input-box">
                                    <input type="text" name="displayname" placeholder="Display Name">
                                </div>

                                <div>
                                    <button class="btn-box" type="submit" id="submit">Register</button>
                                </div>
                            </form>
                        </div>
                        <div>
                            <a id="dontaccount" href="#">Do have an account ?</a>
                            <a id="login" href="/login">Login</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rightpane"></div>
        </div>
    </main>
    <script>
        function validateForm() {
            var x = document.forms["myForm"]["email"].value;
            if (x == "") {
                alert("email must be filled out");
                return false;
            }
        }
        document.getElementById('submit').onclick = validateForm;
    </script>
</body>

</html>