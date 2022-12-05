<?php

session_start();

if (!isset($_SESSION['SESSION_EXISTS']))
{
    header("Location: ../1-landing-page-source/login-register.php?pagetype=signin");
    die();
}

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="js/jquery-3.6.1.min.JS"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
    <script type="text/javascript" src="js/level-1/main.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/level-1/main.css" rel="stylesheet" type="text/css" />
    <link href="css/level-1/custom.css" rel="stylesheet" type="text/css" />
    <link href="css/level-1/timer-ticker-style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/level-1/script-1.js"></script>


</head>

<body>


    <div id="level-1-cover-box">

        <img id="level-play-btn" src="images/ui-assets/play-btn-1.png">

    </div>

    <!--Door Open Logic API-->
    <div style="display: none; width:100%; margin-top:1.6%; position:fixed; width:100%; left:0px; top:0px; z-index:99999999;"
        id="door-open-box-1">
        <div
            style="width:80%; height: 700px;  margin:auto; background-color:#FFFF99; border:5px solid #CC0000; box-shadow:0px 0px 30px #000; border-radius:10px; padding:20px; text-align:center; ">
            <h1 class="style1">PLEASE SOLVE THE FOLLOWING PUZZLE TO OPEN THE DOOR</h1>
            <hr>

            <img id="door-open-box-1-puzzle-image" src=""
                style="margin-top:1%; width: 60%; height:400px; border: 3px solid rgb(0, 0, 0);">

            <form class="form-group py-3">
                <label for="exampleInputEmail1" style="font-weight: bold; font-size: 20px;">Select Your Answer:
                </label><br>

                <button id="DoorOpenBox1AnswerBTN1" style="margin-left: 10px;"
                    class="btn btn-success DoorOpenBox1AnswerBTN">0</button>
                <button id="DoorOpenBox1AnswerBTN2" style="margin-left: 10px;"
                    class="btn btn-success DoorOpenBox1AnswerBTN">0</button>
                <button id="DoorOpenBox1AnswerBTN3" style="margin-left: 10px;"
                    class="btn btn-success DoorOpenBox1AnswerBTN">0</button>
                <button id="DoorOpenBox1AnswerBTN4" style="margin-left: 10px;"
                    class="btn btn-success DoorOpenBox1AnswerBTN">0</button>

            </form>

        </div>
    </div>


    <div style="display: none; width:100%; margin-top:1.6%; position:fixed; width:100%; left:0px; top:0px; z-index:99999999;"
        id="door-open-box-2">
        <div
            style="width:80%; height: 700px;  margin:auto; background-color:#FFFF99; border:5px solid #CC0000; box-shadow:0px 0px 30px #000; border-radius:10px; padding:20px; text-align:center; ">
            <h1 class="style1">PLEASE SOLVE THE FOLLOWING PUZZLE TO OPEN THE DOOR</h1>
            <hr>

            <img id="door-open-box-2-puzzle-image" src=""
                style="margin-top:1%; width: 60%; height:400px; border: 3px solid rgb(0, 0, 0);">

            <form class="form-group py-3">
                <label for="exampleInputEmail1" style="font-weight: bold; font-size: 20px;">Select Your Answer:
                </label><br>
                <button id="DoorOpenBox2AnswerBTN1" style="margin-left: 10px;"
                    class="btn btn-success DoorOpenBox2AnswerBTN">0</button>
                <button id="DoorOpenBox2AnswerBTN2" style="margin-left: 10px;"
                    class="btn btn-success DoorOpenBox2AnswerBTN">0</button>
                <button id="DoorOpenBox2AnswerBTN3" style="margin-left: 10px;"
                    class="btn btn-success DoorOpenBox2AnswerBTN">0</button>
                <button id="DoorOpenBox2AnswerBTN4" style="margin-left: 10px;"
                    class="btn btn-success DoorOpenBox2AnswerBTN">0</button>
                <div id="app1"></div>
                <br>

            </form>

        </div>
    </div>


    <div style="display: none; width:100%; margin-top:1.6%; position:fixed; width:100%; left:0px; top:0px; z-index:99999999;"
        id="door-open-box-3">
        <div
            style="width:80%; height: 700px;  margin:auto; background-color:#FFFF99; border:5px solid #CC0000; box-shadow:0px 0px 30px #000; border-radius:10px; padding:20px; text-align:center; ">
            <h1 class="style1">PLEASE SOLVE THE FOLLOWING PUZZLE TO OPEN THE DOOR</h1>
            <hr>

            <img id="door-open-box-3-puzzle-image" src=""
                style="margin-top:1%; width: 60%; height:400px; border: 3px solid rgb(0, 0, 0);">

            <form class="form-inline py-3" style="margin-left: 26%;">

                <label for="exampleInputEmail1" style="font-weight: bold; font-size: 17px;">Enter Your Answer:
                </label><br>
                <input id="DoorOpenBox3AnswerTEXTBOX" style="margin-left: 10px;" type="text" class="form-control" />
                <button id="DoorOpenBox3AnswerBTN" style="margin-left: 10px;" type="submit"
                    class="btn btn-success">Submit The Answer</button>

            </form>

        </div>
    </div>



    <div style="display: none; width:100%; margin-top:1.6%; position:fixed; width:100%; left:0px; top:0px; z-index:99999999;"
        id="door-open-box-4">
        <div
            style="width:80%; height: 700px;  margin:auto; background-color:#FFFF99; border:5px solid #CC0000; box-shadow:0px 0px 30px #000; border-radius:10px; padding:20px; text-align:center; ">
            <h1 class="style1">PLEASE SOLVE THE FOLLOWING PUZZLE TO OPEN THE DOOR</h1>
            <hr>

            <img id="door-open-box-4-puzzle-image" src=""
                style="margin-top:1%; width: 60%; height:400px; border: 3px solid rgb(0, 0, 0);">

            <div style="position:absolute;" id="app2"></div>

            <form class="form-inline py-3" style="margin-left: 26%;">

                <label for="exampleInputEmail1" style="font-weight: bold; font-size: 17px;">Enter Your Answer:
                </label><br>
                <input id="DoorOpenBox4AnswerTEXTBOX" style="margin-left: 10px;" type="text" class="form-control" />
                <button id="DoorOpenBox4AnswerBTN" style="margin-left: 10px;" type="submit"
                    class="btn btn-success">Submit The Answer</button>

            </form>

        </div>
    </div>


    <div class="bluesky" id="skydiv">
        <div id="stage">

            <div class="mudroadtexture" style="left:0px; width:2200px;"></div>
            <div class="mudroadtexture" style="left:2200px; width:800px;"></div>
            <div class="mudroadtexture" style="left:3200px; width:300px;"></div>

            <!--Crocodial 1-->
            <div class="crocodial" style=" left:3000px;">
                <div style="position:relative;">
                    <div class="waterwarn200" id="croco1"></div>
                </div>
            </div>

            <!--Fire Box 1-->
            <div style="position:absolute; z-index:111; left:1600px; bottom:70px;">
                <div style=" position:relative;">
                    <img src="images/fire.gif" />
                    <div style="position:absolute; width:60px; left:20px; top:0px; height:100px;" id="enm13"></div>
                </div>
            </div>


            <!--Bridge 1-->
            <div class="bridgetexture" style=" left:3500px; width:1900px;"></div>

            <!--Crocodial 1-->
            <div class="crocodial" style=" left:5400px;">
                <div style="position:relative;">
                    <div class="waterwarn200" id="croco2"></div>
                </div>
            </div>

            <!--Fire Box 1-->
            <div style="position:absolute; z-index:111; left:6600px; bottom:70px;">
                <div style=" position:relative;">
                    <img src="images/fire.gif" />
                    <div style="position:absolute; width:60px; left:20px; top:0px; height:100px;" id="enm14"></div>
                </div>
            </div>



            <div style="position:absolute; z-index:111; left:7600px; bottom:70px;">
                <div style=" position:relative;">
                    <img src="images/fire.gif" />
                    <div style="position:absolute; width:60px; left:20px; top:0px; height:100px;" id="enm15"></div>
                </div>
            </div>


            <div style="position:absolute; z-index:111; left:9600px; bottom:70px;">
                <div style=" position:relative;">
                    <img src="images/fire.gif" />
                    <div style="position:absolute; width:60px; left:20px; top:0px; height:100px;" id="enm16"></div>
                </div>
            </div>

            <div style="position:absolute; z-index:111; left:11600px; bottom:70px;">
                <div style=" position:relative;">
                    <img src="images/fire.gif" />
                    <div style="position:absolute; width:60px; left:20px; top:0px; height:100px;" id="enm16"></div>
                </div>
            </div>

            <div style="position:absolute; z-index:111; left:15600px; bottom:70px;">
                <div style=" position:relative;">
                    <img src="images/fire.gif" />
                    <div style="position:absolute; width:60px; left:20px; top:0px; height:100px;" id="enm17"></div>
                </div>
            </div>

            <div style="position:absolute; z-index:111; left:18600px; bottom:70px;">
                <div style=" position:relative;">
                    <img src="images/fire.gif" />
                    <div style="position:absolute; width:60px; left:20px; top:0px; height:100px;" id="enm18"></div>
                </div>
            </div>

            <!--Grounds Tiles-->
            <div class="mudroadtexture" style=" left:5600px; width:1500px;"></div>

            <!--Crocodial 1-->
            <div class="crocodial" style=" left:7100px;">
                <div style="position:relative;">
                    <div class="waterwarn200" id="croco3"></div>
                </div>
            </div>

            <div class="bridgetexture" style=" left:7300px; width:4000px;"></div>

            <div class="bridgetexture" style=" left:11000px; width:2000px;"></div>

            <div class="mudroadtexture" style=" left:12600px; width:2000px;"></div>

            <div class="bridgetexture" style=" left:14600px; width:2000px;"></div>

            <div class="mudroadtexture" style=" left:16600px; width:6000px;"></div>




            <div class="enmybox MovingObjects">

                <!-- Finsih line -->

                <!-- Birds Collections -->
                <div style="position:relative; width:100%; overflow:visible;">

                    <img src="images/animations/air-balloon.gif" class="AirBalloon MovingObjects"
                        style="position:absolute; left:3700px; bottom: -200px;" />

                    <img src="images/animations/air-balloon.gif" class="AirBalloon MovingObjects"
                        style="position:absolute; left:3200px; bottom: -200px;" />

                    <img src="images/animations/aircraft.gif" class="Aircraft MovingObjects"
                        style="position:absolute; left:1800px; bottom: 300px;" />

                    <img src="images/animations/aircraft.gif" class="Aircraft MovingObjects"
                        style="position:absolute; left:1900px; bottom:400px;" />


                    <img src="images/animations/aircraft.gif" class="Aircraft MovingObjects"
                        style="position:absolute; left:2800px; bottom: 300px;" />


                    <img src="images/animations/aircraft.gif" class="Aircraft MovingObjects"
                        style="position:absolute; left:3800px; bottom: 300px;" />

                    <img src="images/enm_stage1/dragon.gif" class="skybirds MovingObjects"
                        style="position:absolute; left:2000px; bottom:2500px;" id="skybirds-enm1" />
                    <img src="images/enm_stage1/bird-1.gif" class="skybirds MovingObjects"
                        style="position:absolute; left:1000px; bottom:2500px;" id="skybirds-enm1" />
                    <img src="images/enm_stage1/bird-1.gif" class="skybirds MovingObjects"
                        style="position:absolute; left:1200px; bottom:2300px;" id="skybirds-enm1" />
                    <img src="images/enm_stage1/bird-2.gif" class="skybirds MovingObjects"
                        style="position:absolute; left:1500px; bottom:500px;" id="skybirds-enm2" />
                    <img src="images/enm_stage1/bird-2.gif" class="skybirds MovingObjects"
                        style="position:absolute; left:2500px; bottom:400px;" id="skybirds-enm3" />
                    <img src="images/enm_stage1/bird-4.gif" class="skybirds MovingObjects"
                        style="position:absolute; left:3500px; bottom:600px;" id="skybirds-enm4" />
                    <img src="images/enm_stage1/bird-2.gif" class="skybirds MovingObjects"
                        style="position:absolute; left:4000px; bottom:400px;" id="skybirds-enm5" />
                    <img src="images/enm_stage1/bird-2.gif" class="skybirds MovingObjects"
                        style="position:absolute; left:4800px; bottom:400px;" id="skybirds-enm6" />
                    <img src="images/enm_stage1/bird-1.gif" class="skybirds MovingObjects"
                        style="position:absolute; left:5200px; bottom:600px;" id="skybirds-enm7" />
                    <img src="images/enm_stage1/bird-2.gif" class="skybirds MovingObjects"
                        style="position:absolute; left:5300px; bottom:400px;" id="skybirds-enm8" />
                    <img src="images/enm_stage1/bird-3.gif" class="skybirds MovingObjects"
                        style="position:absolute; left:6000px; bottom:400px;" id="skybirds-enm9" />
                    <img src="images/enm_stage1/bird-1.gif" class="skybirds MovingObjects"
                        style="position:absolute; left:6200px; bottom:700px;" id="skybirds-enm10" />
                    <img src="images/enm_stage1/bird-2.gif" class="skybirds MovingObjects"
                        style="position:absolute; left:7200px; bottom:400px;" id="skybirds-enm11" />
                    <img src="images/enm_stage1/bird-2.gif" class="skybirds MovingObjects"
                        style="position:absolute; left:7200px; bottom:400px;" id="skybirds-enm12" />
                    <img src="images/enm_stage1/bird-1.gif" class="skybirds MovingObjects"
                        style="position:absolute; left:7400px; bottom:250px;" id="skybirds-enm13" />
                    <img src="images/enm_stage1/bird-1.gif" class="skybirds MovingObjects"
                        style="position:absolute; left:7700px; bottom:400px;" id="skybirds-enm14" />
                    <img src="images/enm_stage1/bird-3.gif" class="skybirds MovingObjects"
                        style="position:absolute; left:8400px; bottom:50px;" id="skybirds-enm15" />
                    <img src="images/enm_stage1/bird-1.gif" class="skybirds MovingObjects"
                        style="position:absolute; left:9000px; bottom:900px;" id="skybirds-enm16" />
                    <img src="images/enm_stage1/bird-3.gif" class="skybirds MovingObjects"
                        style="position:absolute; left:9500px; bottom:400px;" id="skybirds-enm12" />
                    <img src="images/enm_stage1/bird-2.gif" class="skybirds MovingObjects"
                        style="position:absolute; left:11000px; bottom:250px;" id="skybirds-enm13" />
                    <img src="images/enm_stage1/bird-5.gif" class="skybirds MovingObjects"
                        style="position:absolute; left:11200px; bottom:400px;" id="skybirds-enm14" />
                    <img src="images/enm_stage1/bird-5.gif" class="skybirds MovingObjects"
                        style="position:absolute; left:11300px; bottom:50px;" id="skybirds-enm15" />
                    <img src="images/enm_stage1/bird-5.gif" class="skybirds MovingObjects"
                        style="position:absolute; left:11450px; bottom:900px;" id="skybirds-enm16" />


                    <img src="images/enm_stage1/dragon.gif" class="skybirds MovingObjects"
                        style="position:absolute; left:3000px; bottom:2700px;" id="skybirds-enm17" />
                    <img src="images/enm_stage1/bird-1.gif" class="skybirds MovingObjects"
                        style="position:absolute; left:2220px; bottom:2200px;" id="skybirds-enm18" />
                    <img src="images/enm_stage1/bird-1.gif" class="skybirds MovingObjects"
                        style="position:absolute; left:1300px; bottom:1100px;" id="skybirds-enm19" />
                    <img src="images/enm_stage1/bird-2.gif" class="skybirds MovingObjects"
                        style="position:absolute; left:4000px; bottom:500px;" id="skybirds-enm20" />
                    <img src="images/enm_stage1/bird-2.gif" class="skybirds MovingObjects"
                        style="position:absolute; left:3500px; bottom:400px;" id="skybirds-enm21" />
                    <img src="images/enm_stage1/bird-4.gif" class="skybirds MovingObjects"
                        style="position:absolute; left:6500px; bottom:600px;" id="skybirds-enm22" />
                    <img src="images/enm_stage1/bird-2.gif" class="skybirds MovingObjects"
                        style="position:absolute; left:6000px; bottom:400px;" id="skybirds-enm23" />
                    <img src="images/enm_stage1/bird-2.gif" class="skybirds MovingObjects"
                        style="position:absolute; left:4800px; bottom:400px;" id="skybirds-enm24" />
                    <img src="images/enm_stage1/bird-1.gif" class="skybirds MovingObjects"
                        style="position:absolute; left:3200px; bottom:600px;" id="skybirds-enm25" />
                    <img src="images/enm_stage1/bird-2.gif" class="skybirds MovingObjects"
                        style="position:absolute; left:7300px; bottom:400px;" id="skybirds-enm26" />
                    <img src="images/enm_stage1/bird-3.gif" class="skybirds MovingObjects"
                        style="position:absolute; left:9000px; bottom:400px;" id="skybirds-enm27" />
                    <img src="images/enm_stage1/bird-1.gif" class="skybirds MovingObjects"
                        style="position:absolute; left:12200px; bottom:700px;" id="skybirds-enm28" />
                    <img src="images/enm_stage1/bird-2.gif" class="skybirds MovingObjects"
                        style="position:absolute; left:11200px; bottom:400px;" id="skybirds-enm29" />
                    <img src="images/enm_stage1/bird-2.gif" class="skybirds MovingObjects"
                        style="position:absolute; left:15200px; bottom:400px;" id="skybirds-enm30" />
                    <img src="images/enm_stage1/bird-1.gif" class="skybirds MovingObjects"
                        style="position:absolute; left:12400px; bottom:250px;" id="skybirds-enm31" />
                    <img src="images/enm_stage1/bird-1.gif" class="skybirds MovingObjects"
                        style="position:absolute; left:14700px; bottom:400px;" id="skybirds-enm32" />
                    <img src="images/enm_stage1/bird-3.gif" class="skybirds MovingObjects"
                        style="position:absolute; left:15400px; bottom:50px;" id="skybirds-enm33" />
                    <img src="images/enm_stage1/bird-1.gif" class="skybirds MovingObjects"
                        style="position:absolute; left:17000px; bottom:900px;" id="skybirds-enm34" />
                    <img src="images/enm_stage1/bird-3.gif" class="skybirds MovingObjects"
                        style="position:absolute; left:18500px; bottom:400px;" id="skybirds-enm35" />
                    <img src="images/enm_stage1/bird-2.gif" class="skybirds MovingObjects"
                        style="position:absolute; left:191000px; bottom:250px;" id="skybirds-enm36" />
                    <img src="images/enm_stage1/bird-5.gif" class="skybirds MovingObjects"
                        style="position:absolute; left:121200px; bottom:400px;" id="skybirds-enm37" />
                    <img src="images/enm_stage1/bird-5.gif" class="skybirds MovingObjects"
                        style="position:absolute; left:15300px; bottom:50px;" id="skybirds-enm38" />
                    <img src="images/enm_stage1/bird-5.gif" class="skybirds MovingObjects"
                        style="position:absolute; left:16450px; bottom:900px;" id="skybirds-enm39" />

                    <img src="images/enm_stage1/train.gif" id="train" class="MovingObjects"
                        style="position:absolute; left:3000px; bottom: -200px;" />
                </div>
            </div>
            <div class="score-objects">
                <!-- Coins Collections -->

                <img src="images/doors/2.png" style="position:absolute; left:1800px; top:-165px;" id="door1" />
                <img src="images/doors/2.png" style="position:absolute; left:3280px; top:-165px;" id="door2" />
                <img src="images/doors/2.png" style="position:absolute; left:4800px; top:-165px;" id="door3" />
                <img src="images/doors/2.png" style="position:absolute; left:6780px; top:-165px;" id="door4" />

                <img src="images/doors/2.png" style="position:absolute; left:8000px; top:-165px;" id="door5" />

                <img src="images/doors/2.png" style="position:absolute; left:9960px; top:-165px;" id="door6" />

                <img src="images/doors/2.png" style="position:absolute; left:11960px; top:-165px;" id="door7" />

                <img src="images/doors/2.png" style="position:absolute; left:13960px; top:-165px;" id="door8" />


                <img src="images/doors/2.png" style="position:absolute; left:15260px; top:-165px;" id="door9" />


                <img src="images/doors/2.png" style="position:absolute; left:17960px; top:-165px;" id="door10" />

                <img src="images/doors/2.png" style="position:absolute; left:18960px; top:-165px;" id="door11" />



                <img src="images/coin/dim.png" class="" style="position:absolute; left:1350px; top:100px;"
                    id="diamond1" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:1300px; top:130px;"
                    id="diamond2" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:1500px; top:120px;"
                    id="diamond3" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:2800px; top:120px;"
                    id="diamond4" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:3500px; top:100px;"
                    id="diamond5" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:4950px; top:140px;"
                    id="diamond6" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:4500px; top:130px;"
                    id="diamond7" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:4850px; top:120px;"
                    id="diamond8" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:5100px; top:110px;"
                    id="diamond9" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:5250px; top:120px;"
                    id="diamond10" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:5150px; top:100px;"
                    id="diamond11" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:5300px; top:130px;"
                    id="diamond12" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:5700px; top:130px;"
                    id="diamond13" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:6300px; top:130px;"
                    id="diamond14" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:6400px; top:130px;"
                    id="diamond15" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:6500px; top:130px;"
                    id="diamond16" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:6600px; top:130px;"
                    id="diamond17" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:6700px; top:130px;"
                    id="diamond18" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:6800px; top:130px;"
                    id="diamond19" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:8000px; top:130px;"
                    id="diamond20" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:8200px; top:130px;"
                    id="diamond21" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:8700px; top:130px;"
                    id="diamond22" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:9000px; top:130px;"
                    id="diamond23" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:9500px; top:130px;"
                    id="diamond24" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:10000px; top:130px;"
                    id="diamond25" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:10100px; top:130px;"
                    id="diamond26" />

                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:1400px; top:100px;"
                    id="coin1" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:1450px; top:90px;"
                    id="coin2" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:1500px; top:80px;"
                    id="coin3" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:2300px; top:30px;"
                    id="coin4" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:2350px; top:20px;"
                    id="coin5" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:2900px; top:30px;"
                    id="coin6" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:3900px; top:40px;"
                    id="coin7" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:4400px; top:35px;"
                    id="coin8" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:4450px; top:20px;"
                    id="coin9" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:5000px; top:15px;"
                    id="coin10" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:5050px; top:22px;"
                    id="coin11" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:5050px; top:30px;"
                    id="coin12" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:5100px; top:40px;"
                    id="coin13" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:5150px; top:50px;"
                    id="coin14" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:5200px; top:50px;"
                    id="coin15" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:5250px; top:40px;"
                    id="coin16" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:5300px; top:20px;"
                    id="coin17" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:5400px; top:20px;"
                    id="coin18" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:5500px; top:20px;"
                    id="coin19" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:5600px; top:20px;"
                    id="coin20" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:5700px; top:20px;"
                    id="coin21" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:5800px; top:20px;"
                    id="coin22" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:5900px; top:20px;"
                    id="coin23" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:5400px; top:20px;"
                    id="coin24" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:6500px; top:20px;"
                    id="coin25" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:6600px; top:40px;"
                    id="coin26" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:6700px; top:60px;"
                    id="coin27" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:6800px; top:80px;"
                    id="coin28" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:6900px; top:100px;"
                    id="coin29" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:7000px; top:15px;"
                    id="coin30" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:8000px; top:15px;"
                    id="coin31" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:8500px; top:15px;"
                    id="coin32" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:9000px; top:15px;"
                    id="coin33" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:9500px; top:70px;"
                    id="coin34" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:10000px; top:80px;"
                    id="coin35" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:10500px; top:90px;"
                    id="coin36" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:10500px; top:100px;"
                    id="coin37" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:10550px; top:100px;"
                    id="coin38" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:10550px; top:110px;"
                    id="coin39" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:11000px; top:80px;"
                    id="coin40" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:11000px; top:90px;"
                    id="coin41" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:10500px; top:100px;"
                    id="coin42" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:10550px; top:100px;"
                    id="coin43" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:10550px; top:110px;"
                    id="coin44" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:1300px; top:100px;"
                    id="coin45" />

                <img src="images/coin/dim.png" class="" style="position:absolute; left:11350px; top:100px;"
                    id="diamond27" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:11300px; top:130px;"
                    id="diamond28" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:11500px; top:120px;"
                    id="diamond29" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:11800px; top:120px;"
                    id="diamond30" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:11500px; top:100px;"
                    id="diamond31" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:11950px; top:140px;"
                    id="diamond32" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:11500px; top:130px;"
                    id="diamond33" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:11850px; top:120px;"
                    id="diamond34" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:11100px; top:110px;"
                    id="diamond35" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:11250px; top:120px;"
                    id="diamond36" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:11150px; top:100px;"
                    id="diamond37" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:11300px; top:130px;"
                    id="diamond38" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:11700px; top:130px;"
                    id="diamond39" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:11300px; top:130px;"
                    id="diamond30" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:11400px; top:130px;"
                    id="diamond40" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:11400px; top:130px;"
                    id="diamond41" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:11500px; top:130px;"
                    id="diamond42" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:11600px; top:130px;"
                    id="diamond43" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:11700px; top:130px;"
                    id="diamond44" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:11800px; top:130px;"
                    id="diamond45" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:11000px; top:130px;"
                    id="diamond46" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:11200px; top:130px;"
                    id="diamond47" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:11700px; top:130px;"
                    id="diamond48" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:11000px; top:130px;"
                    id="diamond49" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:11500px; top:130px;"
                    id="diamond50" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:110000px; top:130px;"
                    id="diamond51" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:110100px; top:130px;"
                    id="diamond52" />



                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:16795px; top:86px;"
                    id="coin91" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:11108px; top:130px;"
                    id="coin92" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:14491px; top:92px;"
                    id="coin93" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:17062px; top:89px;"
                    id="coin94" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:14776px; top:102px;"
                    id="coin95" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:15070px; top:125px;"
                    id="coin96" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:13316px; top:73px;"
                    id="coin97" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:17527px; top:115px;"
                    id="coin98" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:12954px; top:122px;"
                    id="coin99" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:12120px; top:108px;"
                    id="coin100" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:14067px; top:129px;"
                    id="coin101" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:14926px; top:127px;"
                    id="coin102" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:16173px; top:72px;"
                    id="coin103" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:15058px; top:116px;"
                    id="coin104" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:11106px; top:107px;"
                    id="coin105" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:11365px; top:89px;"
                    id="coin106" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:14673px; top:118px;"
                    id="coin107" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:17643px; top:71px;"
                    id="coin108" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:12817px; top:73px;"
                    id="coin109" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:12573px; top:85px;"
                    id="coin110" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:13683px; top:119px;"
                    id="coin111" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:11218px; top:115px;"
                    id="coin112" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:13697px; top:96px;"
                    id="coin113" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:11119px; top:104px;"
                    id="coin114" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:16717px; top:90px;"
                    id="coin115" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:15679px; top:108px;"
                    id="coin116" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:14188px; top:118px;"
                    id="coin117" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:16410px; top:81px;"
                    id="coin118" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:16334px; top:73px;"
                    id="coin119" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:11361px; top:114px;"
                    id="coin120" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:17744px; top:109px;"
                    id="coin121" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:13842px; top:107px;"
                    id="coin122" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:16739px; top:95px;"
                    id="coin123" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:16592px; top:117px;"
                    id="coin124" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:12879px; top:129px;"
                    id="coin125" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:12567px; top:99px;"
                    id="coin126" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:11884px; top:96px;"
                    id="coin127" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:15483px; top:97px;"
                    id="coin128" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:13179px; top:74px;"
                    id="coin129" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:14761px; top:130px;"
                    id="coin130" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:11834px; top:72px;"
                    id="coin131" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:12006px; top:116px;"
                    id="coin132" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:12881px; top:81px;"
                    id="coin133" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:15504px; top:105px;"
                    id="coin134" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:12249px; top:82px;"
                    id="coin135" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:11707px; top:105px;"
                    id="coin136" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:14738px; top:73px;"
                    id="coin137" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:12274px; top:124px;"
                    id="coin138" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:14965px; top:117px;"
                    id="coin139" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:12338px; top:98px;"
                    id="coin140" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:14282px; top:78px;"
                    id="coin141" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:15216px; top:123px;"
                    id="coin142" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:11659px; top:107px;"
                    id="coin143" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:16472px; top:87px;"
                    id="coin144" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:14684px; top:122px;"
                    id="coin145" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:16875px; top:93px;"
                    id="coin146" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:12997px; top:118px;"
                    id="coin147" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:13497px; top:99px;"
                    id="coin148" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:14302px; top:101px;"
                    id="coin149" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:14039px; top:119px;"
                    id="coin150" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:15560px; top:88px;"
                    id="coin151" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:15633px; top:120px;"
                    id="coin152" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:14075px; top:118px;"
                    id="coin153" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:13989px; top:127px;"
                    id="coin154" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:14110px; top:121px;"
                    id="coin155" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:17983px; top:111px;"
                    id="coin156" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:14558px; top:109px;"
                    id="coin157" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:15343px; top:86px;"
                    id="coin158" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:12425px; top:118px;"
                    id="coin159" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:13871px; top:88px;"
                    id="coin160" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:12626px; top:117px;"
                    id="coin161" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:14641px; top:125px;"
                    id="coin162" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:15459px; top:122px;"
                    id="coin163" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:11811px; top:76px;"
                    id="coin164" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:11573px; top:119px;"
                    id="coin165" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:17498px; top:117px;"
                    id="coin166" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:13225px; top:75px;"
                    id="coin167" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:15929px; top:104px;"
                    id="coin168" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:14749px; top:128px;"
                    id="coin169" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:16856px; top:101px;"
                    id="coin170" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:14922px; top:108px;"
                    id="coin171" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:13706px; top:70px;"
                    id="coin172" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:12163px; top:79px;"
                    id="coin173" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:16868px; top:130px;"
                    id="coin174" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:11680px; top:108px;"
                    id="coin175" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:12260px; top:123px;"
                    id="coin176" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:16059px; top:121px;"
                    id="coin177" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:16172px; top:102px;"
                    id="coin178" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:15747px; top:110px;"
                    id="coin179" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:12223px; top:128px;"
                    id="coin180" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:13118px; top:82px;"
                    id="coin181" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:16364px; top:88px;"
                    id="coin182" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:11639px; top:89px;"
                    id="coin183" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:14621px; top:80px;"
                    id="coin184" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:11577px; top:88px;"
                    id="coin185" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:12783px; top:77px;"
                    id="coin186" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:16871px; top:78px;"
                    id="coin187" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:16860px; top:126px;"
                    id="coin188" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:17958px; top:70px;"
                    id="coin189" />
                <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:17922px; top:82px;"
                    id="coin190" />



                <img src="images/flag.gif" id="flag" style="position:absolute; left:20000px; bottom: 100px;" />

            </div>
        </div>
    </div>
    <!--<img src="images/jump.png"  style="position:absolute; z-index:55555; right:11px;  bottom:12px;"  onclick="jumper();" />-->
    <div class="grasstree">
        <div style="position:relative;">
            <div class="grass"></div>
        </div>
    </div>
    <div class="grasstree">
        <div style="position:relative;">
            <div class="grass"></div>
        </div>
    </div>
    <div class="seenlayer">
        <div class="kutubminar"></div>
        <div class="palace"></div>
    </div>
    <div class="maintree">
        <div style="position:relative;">
            <div class="tree1"></div>


            <div class="tree1" style="left:1200px;"></div>
            <div class="tree1" style="left:1800px;"></div>
            <div class="tree1" style="left:2600px;"></div>
            <div class="tree1" style="left:2800px;"></div>
            <div class="tree1" style="left:7000px;"></div>
            <div class="tree2" style="left:1600px;"></div>
            <div class="tree2" style="left:3500px;"></div>
            <div class="tree2" style="left:4400px;"></div>
            <div class="tree2" style="left:520px;"></div>
            <div class="tree2" style="left:6800px;"></div>
            <div class="tree2" style="left:6900px;"></div>

        </div>
    </div>
    <div style="position:absolute; bottom:128px; left:201px; z-index:10000" id="box">
        <div style="position:relative;" id="div2">
            <span id="playerContainer">
                <img style="width: 80px; height: 120px;" src="images/game-player/0-idle/Idle__000.png"
                    id="player-idle" />
                <img style="display: none; width: 110px; height: 130px;" src="images/game-player/2-jump/Jump__000.png"
                    id="player-jump" />
                <img style="display: none; width: 110px; height: 130px;" src="images/game-player/3-run/Run__000.png"
                    id="player-run" />
                <img style="display: none; width: 110px; height: 130px;" src="images/game-player/1-dead/Dead__000.png"
                    id="player-die" />
            </span>
        </div>
    </div>
    </div>

    <!--Game Over Box-->
    <div style="width:100%; margin-top:10%; position:fixed; width:100%; left:0px; top:0px; z-index:99999999; display:none; "
        id="gameoverbox">
        <div
            style="width:500px; height: 250px;  margin:auto; background-color:#FFFF99; border:5px solid #CC0000; box-shadow:0px 0px 30px #000; border-radius:10px; padding:20px; text-align:center; ">
            <h1 class="style1">Game Over</h1>
            <div style="font-size:25px; font-weight:bold; margin-bottom:10px; margin-top:10px;">Total Score <span
                    id="showscor"></span></div>
            <div style="margin-top:10px; font-size:13px;">Retry</div>
            <form style="margin-top:20px;">
                <a href="level-1.php"
                    style="text-decoration: none; background-color:#CC3300; border-radius:10px; padding:10px; color:#FFFFFF; border:2px solid #000; font-size:18px; font-family:Verdana, Arial, Helvetica, sans-serif;">Start
                    Over</a>
            </form>
        </div>
    </div>

    <div id="scoreb"
        style=" padding:10px; background-color:#CC0000; color:#FFFFFF; font-size:25px; font-weight:bold; position:fixed; right:10px; top:10px; border:5px #FFFFFF; border-radius:50px;">
        Score : <span id="doughnuts">0</span></div>
    <!--Score Box-->

</body>

<script type="text/javascript" src="js/level-1/script-2.js"></script>
<script type="text/javascript" src="js/level-1/timer-ticker-script.js"></script>



</html>