<!DOCTYPE html>
<html>

<head>
    <title>Đăng nhập</title>
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
                        <div>
                            <hr class="divider1">
                            <p class="suggestion">OR LOGIN WITH EMAIL</p>
                            <hr class="divider2">
                        </div>
                        <?php if(!empty($this->errors)) echo '<p>' . $this->errors[0] . '</p>' ?>
                        <div class="form-input">
                            <form action="/login" method="POST">
                                <div class="input-box">
                                    <input type="text" name = "email" placeholder="Email" value="<?php echo !empty($this->vars)?$this->vars['email']:'' ?>">
                                </div>
                                <div class="input-box">
                                    <input type="password" name = "password" placeholder="Password">
                                </div>
                                <div class="cbx">
                                    <input type="checkbox" id="logged" name="logged" value = "logged">
                                    <label for="logged"> Keep me logged in</label>
                                    <a href="#">Forgot password</a>
                                </div>

                                <button class="btn-box" name="submit" type="submit" onclick="validateLogin()">Log in</button>
                            </form>
                        </div>
                        <div>
                            <a id="dontaccount" href="#">Don't have an account yet ?</a>
                            <a id="signup" href="/register">Sign up</a>
                        </div>
                        <div>

                        </div>
                    </div>

                </div>
            </div>
            <div class="rightpane"></div>
        </div>
    </main>
</body>
<script src="/public/js/validate.js"></script>
</html>