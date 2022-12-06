<?php

session_start();

if (!isset($_SESSION['SESSION_EXISTS']))
{
    header("Location: ../1-landing-page-source/index.php");
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
                <h1 style="text-align:center;  font-family: Audiowide !important; font-weight:bold;">Leaderboard</h1>


                <a type="submit" href="./index.php" class="btn btn-danger effectForButtonBlue">
                    < Go Back</a>
            </div>

            <div class="jumbotron glasseffect col-md-12 col-lg-12 col-sm-12 col-12">



                <table class="table table-hover table-dark glasseffectForTable">
                    <thead>
                        <tr>
                            <th scope="col">Rank</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Total Score</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Gunarakulan Gunaretnam</td>
                            <td>gunarakulan@mgila.com</td>
                            <td>25000</td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Gunarakulan Gunaretnam</td>
                            <td>gunarakulan@mgila.com</td>
                            <td>25000</td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Gunarakulan Gunaretnam</td>
                            <td>gunarakulan@mgila.com</td>
                            <td>25000</td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Gunarakulan Gunaretnam</td>
                            <td>gunarakulan@mgila.com</td>
                            <td>25000</td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Gunarakulan Gunaretnam</td>
                            <td>gunarakulan@mgila.com</td>
                            <td>25000</td>
                        </tr>

                    </tbody>
                </table>


            </div>
        </div>
    </div>

    <script src="" async defer></script>
</body>

</html>