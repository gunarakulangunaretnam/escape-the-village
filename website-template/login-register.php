<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/login-register.css">

</head>

<body>

    <section class="forms-section">
        <h1 class="section-title">User Authentication</h1>
        <div class="forms">
            <div class="form-wrapper is-active" id="signinbox">
                <button type="button" class="switcher switcher-login">
                    Sign In
                    <span class="underline"></span>
                </button>
                <form class="form form-login">
                    <fieldset>
                        <legend>Please, enter your email and password for login.</legend>
                        <div class="input-block">
                            <label for="login-email">E-mail</label>
                            <input id="login-email" type="email" placeholder="example@abc.com" required>
                        </div>
                        <div class="input-block">
                            <label for="login-password">Password</label>
                            <input id="login-password" type="password" required>
                        </div>

                        <div class="input-block">
                            <label for="login-password" style="visibility:hidden;">SPACESPACESPA</label>
                            <a href="#" style="color: #e75e8d !important;">Forgot Password</a>
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
                <form class="form form-signup">
                    <fieldset>
                        <legend>Please, enter your email, password and password confirmation for sign up.</legend>

                        <div class="input-block">
                            <label for="signup-email">Name</label>
                            <input id="signup-email" placeholder="Ex: John Michael" type="text" required>
                        </div>

                        <div class="input-block">
                            <label for="signup-email">E-mail</label>
                            <input id="signup-email" placeholder="example@abc.com" type="email" required>
                        </div>

                        <div class="input-block">
                            <label for="signup-password">Password</label>
                            <input id="signup-password" type="password" required>
                        </div>
                        <div class="input-block">
                            <label for="signup-password-confirm">Confirm password</label>
                            <input id="signup-password-confirm" type="password" required>
                        </div>


                    </fieldset>
                    <button type="submit" class="main-border-button">Register</button>
                </form>
            </div>
        </div>
    </section>

    <script src="assets/js/login-register.js" async defer></script>
</body>

</html>