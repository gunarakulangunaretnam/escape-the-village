<?php

session_start();

if (!isset($_SESSION['SESSION_EXISTS']))
{
    header("Location: ../1-landing-page-source/index.php");
    die();
}

?>


<!DOCTYPE html>

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
    <link rel="stylesheet" href="menu-assets/css/style-for-start-game.css">
</head>

<body>
    <div class="container">

        <div class="row">

            <div class="jumbotron glasseffect col-md-12 col-lg-12 col-sm-12 col-12">
                <h1 style="text-align:center;  font-family: Audiowide !important; font-weight:bold;">Start Game</h1>


                <a type="submit" href="./index.php" class="btn btn-danger effectForButtonBlue">
                    < Go Back</a>
            </div>



            <div class="jumbotron glasseffect col-md-12 col-lg-12 col-sm-12 col-12">

                <h1 style="text-align:center;  font-family: Audiowide !important; font-weight:bold;">Levels</h1>
                <hr>

                <div class="alert alert-primary glasseffect col-md-4"
                    style="text-align:center; font-weight:900; color:red; margin-bottom:-4%;" role="alert">
                    <h4 style="font-size: 30px; text-shadow:2px 2px 4px black;"><span id="scorebox"
                            style="font-weight:bold;">Total
                            Scores: 1500 </span></h4>
                </div>

                <!-- ***** Most Popular Start ***** -->
                <div class="most-popular">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">

                                <div class="col-lg-4 col-sm-6">
                                    <div class="itemunlocked">
                                        <img style="width:100%;" src="images/cover-images/stage-1-cover.jpg" alt="">
                                        <h4 class="level-header">Level 1<br><span
                                                style="color:white; font-size: 18px;">Escape The
                                                Jungle</span></h4>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="itemlocked">
                                        <img style="width:100%;" src="images/cover-images/stage-2-cover.jpg" alt="">
                                        <h4 class="level-header" style="opacity:1 !important; color:white;">Level
                                            2<br><span style="color:white; font-size: 18px;">Escape The Desert</span>
                                        </h4>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="itemlocked">
                                        <img style="width:100%;" src="images/cover-images/stage-3-cover.jpg" alt="">
                                        <h4 class="level-header">Level 3<br><span
                                                style="color:white; font-size: 18px;">Escape The Snowy </span></h4>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="itemlocked">
                                        <img style="width:100%;" src="images/cover-images/stage-4-cover.jpg" alt="">
                                        <h4 class="level-header">Level 4<br><span
                                                style="color:white; font-size: 18px;">Escape The Forest</span></h4>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="itemlocked">
                                        <img style="width:100%;" src="images/cover-images/stage-5-cover.jpg" alt="">
                                        <h4 class="level-header">Level 5<br><span
                                                style="color:white; font-size: 18px;">Escape The Graveyard</span>
                                        </h4>
                                    </div class="level-header">
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="itemlocked">
                                        <img style="width:100%;" src="images/cover-images/stage-6-cover.jpg" alt="">
                                        <h4 class="level-header">Level 6<br><span
                                                style="color:white; font-size: 18px;">Escape The Science Lab</span>
                                        </h4>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- ***** Most Popular End ***** -->
            </div>
        </div>
    </div>
    </div>
    </div>

    </div>
    </div>

    <script src="" async defer></script>
</body>

</html>