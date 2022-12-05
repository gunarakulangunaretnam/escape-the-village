<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Escape The Village</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/login-register.css">


</head>

<body>

    <div id="ServerMessage" style="display:none;" class="alert alert-danger" role="alert">
        <div style="text-align:center; font-size: 20px;" id="serverMessageHolder"></div>
    </div>

    <section class="forms-section">
        <h1 class="section-title">User Authentication</h1>
        <div class="forms">
            <div class="form-wrapper is-active" id="signinbox">
                <button type="button" class="switcher switcher-login">
                    Sign In
                    <span class="underline"></span>
                </button>
                <form action="php-handles/login-handle-script.php" method="POST" class="form form-login">
                    <fieldset>
                        <legend>Please, enter your email and password for login.</legend>
                        <div class="input-block">
                            <label for="login-email">E-mail</label>
                            <input id="email" name="email" type="email" placeholder="example@abc.com" required>
                        </div>
                        <div class="input-block">
                            <label for="login-password">Password</label>
                            <input id="password" name="password" type="password" required>
                        </div>

                        <div class="input-block">
                            <label for="login-password" style="visibility:hidden;">SPACESPACESPA</label>
                            <a href="forgot-password.php?pagetype=page1" style="color: #e75e8d !important;">Forgot
                                Password</a>
                        </div>

                    </fieldset>



                    <button type="submit" class="main-border-button">Login</button>
                </form>
            </div>
            <div class="form-wrapper" id="signupbox">
                <button type="button" class="switcher switcher-signup">
                    Sign Up
                    <span class="underline"></span>
                </button>
                <form action="php-handles/registeration-handle-script.php" method="POST" class="form form-signup">
                    <fieldset>
                        <legend>Please, enter your email, password and password confirmation for sign up.</legend>

                        <div class="input-block">
                            <label for="signup-email">Name</label>
                            <input id="name" name="name" placeholder="Ex: John Michael" type="text" required>
                        </div>

                        <div class="input-block">
                            <label for="signup-email">E-mail</label>
                            <input id="email" name="email" placeholder="example@abc.com" type="email" required>
                        </div>

                        <div class="input-block">
                            <label for="signup-password">Password</label>
                            <input id="password" name="password" type="password" required>
                        </div>
                        <div class="input-block">
                            <label for="signup-password-confirm">Confirm password</label>
                            <input id="confirm_password" name="confirm_password" type="password" required>
                        </div>


                    </fieldset>

                    <input type="submit" class="main-border-button" value="Register">
                </form>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="assets/js/login-register.js" async defer></script>
</body>

</html>