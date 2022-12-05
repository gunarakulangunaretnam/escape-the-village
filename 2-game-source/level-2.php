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
    <script type="text/javascript" src="js/level-2/main.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/level-2/main.css" rel="stylesheet" type="text/css" />
    <link href="css/level-2/custom.css" rel="stylesheet" type="text/css" />
    <link href="css/level-2/timer-ticker-style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/level-2/script-1.js"></script>


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

            <div class="mudroadtexture" style="left:0px; width:40000px;"></div>


            <div style="position:absolute; z-index:111; left:18522px; bottom:100px;">
                <div style=" position:relative;">
                    <img src="images/level-2-assets/Objects/cactus-1.png" />
                    <div style="position:absolute; width:60px; left:20px; top:0px; height:100px;" id="enm1"></div>
                </div>
            </div>

            <div style="position:absolute; z-index:111; left:35103px; bottom:100px;">
                <div style=" position:relative;">
                    <img src="images/level-2-assets/Objects/cactus-1.png" />
                    <div style="position:absolute; width:60px; left:20px; top:0px; height:100px;" id="enm2"></div>
                </div>
            </div>

            <div style="position:absolute; z-index:111; left:20857px; bottom:100px;">
                <div style=" position:relative;">
                    <img src="images/level-2-assets/Objects/cactus-2.png" />
                    <div style="position:absolute; width:60px; left:20px; top:0px; height:100px;" id="enm3"></div>
                </div>
            </div>

            <div style="position:absolute; z-index:111; left:5564px; bottom:100px;">
                <div style=" position:relative;">
                    <img src="images/level-2-assets/Objects/cactus-1.png" />
                    <div style="position:absolute; width:60px; left:20px; top:0px; height:100px;" id="enm4"></div>
                </div>
            </div>

            <div style="position:absolute; z-index:111; left:12312px; bottom:100px;">
                <div style=" position:relative;">
                    <img src="images/level-2-assets/Objects/cactus-1.png" />
                    <div style="position:absolute; width:60px; left:20px; top:0px; height:100px;" id="enm5"></div>
                </div>
            </div>

            <div style="position:absolute; z-index:111; left:34582px; bottom:100px;">
                <div style=" position:relative;">
                    <img src="images/level-2-assets/Objects/cactus-2.png" />
                    <div style="position:absolute; width:60px; left:20px; top:0px; height:100px;" id="enm6"></div>
                </div>
            </div>

            <div style="position:absolute; z-index:111; left:12132px; bottom:100px;">
                <div style=" position:relative;">
                    <img src="images/level-2-assets/Objects/cactus-2.png" />
                    <div style="position:absolute; width:60px; left:20px; top:0px; height:100px;" id="enm7"></div>
                </div>
            </div>

            <div style="position:absolute; z-index:111; left:4007px; bottom:100px;">
                <div style=" position:relative;">
                    <img src="images/level-2-assets/Objects/cactus-2.png" />
                    <div style="position:absolute; width:60px; left:20px; top:0px; height:100px;" id="enm8"></div>
                </div>
            </div>

            <div style="position:absolute; z-index:111; left:8598px; bottom:100px;">
                <div style=" position:relative;">
                    <img src="images/level-2-assets/Objects/cactus-1.png" />
                    <div style="position:absolute; width:60px; left:20px; top:0px; height:100px;" id="enm9"></div>
                </div>
            </div>

            <div style="position:absolute; z-index:111; left:17858px; bottom:100px;">
                <div style=" position:relative;">
                    <img src="images/level-2-assets/Objects/cactus-2.png" />
                    <div style="position:absolute; width:60px; left:20px; top:0px; height:100px;" id="enm10"></div>
                </div>
            </div>

            <div style="position:absolute; z-index:111; left:8880px; bottom:100px;">
                <div style=" position:relative;">
                    <img src="images/level-2-assets/Objects/cactus-2.png" />
                    <div style="position:absolute; width:60px; left:20px; top:0px; height:100px;" id="enm11"></div>
                </div>
            </div>

            <div style="position:absolute; z-index:111; left:24992px; bottom:100px;">
                <div style=" position:relative;">
                    <img src="images/level-2-assets/Objects/cactus-1.png" />
                    <div style="position:absolute; width:60px; left:20px; top:0px; height:100px;" id="enm12"></div>
                </div>
            </div>

            <div style="position:absolute; z-index:111; left:34820px; bottom:100px;">
                <div style=" position:relative;">
                    <img src="images/level-2-assets/Objects/cactus-2.png" />
                    <div style="position:absolute; width:60px; left:20px; top:0px; height:100px;" id="enm13"></div>
                </div>
            </div>

            <div style="position:absolute; z-index:111; left:4298px; bottom:100px;">
                <div style=" position:relative;">
                    <img src="images/level-2-assets/Objects/cactus-1.png" />
                    <div style="position:absolute; width:60px; left:20px; top:0px; height:100px;" id="enm14"></div>
                </div>
            </div>

            <div style="position:absolute; z-index:111; left:36674px; bottom:100px;">
                <div style=" position:relative;">
                    <img src="images/level-2-assets/Objects/cactus-1.png" />
                    <div style="position:absolute; width:60px; left:20px; top:0px; height:100px;" id="enm15"></div>
                </div>
            </div>




            <div class="enmybox MovingObjects">

                <!-- Finsih line -->

                <!-- Birds Collections -->
                <div style="position:relative; width:100%; overflow:visible;">

                    <img src="images/level-2-assets/Objects/crow-gif.gif" class="MovingObjects"
                        style="position:absolute; left:2000px; bottom:149px;" id="skybirds-enm1" />
                    <img src="images/level-2-assets/Objects/crow-gif.gif" class="MovingObjects"
                        style="position:absolute; left:23533px; bottom:216px;" id="skybirds-enm2" />
                    <img src="images/level-2-assets/Objects/crow-gif.gif" class="MovingObjects"
                        style="position:absolute; left:4952px; bottom:233px;" id="skybirds-enm3" />
                    <img src="images/level-2-assets/Objects/crow-gif.gif" class="MovingObjects"
                        style="position:absolute; left:35821px; bottom:147px;" id="skybirds-enm4" />
                    <img src="images/level-2-assets/Objects/crow-gif.gif" class="MovingObjects"
                        style="position:absolute; left:35798px; bottom:84px;" id="skybirds-enm5" />
                    <img src="images/level-2-assets/Objects/crow-gif.gif" class="MovingObjects"
                        style="position:absolute; left:16899px; bottom:102px;" id="skybirds-enm6" />
                    <img src="images/level-2-assets/Objects/crow-gif.gif" class="MovingObjects"
                        style="position:absolute; left:16861px; bottom:162px;" id="skybirds-enm7" />
                    <img src="images/level-2-assets/Objects/crow-gif.gif" class="MovingObjects"
                        style="position:absolute; left:20089px; bottom:169px;" id="skybirds-enm8" />
                    <img src="images/level-2-assets/Objects/crow-gif.gif" class="MovingObjects"
                        style="position:absolute; left:11860px; bottom:291px;" id="skybirds-enm9" />
                    <img src="images/level-2-assets/Objects/crow-gif.gif" class="MovingObjects"
                        style="position:absolute; left:6361px; bottom:64px;" id="skybirds-enm10" />
                    <img src="images/level-2-assets/Objects/crow-gif.gif" class="MovingObjects"
                        style="position:absolute; left:18057px; bottom:74px;" id="skybirds-enm11" />
                    <img src="images/level-2-assets/Objects/crow-gif.gif" class="MovingObjects"
                        style="position:absolute; left:22638px; bottom:172px;" id="skybirds-enm12" />
                    <img src="images/level-2-assets/Objects/crow-gif.gif" class="MovingObjects"
                        style="position:absolute; left:25503px; bottom:138px;" id="skybirds-enm13" />
                    <img src="images/level-2-assets/Objects/crow-gif.gif" class="MovingObjects"
                        style="position:absolute; left:27213px; bottom:122px;" id="skybirds-enm14" />
                    <img src="images/level-2-assets/Objects/crow-gif.gif" class="MovingObjects"
                        style="position:absolute; left:35887px; bottom:225px;" id="skybirds-enm15" />
                    <img src="images/level-2-assets/Objects/crow-gif.gif" class="MovingObjects"
                        style="position:absolute; left:9332px; bottom:223px;" id="skybirds-enm16" />
                    <img src="images/level-2-assets/Objects/crow-gif.gif" class="MovingObjects"
                        style="position:absolute; left:21792px; bottom:149px;" id="skybirds-enm17" />
                    <img src="images/level-2-assets/Objects/crow-gif.gif" class="MovingObjects"
                        style="position:absolute; left:6526px; bottom:287px;" id="skybirds-enm18" />
                    <img src="images/level-2-assets/Objects/crow-gif.gif" class="MovingObjects"
                        style="position:absolute; left:12616px; bottom:91px;" id="skybirds-enm19" />
                    <img src="images/level-2-assets/Objects/crow-gif.gif" class="MovingObjects"
                        style="position:absolute; left:12352px; bottom:248px;" id="skybirds-enm20" />


                </div>
            </div>
            <div class="score-objects">
                <!-- Coins Collections -->

                <img src="images/doors/1.png" style="position:absolute; left:2000px; top:-175px; height: 480px;"
                    id="door1" />
                <img src="images/doors/1.png" style="position:absolute; left:4500px; top:-175px; height: 480px;"
                    id="door2" />
                <img src="images/doors/1.png" style="position:absolute; left:6000px; top:-175px; height: 480px;"
                    id="door3" />
                <img src="images/doors/1.png" style="position:absolute; left:8000px; top:-175px; height: 480px;"
                    id="door4" />
                <img src="images/doors/1.png" style="position:absolute; left:10000px; top:-175px; height: 480px;"
                    id="door5" />
                <img src="images/doors/1.png" style="position:absolute; left:12600px; top:-175px; height: 480px;"
                    id="door6" />
                <img src="images/doors/1.png" style="position:absolute; left:14000px; top:-175px; height: 480px;"
                    id="door7" />
                <img src="images/doors/1.png" style="position:absolute; left:16000px; top:-175px; height: 480px;"
                    id="door8" />
                <img src="images/doors/1.png" style="position:absolute; left:18120px; top:-175px; height: 480px;"
                    id="door9" />
                <img src="images/doors/1.png" style="position:absolute; left:20000px; top:-175px; height: 480px;"
                    id="door10" />
                <img src="images/doors/1.png" style="position:absolute; left:22000px; top:-175px; height: 480px;"
                    id="door11" />
                <img src="images/doors/1.png" style="position:absolute; left:24000px; top:-175px; height: 480px;"
                    id="door12" />
                <img src="images/doors/1.png" style="position:absolute; left:26000px; top:-175px; height: 480px;"
                    id="door13" />
                <img src="images/doors/1.png" style="position:absolute; left:28000px; top:-175px; height: 480px;"
                    id="door14" />
                <img src="images/doors/1.png" style="position:absolute; left:30000px; top:-175px; height: 480px;"
                    id="door15" />
                <img src="images/doors/1.png" style="position:absolute; left:32000px; top:-175px; height: 480px;"
                    id="door16" />
                <img src="images/doors/1.png" style="position:absolute; left:34000px; top:-175px; height: 480px;"
                    id="door17" />
                <img src="images/doors/1.png" style="position:absolute; left:36000px; top:-175px; height: 480px;"
                    id="door18" />

                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:30352px; top:-83.76396763382058px;" id="coin1" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:32368px; top:-50.02162696855551px;" id="coin2" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:33361px; top:11.283349470783094px;" id="coin3" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:8537px; top:-49.30419609869134px;" id="coin4" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:28760px; top:-97.50145540470817px;" id="coin5" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:23912px; top:-59.14696827239274px;" id="coin6" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:18683px; top:-5.566804458370882px;" id="coin7" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:6743px; top:33.085580487115976px;" id="coin8" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:29774px; top:-3.2552149343127184px;" id="coin9" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:11527px; top:-95.39898904995204px;" id="coin10" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:22208px; top:30.231604450577834px;" id="coin11" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:7707px; top:-17.988793051051076px;" id="coin12" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:21485px; top:-27.281884542743754px;" id="coin13" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:12357px; top:23.260877143716968px;" id="coin14" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:24872px; top:1.9749671285197792px;" id="coin15" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:21034px; top:5.545616427337961px;" id="coin16" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:10902px; top:10.217726510741386px;" id="coin17" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:12139px; top:-25.79230652587927px;" id="coin18" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:33742px; top:33.543244462938475px;" id="coin19" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:12304px; top:-90.47873947519295px;" id="coin20" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:25126px; top:-19.620398541875275px;" id="coin21" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:31266px; top:-24.34499992712962px;" id="coin22" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:25453px; top:-0.15119927769841013px;" id="coin23" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:13692px; top:-30.18989137699279px;" id="coin24" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:10605px; top:-45.84614557663095px;" id="coin25" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:23702px; top:-74.93927625770208px;" id="coin26" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:4659px; top:21.73818673500044px;" id="coin27" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:21094px; top:38.07256860537208px;" id="coin28" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:13656px; top:15.10806118021074px;" id="coin29" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:35307px; top:-73.55691913289613px;" id="coin30" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:19770px; top:-45.0225314129964px;" id="coin31" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:37415px; top:12.367934463350167px;" id="coin32" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:27105px; top:-89.47311635655853px;" id="coin33" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:23116px; top:-72.04749637274107px;" id="coin34" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:15513px; top:-0.6260148547074493px;" id="coin35" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:28443px; top:2.130904369282419px;" id="coin36" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:14212px; top:9.177317155631755px;" id="coin37" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:19730px; top:-36.301437398779996px;" id="coin38" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:17991px; top:-27.809593162440066px;" id="coin39" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:6235px; top:3.0246190074210233px;" id="coin40" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:16119px; top:-38.447403282255344px;" id="coin41" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:12740px; top:-32.5806479486435px;" id="coin42" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:29717px; top:-7.410719448782302px;" id="coin43" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:24523px; top:21.047808505982246px;" id="coin44" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:18742px; top:-43.89002359027966px;" id="coin45" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:8309px; top:-71.91198045490191px;" id="coin46" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:13408px; top:39.824476684293245px;" id="coin47" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:17738px; top:-35.048720676138245px;" id="coin48" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:3677px; top:-13.39889667074793px;" id="coin49" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:17809px; top:-57.181831747871065px;" id="coin50" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:24948px; top:-24.97771354453107px;" id="coin51" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:4075px; top:-59.54650606497618px;" id="coin52" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:17767px; top:-8.812635642555804px;" id="coin53" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:35329px; top:-14.088580315742348px;" id="coin54" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:31165px; top:-25.08802579002976px;" id="coin55" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:18676px; top:36.060893290985234px;" id="coin56" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:8886px; top:-49.46845692739007px;" id="coin57" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:6998px; top:-45.07054440001002px;" id="coin58" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:3088px; top:3.765164086569456px;" id="coin59" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:16276px; top:-46.3255213114631px;" id="coin60" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:14557px; top:-92.97224861749052px;" id="coin61" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:29574px; top:-25.076398127566804px;" id="coin62" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:8628px; top:-28.932821453359466px;" id="coin63" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:18252px; top:-92.90798400194015px;" id="coin64" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:6391px; top:28.840790892802147px;" id="coin65" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:27424px; top:-79.72830787872266px;" id="coin66" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:21926px; top:-7.769685943169009px;" id="coin67" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:14823px; top:-37.39972192618758px;" id="coin68" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:27207px; top:-81.85484933872749px;" id="coin69" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:33103px; top:-99.2887650109021px;" id="coin70" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:32936px; top:-87.78882576232152px;" id="coin71" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:19288px; top:39.69498912526595px;" id="coin72" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:13499px; top:-77.52430236061804px;" id="coin73" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:13652px; top:5.036416882567906px;" id="coin74" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:2370px; top:-97.86730107744536px;" id="coin75" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:27363px; top:19.700575801643282px;" id="coin76" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:19127px; top:-84.96777252620463px;" id="coin77" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:37867px; top:-32.91817963420243px;" id="coin78" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:27599px; top:-55.555830374438315px;" id="coin79" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:17008px; top:-69.4565047980119px;" id="coin80" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:32285px; top:-53.99985295660158px;" id="coin81" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:18622px; top:15.790748199849133px;" id="coin82" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:37945px; top:-47.403273324247856px;" id="coin83" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:17625px; top:-87.89798339570397px;" id="coin84" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:11689px; top:16.660100496415495px;" id="coin85" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:18958px; top:1.0951578986786927px;" id="coin86" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:23662px; top:-16.52507036269344px;" id="coin87" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:8355px; top:-76.38480271538592px;" id="coin88" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:5135px; top:-4.6525053649225185px;" id="coin89" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:8879px; top:14.3006372436206px;" id="coin90" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:23777px; top:-34.82765312187311px;" id="coin91" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:23371px; top:-78.12835048720925px;" id="coin92" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:16323px; top:3.3380612740371447px;" id="coin93" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:10840px; top:-65.61611279105045px;" id="coin94" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:18838px; top:-55.35953925962464px;" id="coin95" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:3996px; top:-7.837563635250774px;" id="coin96" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:15330px; top:-84.77982980652706px;" id="coin97" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:13683px; top:2.0394819725601394px;" id="coin98" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:4313px; top:-4.440728105406848px;" id="coin99" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:6418px; top:-7.72886235269992px;" id="coin100" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:32154px; top:31.13499440461976px;" id="coin101" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:37971px; top:-32.83960758830594px;" id="coin102" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:3194px; top:-52.57681330689137px;" id="coin103" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:29125px; top:-17.015578727200023px;" id="coin104" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:33118px; top:-61.70364726349848px;" id="coin105" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:9322px; top:-86.30968962492096px;" id="coin106" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:22618px; top:-77.45367550997267px;" id="coin107" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:34378px; top:-65.96745053502312px;" id="coin108" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:22829px; top:-91.08218773188558px;" id="coin109" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:28862px; top:38.697968508006284px;" id="coin110" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:34466px; top:7.9298053105819974px;" id="coin111" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:10074px; top:-0.6083474545074523px;" id="coin112" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:10701px; top:-39.523525359656745px;" id="coin113" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:13572px; top:6.816009534768369px;" id="coin114" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:5423px; top:6.341385737608917px;" id="coin115" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:30523px; top:-29.828098768198544px;" id="coin116" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:18186px; top:-57.34591729378336px;" id="coin117" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:2113px; top:-35.193289260917936px;" id="coin118" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:36429px; top:-95.15717853355117px;" id="coin119" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:22166px; top:28.83784081971754px;" id="coin120" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:11244px; top:-88.06525114697193px;" id="coin121" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:26893px; top:34.21983046526907px;" id="coin122" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:19347px; top:9.796841517249177px;" id="coin123" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:29811px; top:-57.262667036093774px;" id="coin124" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:14965px; top:-60.25789680919242px;" id="coin125" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:4291px; top:-85.88542221861789px;" id="coin126" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:6154px; top:-45.288827009591955px;" id="coin127" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:8963px; top:3.3869231177854004px;" id="coin128" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:21395px; top:-52.207161755024224px;" id="coin129" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:12315px; top:9.135408679357027px;" id="coin130" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:8637px; top:-87.1524877635593px;" id="coin131" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:16259px; top:-47.46131491627577px;" id="coin132" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:30104px; top:-29.61891475197035px;" id="coin133" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:15337px; top:4.167697052989908px;" id="coin134" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:25416px; top:-26.794189795503044px;" id="coin135" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:22343px; top:-28.84431175065238px;" id="coin136" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:32583px; top:-82.01858779129473px;" id="coin137" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:31499px; top:-95.50671266404115px;" id="coin138" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:4429px; top:-13.737397665606764px;" id="coin139" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:11569px; top:6.783826537630588px;" id="coin140" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:10053px; top:-91.46307369949972px;" id="coin141" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:19656px; top:-28.686681133278043px;" id="coin142" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:23056px; top:8.401849137071892px;" id="coin143" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:24249px; top:18.636541851427353px;" id="coin144" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:18595px; top:36.397471839507006px;" id="coin145" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:9882px; top:-6.3865848840179495px;" id="coin146" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:28339px; top:-83.77741194823821px;" id="coin147" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:10366px; top:1.5284517764880974px;" id="coin148" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:36853px; top:0.4780128887584709px;" id="coin149" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:26850px; top:-92.69364053350427px;" id="coin150" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:24771px; top:13.638783562297633px;" id="coin151" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:25247px; top:-54.429255812200225px;" id="coin152" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:16273px; top:-71.35237861402132px;" id="coin153" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:36691px; top:-16.769099921525935px;" id="coin154" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:7670px; top:-51.28574109101271px;" id="coin155" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:12175px; top:12.99388635354984px;" id="coin156" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:15486px; top:-96.33775486552857px;" id="coin157" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:18196px; top:-86.82213805228365px;" id="coin158" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:10354px; top:-14.597835383126267px;" id="coin159" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:31941px; top:-78.76088707853843px;" id="coin160" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:35301px; top:-44.274970094225864px;" id="coin161" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:13192px; top:-18.248449525146953px;" id="coin162" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:35821px; top:-36.295014200901804px;" id="coin163" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:37990px; top:-20.356526115095207px;" id="coin164" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:7438px; top:-80.82500267533167px;" id="coin165" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:18745px; top:-44.70199721421119px;" id="coin166" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:3424px; top:35.974939197306185px;" id="coin167" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:22970px; top:-80.99070585096038px;" id="coin168" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:2809px; top:-63.22869850740989px;" id="coin169" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:15104px; top:-51.127036674512325px;" id="coin170" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:23308px; top:15.489922031844344px;" id="coin171" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:23450px; top:-97.60504061970745px;" id="coin172" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:21684px; top:-41.20943452591527px;" id="coin173" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:10607px; top:-84.28412735662442px;" id="coin174" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:5808px; top:20.478027586472592px;" id="coin175" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:24007px; top:-11.974288079296016px;" id="coin176" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:30154px; top:-93.5876830133756px;" id="coin177" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:27465px; top:-64.68864061895937px;" id="coin178" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:27826px; top:-13.74166656351602px;" id="coin179" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:30475px; top:16.341591690414702px;" id="coin180" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:13555px; top:-7.6050848955139685px;" id="coin181" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:36970px; top:-28.254031580827558px;" id="coin182" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:2621px; top:-14.841864458568338px;" id="coin183" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:15988px; top:-29.513282607874558px;" id="coin184" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:9477px; top:26.704584958138142px;" id="coin185" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:2895px; top:-27.197840253024268px;" id="coin186" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:20154px; top:-77.40187514659101px;" id="coin187" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:13802px; top:-82.1214312087992px;" id="coin188" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:26436px; top:-41.004201210998936px;" id="coin189" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:15133px; top:-59.62811981491176px;" id="coin190" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:24361px; top:-76.69056080868269px;" id="coin191" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:26433px; top:-27.548659626918166px;" id="coin192" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:19567px; top:-14.327398243586472px;" id="coin193" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:30946px; top:-43.359251775853956px;" id="coin194" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:32355px; top:-68.93524772168035px;" id="coin195" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:2714px; top:-63.61318450934621px;" id="coin196" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:29493px; top:34.834810204683606px;" id="coin197" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:19430px; top:-99.6930078910279px;" id="coin198" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:26351px; top:12.503689836900506px;" id="coin199" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:3815px; top:-95.54788809127287px;" id="coin200" />


                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:24704px; top:-54.5808166128942px;" id="diamond1" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:3672px; top:-41.4026475402756px;"
                    id="diamond2" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:11518px; top:-35.69319765063062px;" id="diamond3" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:27068px; top:-62.735215463651926px;" id="diamond4" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:12920px; top:-25.535448542200626px;" id="diamond5" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:37468px; top:-64.39426691546842px;" id="diamond6" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:18589px; top:-88.66533763732139px;" id="diamond7" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:3645px; top:9.60850994981783px;"
                    id="diamond8" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:24283px; top:32.59795301457723px;" id="diamond9" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:21095px; top:-14.57709546737172px;" id="diamond10" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:31247px; top:-26.04557559970226px;" id="diamond11" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:28990px; top:-74.65287573500211px;" id="diamond12" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:36022px; top:-97.30039733835558px;" id="diamond13" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:31144px; top:-26.175183646116253px;" id="diamond14" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:32837px; top:-63.08761904373256px;" id="diamond15" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:23674px; top:10.69889600186913px;" id="diamond16" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:28293px; top:-2.215955047792619px;" id="diamond17" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:37447px; top:-85.96539918986848px;" id="diamond18" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:10085px; top:-7.2888859911016795px;" id="diamond19" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:7177px; top:-77.57743695985926px;" id="diamond20" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:26517px; top:-79.05252702888424px;" id="diamond21" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:32881px; top:-56.11788115253799px;" id="diamond22" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:2821px; top:-75.36814915878439px;" id="diamond23" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:4016px; top:-21.519877052701403px;" id="diamond24" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:29120px; top:-79.73721269569926px;" id="diamond25" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:21112px; top:2.34616277129318px;"
                    id="diamond26" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:29830px; top:-72.29031123648862px;" id="diamond27" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:12389px; top:-37.31726766504276px;" id="diamond28" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:7930px; top:-87.22542658341942px;" id="diamond29" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:13114px; top:-99.58370913850301px;" id="diamond30" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:17702px; top:-95.32543467813737px;" id="diamond31" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:28678px; top:-31.08447951340858px;" id="diamond32" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:30268px; top:-42.13539312506876px;" id="diamond33" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:30498px; top:5.856976234397095px;" id="diamond34" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:8954px; top:-77.96714231860531px;" id="diamond35" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:30843px; top:-32.09441857730195px;" id="diamond36" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:7630px; top:-50.535442317320474px;" id="diamond37" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:34409px; top:16.011590727670807px;" id="diamond38" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:26739px; top:-1.020743615225527px;" id="diamond39" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:37420px; top:-78.09899039390523px;" id="diamond40" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:9992px; top:24.04249055672919px;"
                    id="diamond41" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:22084px; top:-94.04441978092386px;" id="diamond42" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:11102px; top:-62.43317976814056px;" id="diamond43" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:33304px; top:-68.32920706918648px;" id="diamond44" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:35580px; top:-76.43952677372594px;" id="diamond45" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:6103px; top:-92.97875947447477px;" id="diamond46" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:35854px; top:-37.421295604354526px;" id="diamond47" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:17082px; top:-83.49915247234132px;" id="diamond48" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:22214px; top:-21.234557027737452px;" id="diamond49" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:25431px; top:-70.69901472592052px;" id="diamond50" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:11135px; top:-75.80455290599657px;" id="diamond51" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:34155px; top:-93.97643095654374px;" id="diamond52" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:32851px; top:-88.72629756356491px;" id="diamond53" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:14685px; top:-42.46027772056395px;" id="diamond54" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:2476px; top:-69.18849858124767px;" id="diamond55" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:16086px; top:-79.75631873563493px;" id="diamond56" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:7853px; top:-32.90565589833214px;" id="diamond57" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:37642px; top:-9.694054032918132px;" id="diamond58" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:27959px; top:35.289855755633255px;" id="diamond59" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:12852px; top:-69.62948725496729px;" id="diamond60" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:10383px; top:2.042052065550891px;" id="diamond61" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:29684px; top:-75.12394470757019px;" id="diamond62" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:22439px; top:7.261266961815991px;" id="diamond63" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:25023px; top:-78.21626266177938px;" id="diamond64" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:21982px; top:-52.8066863801851px;" id="diamond65" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:12069px; top:-46.94567601886667px;" id="diamond66" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:12121px; top:-20.947135891276588px;" id="diamond67" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:4936px; top:-26.903982702008406px;" id="diamond68" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:32085px; top:-40.10239350275651px;" id="diamond69" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:37879px; top:26.372699407805854px;" id="diamond70" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:3452px; top:8.239042215386746px;"
                    id="diamond71" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:21897px; top:26.543780072981818px;" id="diamond72" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:25099px; top:26.334226435195802px;" id="diamond73" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:29968px; top:-44.435231981622884px;" id="diamond74" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:32801px; top:-58.001542338023455px;" id="diamond75" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:32716px; top:-17.96229921715839px;" id="diamond76" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:27333px; top:-44.723783613364965px;" id="diamond77" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:11326px; top:19.19582068693792px;" id="diamond78" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:2566px; top:-47.653049434768484px;" id="diamond79" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:33113px; top:34.445447402458115px;" id="diamond80" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:6773px; top:-56.83996691490417px;" id="diamond81" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:37326px; top:-15.028435920741714px;" id="diamond82" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:5222px; top:-94.87829382295278px;" id="diamond83" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:6512px; top:-99.55810031331576px;" id="diamond84" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:28959px; top:-1.5489312017639634px;" id="diamond85" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:26846px; top:-53.59023107219024px;" id="diamond86" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:13089px; top:-83.2781473407207px;" id="diamond87" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:21954px; top:-30.914578935644457px;" id="diamond88" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:5536px; top:6.0471114505972px;"
                    id="diamond89" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:21444px; top:-49.55178439937934px;" id="diamond90" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:15944px; top:-60.39043681109554px;" id="diamond91" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:8709px; top:2.7283420320270295px;" id="diamond92" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:27609px; top:22.20440308256191px;" id="diamond93" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:17910px; top:-55.04648812298387px;" id="diamond94" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:20458px; top:-96.14737215966628px;" id="diamond95" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:25264px; top:24.978502745837403px;" id="diamond96" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:27887px; top:11.567622286651627px;" id="diamond97" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:26906px; top:-45.58394680164094px;" id="diamond98" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:34845px; top:-89.45724707203146px;" id="diamond99" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:5167px; top:-95.64970128920434px;" id="diamond100" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:35638px; top:-59.75377972943871px;" id="diamond101" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:6076px; top:-12.74088787940029px;" id="diamond102" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:13142px; top:-98.10389738432558px;" id="diamond103" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:8032px; top:-3.1373493644186823px;" id="diamond104" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:14843px; top:-45.598325514606515px;" id="diamond105" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:20969px; top:-83.60035400676178px;" id="diamond106" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:2649px; top:-77.28476622612581px;" id="diamond107" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:37181px; top:-38.99565763286604px;" id="diamond108" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:7952px; top:-0.822507949420654px;" id="diamond109" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:8553px; top:2.4533172737498035px;" id="diamond110" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:32945px; top:-14.504341098934788px;" id="diamond111" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:20453px; top:15.502364013448556px;" id="diamond112" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:26966px; top:26.873412634590153px;" id="diamond113" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:8910px; top:-14.039302536394388px;" id="diamond114" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:37582px; top:-41.07890772258945px;" id="diamond115" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:19456px; top:-29.370742311786955px;" id="diamond116" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:8027px; top:-41.75368217808527px;" id="diamond117" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:34067px; top:-36.945556224726396px;" id="diamond118" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:15147px; top:-66.49784224572312px;" id="diamond119" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:25857px; top:-65.57061995783036px;" id="diamond120" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:5955px; top:30.126623450037044px;" id="diamond121" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:2745px; top:-6.365509873243596px;" id="diamond122" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:19058px; top:35.96719440944858px;" id="diamond123" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:9512px; top:-85.33792538197966px;" id="diamond124" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:37729px; top:23.12140950659557px;" id="diamond125" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:30992px; top:14.643363201525247px;" id="diamond126" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:12240px; top:-16.83271984757674px;" id="diamond127" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:29097px; top:17.659649367678895px;" id="diamond128" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:15955px; top:-91.3924839445003px;" id="diamond129" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:8554px; top:5.844506215776562px;"
                    id="diamond130" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:2930px; top:-89.15089876707603px;" id="diamond131" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:31091px; top:-15.974615738612428px;" id="diamond132" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:25686px; top:36.82995726355654px;" id="diamond133" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:27726px; top:-48.85372579257459px;" id="diamond134" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:25068px; top:-73.91321000345592px;" id="diamond135" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:28256px; top:-86.95777939606712px;" id="diamond136" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:26495px; top:-41.18195677834278px;" id="diamond137" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:6832px; top:39.12525297705113px;"
                    id="diamond138" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:17807px; top:-52.74240221045254px;" id="diamond139" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:19657px; top:-36.10615831230416px;" id="diamond140" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:36160px; top:-95.0553569563311px;" id="diamond141" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:7504px; top:-53.684851441081484px;" id="diamond142" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:8505px; top:-41.13980061278465px;" id="diamond143" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:33809px; top:12.205169537567372px;" id="diamond144" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:35754px; top:-86.09307234905894px;" id="diamond145" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:36627px; top:11.255288478877702px;" id="diamond146" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:6674px; top:-11.65085084867249px;" id="diamond147" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:2968px; top:15.374771894766809px;" id="diamond148" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:10842px; top:-87.97154828579515px;" id="diamond149" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:19385px; top:5.232953202666451px;" id="diamond150" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:3768px; top:-98.86324956006128px;" id="diamond151" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:34901px; top:-39.75697296198207px;" id="diamond152" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:37694px; top:-51.974244021335224px;" id="diamond153" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:4119px; top:26.85757635850078px;"
                    id="diamond154" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:37490px; top:-71.56599297882174px;" id="diamond155" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:34389px; top:-67.26490601768398px;" id="diamond156" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:6212px; top:-34.4902684883311px;"
                    id="diamond157" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:7079px; top:-32.195527338805576px;" id="diamond158" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:2132px; top:-50.75301357826424px;" id="diamond159" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:13422px; top:-75.85012559911797px;" id="diamond160" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:35308px; top:35.609422054044956px;" id="diamond161" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:23016px; top:-58.793822217093016px;" id="diamond162" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:5001px; top:-24.979299627271047px;" id="diamond163" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:7440px; top:28.963211827362386px;" id="diamond164" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:21015px; top:-57.5095446505736px;" id="diamond165" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:24561px; top:15.1768272811901px;"
                    id="diamond166" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:20266px; top:-11.570668220806752px;" id="diamond167" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:14705px; top:27.894682092894257px;" id="diamond168" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:13271px; top:-81.83350109828042px;" id="diamond169" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:37925px; top:-74.31619480454786px;" id="diamond170" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:31466px; top:-93.56334266891359px;" id="diamond171" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:7044px; top:10.769445219433635px;" id="diamond172" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:5622px; top:30.171888483540954px;" id="diamond173" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:28033px; top:17.27076186469081px;" id="diamond174" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:19451px; top:-29.94213052397059px;" id="diamond175" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:17782px; top:-41.8833400237248px;" id="diamond176" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:37933px; top:27.20240011482295px;" id="diamond177" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:25834px; top:37.74482262587435px;" id="diamond178" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:34979px; top:-61.34705567216913px;" id="diamond179" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:12913px; top:-50.93958102984427px;" id="diamond180" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:22910px; top:-43.53108122295093px;" id="diamond181" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:36164px; top:-2.5924365457042313px;" id="diamond182" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:32204px; top:-29.4454603759189px;" id="diamond183" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:34332px; top:-40.14505014615109px;" id="diamond184" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:31374px; top:39.239356895373106px;" id="diamond185" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:9724px; top:-30.534711384919305px;" id="diamond186" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:2343px; top:-71.45410659740608px;" id="diamond187" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:27680px; top:-49.760278365659346px;" id="diamond188" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:35249px; top:-91.78823352538883px;" id="diamond189" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:35462px; top:35.56870011247216px;" id="diamond190" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:21712px; top:-53.984488208581936px;" id="diamond191" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:33475px; top:26.64392128253273px;" id="diamond192" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:19331px; top:21.944918784420153px;" id="diamond193" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:27952px; top:-28.254915919687306px;" id="diamond194" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:22057px; top:-66.74944589552061px;" id="diamond195" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:34034px; top:24.441984477608102px;" id="diamond196" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:25839px; top:3.7572283734947405px;" id="diamond197" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:37861px; top:13.13263033894674px;" id="diamond198" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:11060px; top:19.412127841384432px;" id="diamond199" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:37419px; top:-80.22818643274053px;" id="diamond200" />



                <img src="images/flag.gif" id="flag" style="position:absolute; left:37000px; bottom: 100px;" />

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
        <div class="kutubminar2"></div>
        <div class="palace2"></div>
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




            <div class="tree1" style="left:800px;"></div>
            <div class="tree1" style="left:1450px;"></div>
            <div class="tree1" style="left:2400px;"></div>
            <div class="tree1" style="left:2700px;"></div>
            <div class="tree1" style="left:3200px;"></div>
            <div class="tree2" style="left:1800px;"></div>
            <div class="tree2" style="left:3300px;"></div>
            <div class="tree2" style="left:6400px;"></div>
            <div class="tree2" style="left:520px;"></div>
            <div class="tree2" style="left:6300px;"></div>
            <div class="tree2" style="left:6700px;"></div>


            <div class="tree3" style="left:1600px;"></div>
            <div class="tree3" style="left:3500px;"></div>
            <div class="tree3" style="left:4400px;"></div>
            <div class="tree3" style="left:520px;"></div>
            <div class="tree3" style="left:6800px;"></div>
            <div class="tree3" style="left:6900px;"></div>

            <div class="tree3" style="left:7600px;"></div>
            <div class="tree3" style="left:8600px;"></div>
            <div class="tree3" style="left:9600px;"></div>
            <div class="tree3" style="left:10600px;"></div>
            <div class="tree3" style="left:11600px;"></div>
            <div class="tree3" style="left:12600px;"></div>

            <div class="stone1" style="left:1500px;"></div>
            <div class="stone1" style="left:3300px;"></div>
            <div class="stone1" style="left:4000px;"></div>
            <div class="stone1" style="left:420px;"></div>
            <div class="stone1" style="left:6800px;"></div>
            <div class="stone1" style="left:6900px;"></div>


            <div class="stone1" style="left:7900px;"></div>
            <div class="stone1" style="left:8900px;"></div>
            <div class="stone1" style="left:9900px;"></div>
            <div class="stone1" style="left:74900px;"></div>
            <div class="stone1" style="left:65600px;"></div>
            <div class="stone1" style="left:10100px;"></div>


            <div class="right-arrow" style="left:2500px;"></div>
            <div class="right-arrow" style="left:4300px;"></div>


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
                <a href="level-2.php"
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

<script type="text/javascript" src="js/level-2/script-2.js"></script>
<script type="text/javascript" src="js/level-2/timer-ticker-script.js"></script>



</html>