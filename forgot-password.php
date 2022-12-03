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
        <h1 class="section-title">Forgot Password</h1>
        <div class="forms">
            <div class="form-wrapper is-active" id="signinbox">
                <form class="form form-login">
                    <fieldset>
                        <legend>Please, enter your email and password for login.</legend>
                        <div class="input-block">
                            <label for="login-email">E-mail</label>
                            <input id="login-email" type="email" placeholder="example@abc.com" required>
                        </div>

                    </fieldset>

                    <button type="submit" class="main-border-button">Continue</button>

                </form>
            </div>
            <div class="form-wrapper" id="signupbox">
                <form class="form form-signup">
                    <fieldset>
                        <legend>Please, enter your email, password and password confirmation for sign up.</legend>

                        <h2 style="color:#e75e8d; font-family: 'Poppins', sans-serif; text-align:center;">Sent
                            Successfully!</h2>

                        <hr>

                        <h4 style="color:#e75e8d; font-family: 'Poppins', sans-serif">The password was sent to your
                            email, <br> please check it out!!</h4>


                    </fieldset>
                    <button type="submit" class="main-border-button">Login</button>
                </form>
            </div>
        </div>
    </section>

    <script src="assets/js/login-register.js" async defer></script>
</body>

</html>