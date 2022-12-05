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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--

TemplateMo 579 Cyborg Gaming

https://templatemo.com/tm-579-cyborg-gaming

-->
</head>

<body>

    <div id="ServerMessage" style="display:none;" class="alert alert-danger" role="alert">
        <div style="text-align:center; font-size: 20px;" id="serverMessageHolder"></div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-content">

                    <!-- ***** Banner Start ***** -->
                    <div class="most-popular">
                        <div class="row">



                            <div class="heading-section">
                                <h4 style="text-align:center;">Enter the OTP to activate!</h4>
                                <h3 style="text-align:center; color:#ec6090; margin-bottom:10px;">The OTP sent to: <span
                                        id="emailPlaceHolder">(test@gmail.com)</span>
                                </h3>
                            </div>


                            <form action="php-handles/otp-confirmation-handle-script.php" method="POST">

                                <input style="border:2px solid #ec6090;" autofocus type="text" id="otpnumber"
                                    name="otpnumber" class="form-control" required>

                                <input style="border:2px solid #ec6090; display:none;" type="text" id="emailbox"
                                    name="emailbox" class="form-control" required>

                                <br>
                                <input
                                    style="float: left; position:relative; left: 46.5%; top:15%; background-color:#ec6090;"
                                    type="submit" class="btn btn-secondary btn-lg btn-block">
                            </form>


                        </div>

                    </div>
                </div>
                <!-- ***** Most Popular End ***** -->
            </div>
        </div>
    </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright © 2022 <a style="color:#e75e8d !important; font-weight: bold;"
                            href="https://web.facebook.com/deepeleven11" target="_blank">Deep11</a> Company | All rights
                        reserved.

                        <br>Design & Developed By: <a style="color:#e75e8d !important; font-weight: bold;"
                            href="https://www.linkedin.com/in/gunarakulangunaretnam/" target="_blank">Gunarakulan
                            Gunaretnam</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>


    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="assets/js/activate-page.js" async defer></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/popup.js"></script>
    <script src="assets/js/custom.js"></script>


</body>

</html>