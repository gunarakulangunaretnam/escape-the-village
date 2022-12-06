<?php

include 'php-classes/php-curd-class.php';


$dataObj = new DatabaseCURD();

$SessionValue = $_SESSION['SESSION_VALUE'];

$data = $dataObj->SelectQuery("SELECT game_data.*, user_accounts.name FROM game_data, user_accounts WHERE game_data.email = user_accounts.email ORDER BY total_scores DESC");

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>Escape The Village</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-cyborg-gaming.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!--

TemplateMo 579 Cyborg Gaming

https://templatemo.com/tm-579-cyborg-gaming

-->
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav" style="margin-left: 20%;">
                            <li><a href="./index.php">Home</a></li>
                            <li><a href="./browse.html">About</a></li>
                            <li><a href="./details.html">Contact</a></li>
                        </ul>

                        <ul class="nav">

                            <div class="main-button" style="margin-left: -5%;">
                                <a href="./login-register.php?pagetype=signin">Login</a>
                            </div>

                            <p style="visibility:hidden;">S</p>


                            <div class="main-button">
                                <a href="./login-register.php?pagetype=signup">Create an account</a>
                            </div>



                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-content">

                    <!-- ***** Banner Start ***** -->

                    <!-- ***** Banner End ***** -->

                    <!-- ***** Most Popular Start ***** -->

                    <!-- ***** Most Popular End ***** -->

                    <!-- ***** Gaming Library Start ***** -->

                    <div class="main-button">
                        <a href="./index.php">Go Back</a>
                    </div>
                    <div class="gaming-library">


                        <div class="col-lg-12">
                            <div class="heading-section">
                                <h4 style="text-align:center;">Leaderboard</h4>
                            </div>

                            <table class="table table-hover table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">Rank</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Total Score</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                        $number = 1;
                                        if ($data->num_rows > 0) {

                                            while($row = $data->fetch_assoc()) {

                                                if($row['email'] == $SessionValue){

                                                    echo "<tr class='glasseffectForLeaderboardSelectedRow'>";
                                                        echo "<th scope='row'>$number</th>";
                                                        echo "<td>".$row['name']."</td>";
                                                        echo "<td>".$row['email']."</td>";
                                                        echo "<td>".$row['total_scores']."</td>";
                                                    echo "</tr>";

                                                }else{

                                                    echo "<tr>";
                                                        echo "<th scope='row'>$number</th>";
                                                        echo "<td>".$row['name']."</td>";
                                                        echo "<td>".$row['email']."</td>";
                                                        echo "<td>".$row['total_scores']."</td>";
                                                    echo "</tr>";
                                                }

                                                $number = $number + 1; 
                                            }

                                        }
                                    ?>
                                </tbody>
                            </table>

                            <!-- Scripts -->
                            <!-- Bootstrap core JavaScript -->
                            <script src="vendor/jquery/jquery.min.js"></script>
                            <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

                            <script src="assets/js/isotope.min.js"></script>
                            <script src="assets/js/owl-carousel.js"></script>
                            <script src="assets/js/tabs.js"></script>
                            <script src="assets/js/popup.js"></script>
                            <script src="assets/js/custom.js"></script>


</body>

</html>