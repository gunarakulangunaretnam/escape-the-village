<?php

session_start();

if (!isset($_SESSION['SESSION_EXISTS']))
{
    header("Location: ../1-landing-page-source/login-register.php?pagetype=signin");
    die();
}

?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <title>Escape The Village</title>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="hsl(221 90% 98%)" media="(prefers-color-scheme: light)">
    <meta name="theme-color" content="Canvas" media="(prefers-color-scheme: dark)">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="menu-assets/css/style.css">
    <script type="module" src="menu-assets/js/arrowkey-support.js"></script>
    <script type="module" src="menu-assets/js/mouse-parallax.js"></script>
</head>

<body>

    <div class="container">
        <div class="row">


            <div class="jumbotron glasseffect col-md-12 col-lg-12 col-sm-12 col-12">
                <h1 style="text-align:center;  font-family: Audiowide !important; font-weight:bold;">Settings</h1>


                <a type="submit" href="./index.php" class="btn btn-danger effectForButtonBlue">
                    < Go Back</a>
            </div>

            <div class="jumbotron glasseffect col-md-12 col-lg-12 col-sm-12 col-12">


                <form>

                    <h2 style="font-family: Audiowide !important; color:black; font-weight:bold;">General Settings</h2>
                    <hr>

                    <div class="form-group">
                        <label for="userEmail"
                            style="color:black; font-size: 22px; font-weight:bold; text-shadow: 1px 1px 4px red;">Email
                        </label>
                        <input type="email" disabled="true" class="form-control effectForTextBoxes" id="userEmail"
                            name="userEmail" aria-describedby="emailHelp" placeholder="User Email">

                    </div>

                    <div class="form-group">
                        <label for="name"
                            style="color:black; font-size: 22px; font-weight:bold; text-shadow: 1px 1px 4px red;">Name
                        </label>
                        <input type="email" class="form-control effectForTextBoxes" id="name" name="name"
                            aria-describedby="emailHelp" placeholder="Name">

                    </div>


                    <input type="submit" style="float:right;" class="btn btn-success effectForButtonGreen
                " value="Submit">

                </form>

            </div>

            <div class="jumbotron glasseffect col-md-12 col-lg-12 col-sm-12 col-12">
                <form>

                    <h2 style="font-family: Audiowide !important; color:black; font-weight:bold;">Change Password</h2>

                    <hr>


                    <div class="form-group">
                        <label for="currentPassword"
                            style="color:black; font-size: 22px; font-weight:bold; text-shadow: 1px 1px 4px red;">Current
                            Password</label>
                        <input type="email" class="form-control effectForTextBoxes" id="currentPassword"
                            name="currentPassword" aria-describedby="emailHelp" placeholder="Current Password">

                    </div>

                    <div class="form-group">
                        <label for="newPassword"
                            style="color:black; font-size: 22px; font-weight:bold; text-shadow: 1px 1px 4px red;">New
                            Password</label>
                        <input type="email" class="form-control effectForTextBoxes" id="newPassword" name="newPassword"
                            aria-describedby="emailHelp" placeholder="New Password">

                    </div>

                    <div class="form-group">
                        <label for="confirmPassword"
                            style="color:black; font-size: 22px; font-weight:bold; text-shadow: 1px 1px 4px red;">Confirm
                            Password</label>
                        <input type="email" class="form-control effectForTextBoxes" id="confirmPassword"
                            name="confirmPassword" aria-describedby="emailHelp" placeholder="Confirm Password">

                    </div>

                    <input type="submit" style="float:right;" class="btn btn-success effectForButtonGreen
             " value="Submit">
                </form>

            </div>

            <div class="jumbotron glasseffect col-md-12 col-lg-12 col-sm-12 col-12">
                <h1 style="text-align:center;  font-family: Audiowide !important; font-weight:bold;">
                    Reset The Game
                </h1>

                <p class="lead" style="font-weight:bold;"><span
                        style="color:red; font-weight:900; text-shadow: 2px 2px 3px black;">WARNING: </span>Resting the
                    game
                    will delete all the finished levels and scores and create a new game to play from scratch.</p>

                <form>

                    <button type="button" class="btn btn-danger btn-lg btn-block effectForButtonRed">RESET THE
                        GAME</button>

                </form>
            </div>
        </div>
    </div>

    <script src="" async defer></script>
</body>

</html>