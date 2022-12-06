<?php

session_start();

if (!isset($_SESSION['SESSION_EXISTS']))
{
    header("Location: ../1-landing-page-source/index.php");
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
    <script type="text/javascript" src="js/level-5/main.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/level-5/main.css" rel="stylesheet" type="text/css" />
    <link href="css/level-5/custom.css" rel="stylesheet" type="text/css" />
    <link href="css/level-5/timer-ticker-style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/level-5/script-1.js"></script>


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
            <div style="position:absolute; z-index:111; left:25034px; bottom:90px;">
                <div style=" position:relative;">
                    <img style="width: 160px; height: 160px;" src="images/level-5-assets/Objects/enemy.gif" />
                    <div style="position:absolute; width:60px; left:20px; top:0px; height:100px;" id="enm1"></div>
                </div>
            </div>

            <div style="position:absolute; z-index:111; left:22922px; bottom:90px;">
                <div style=" position:relative;">
                    <img style="width: 160px; height: 160px;" src="images/level-5-assets/Objects/enemy.gif" />
                    <div style="position:absolute; width:60px; left:20px; top:0px; height:100px;" id="enm2"></div>
                </div>
            </div>

            <div style="position:absolute; z-index:111; left:18283px; bottom:90px;">
                <div style=" position:relative;">
                    <img style="width: 160px; height: 160px;" src="images/level-5-assets/Objects/enemy.gif" />
                    <div style="position:absolute; width:60px; left:20px; top:0px; height:100px;" id="enm3"></div>
                </div>
            </div>

            <div style="position:absolute; z-index:111; left:17300px; bottom:90px;">
                <div style=" position:relative;">
                    <img style="width: 160px; height: 160px;" src="images/level-5-assets/Objects/enemy.gif" />
                    <div style="position:absolute; width:60px; left:20px; top:0px; height:100px;" id="enm4"></div>
                </div>
            </div>

            <div style="position:absolute; z-index:111; left:27764px; bottom:90px;">
                <div style=" position:relative;">
                    <img style="width: 160px; height: 160px;" src="images/level-5-assets/Objects/enemy.gif" />
                    <div style="position:absolute; width:60px; left:20px; top:0px; height:100px;" id="enm5"></div>
                </div>
            </div>

            <div style="position:absolute; z-index:111; left:8488px; bottom:90px;">
                <div style=" position:relative;">
                    <img style="width: 160px; height: 160px;" src="images/level-5-assets/Objects/enemy.gif" />
                    <div style="position:absolute; width:60px; left:20px; top:0px; height:100px;" id="enm6"></div>
                </div>
            </div>

            <div style="position:absolute; z-index:111; left:26973px; bottom:90px;">
                <div style=" position:relative;">
                    <img style="width: 160px; height: 160px;" src="images/level-5-assets/Objects/enemy.gif" />
                    <div style="position:absolute; width:60px; left:20px; top:0px; height:100px;" id="enm7"></div>
                </div>
            </div>

            <div style="position:absolute; z-index:111; left:2854px; bottom:90px;">
                <div style=" position:relative;">
                    <img style="width: 160px; height: 160px;" src="images/level-5-assets/Objects/enemy.gif" />
                    <div style="position:absolute; width:60px; left:20px; top:0px; height:100px;" id="enm8"></div>
                </div>
            </div>

            <div style="position:absolute; z-index:111; left:12000px; bottom:90px;">
                <div style=" position:relative;">
                    <img style="width: 160px; height: 160px;" src="images/level-5-assets/Objects/enemy.gif" />
                    <div style="position:absolute; width:60px; left:20px; top:0px; height:100px;" id="enm9"></div>
                </div>
            </div>

            <div style="position:absolute; z-index:111; left:256734px; bottom:90px;">
                <div style=" position:relative;">
                    <img style="width: 160px; height: 160px;" src="images/level-5-assets/Objects/enemy.gif" />
                    <div style="position:absolute; width:60px; left:20px; top:0px; height:100px;" id="enm10"></div>
                </div>
            </div>

            <div style="position:absolute; z-index:111; left:19122px; bottom:90px;">
                <div style=" position:relative;">
                    <img style="width: 160px; height: 160px;" src="images/level-5-assets/Objects/enemy.gif" />
                    <div style="position:absolute; width:60px; left:20px; top:0px; height:100px;" id="enm11"></div>
                </div>
            </div>

            <div style="position:absolute; z-index:111; left:5948px; bottom:90px;">
                <div style=" position:relative;">
                    <img style="width: 160px; height: 160px;" src="images/level-5-assets/Objects/enemy.gif" />
                    <div style="position:absolute; width:60px; left:20px; top:0px; height:100px;" id="enm12"></div>
                </div>
            </div>

            <div style="position:absolute; z-index:111; left:15734px; bottom:90px;">
                <div style=" position:relative;">
                    <img style="width: 160px; height: 160px;" src="images/level-5-assets/Objects/enemy.gif" />
                    <div style="position:absolute; width:60px; left:20px; top:0px; height:100px;" id="enm13"></div>
                </div>
            </div>

            <div style="position:absolute; z-index:111; left:13276px; bottom:90px;">
                <div style=" position:relative;">
                    <img style="width: 160px; height: 160px;" src="images/level-5-assets/Objects/enemy.gif" />
                    <div style="position:absolute; width:60px; left:20px; top:0px; height:100px;" id="enm14"></div>
                </div>
            </div>

            <div style="position:absolute; z-index:111; left:11206px; bottom:90px;">
                <div style=" position:relative;">
                    <img style="width: 160px; height: 160px;" src="images/level-5-assets/Objects/enemy.gif" />
                    <div style="position:absolute; width:60px; left:20px; top:0px; height:100px;" id="enm15"></div>
                </div>
            </div>

            <div style="position:absolute; z-index:111; left:29826px; bottom:90px;"'>
               <div style=" position:relative;">
                  <img style="width: 160px; height: 160px;" src="images/level-5-assets/Objects/enemy.gif"/>
                  <div style="position:absolute; width:60px; left:20px; top:0px; height:100px;"  id="enm16"></div>
               </div>
            </div>

<div style="position:absolute; z-index:111; left:35916px; bottom:90px;"'>
                <div style=" position:relative;">
                    <img style="width: 160px; height: 160px;" src="images/level-5-assets/Objects/enemy.gif" />
                    <div style="position:absolute; width:60px; left:20px; top:0px; height:100px;" id="enm17"></div>
                </div>
            </div>

            <div style="position:absolute; z-index:111; left:9432px; bottom:90px;"'>
               <div style=" position:relative;">
                  <img style="width: 160px; height: 160px;" src="images/level-5-assets/Objects/enemy.gif"/>
                  <div style="position:absolute; width:60px; left:20px; top:0px; height:100px;"  id="enm18"></div>
               </div>
            </div>

<div style="position:absolute; z-index:111; left:2199px; bottom:90px;"'>
                <div style=" position:relative;">
                    <img style="width: 160px; height: 160px;" src="images/level-5-assets/Objects/enemy.gif" />
                    <div style="position:absolute; width:60px; left:20px; top:0px; height:100px;" id="enm19"></div>
                </div>
            </div>

            <div style="position:absolute; z-index:111; left:24439px; bottom:90px;"'>
               <div style=" position:relative;">
                  <img style="width: 160px; height: 160px;" src="images/level-5-assets/Objects/enemy.gif"/>
                  <div style="position:absolute; width:60px; left:20px; top:0px; height:100px;"  id="enm20"></div>
               </div>
            </div>



            <div class="enmybox MovingObjects">

              <!-- Finsih line -->
              
               <!-- Birds Collections -->
             <div style="position:relative; width:100%; overflow:visible;"> 
               
               <img src="images/level-5-assets/Objects/d2.gif" class="MovingObjects" style="position:absolute; left:20875px; bottom:290px;" id="skybirds-enm1"/> 
               <img src="images/level-5-assets/Objects/d2.gif" class="MovingObjects" style="position:absolute; left:5910px; bottom:285px;" id="skybirds-enm2"/> 
               <img src="images/level-5-assets/Objects/d2.gif" class="MovingObjects" style="position:absolute; left:33515px; bottom:254px;" id="skybirds-enm3"/> 
               <img src="images/level-5-assets/Objects/d1.gif" class="MovingObjects" style="position:absolute; left:16070px; bottom:267px;" id="skybirds-enm4"/> 
               <img src="images/level-5-assets/Objects/d3.gif" class="MovingObjects" style="position:absolute; left:20242px; bottom:253px;" id="skybirds-enm5"/> 
               <img src="images/level-5-assets/Objects/d2.gif" class="MovingObjects" style="position:absolute; left:30427px; bottom:258px;" id="skybirds-enm6"/> 
               <img src="images/level-5-assets/Objects/d1.gif" class="MovingObjects" style="position:absolute; left:6044px; bottom:266px;" id="skybirds-enm7"/> 
               <img src="images/level-5-assets/Objects/d1.gif" class="MovingObjects" style="position:absolute; left:28606px; bottom:277px;" id="skybirds-enm8"/> 
               <img src="images/level-5-assets/Objects/d3.gif" class="MovingObjects" style="position:absolute; left:4348px; bottom:285px;" id="skybirds-enm9"/> 
               <img src="images/level-5-assets/Objects/d3.gif" class="MovingObjects" style="position:absolute; left:22350px; bottom:256px;" id="skybirds-enm10"/> 
               <img src="images/level-5-assets/Objects/d1.gif" class="MovingObjects" style="position:absolute; left:37433px; bottom:277px;" id="skybirds-enm11"/> 
               <img src="images/level-5-assets/Objects/d2.gif" class="MovingObjects" style="position:absolute; left:2171px; bottom:295px;" id="skybirds-enm12"/> 
               <img src="images/level-5-assets/Objects/d2.gif" class="MovingObjects" style="position:absolute; left:25382px; bottom:297px;" id="skybirds-enm13"/> 
               <img src="images/level-5-assets/Objects/d3.gif" class="MovingObjects" style="position:absolute; left:20111px; bottom:300px;" id="skybirds-enm14"/> 
               <img src="images/level-5-assets/Objects/d2.gif" class="MovingObjects" style="position:absolute; left:26278px; bottom:271px;" id="skybirds-enm15"/> 
               <img src="images/level-5-assets/Objects/d3.gif" class="MovingObjects" style="position:absolute; left:32687px; bottom:297px;" id="skybirds-enm16"/> 
               <img src="images/level-5-assets/Objects/d3.gif" class="MovingObjects" style="position:absolute; left:7456px; bottom:295px;" id="skybirds-enm17"/> 
               <img src="images/level-5-assets/Objects/d1.gif" class="MovingObjects" style="position:absolute; left:23133px; bottom:270px;" id="skybirds-enm18"/> 
               <img src="images/level-5-assets/Objects/d3.gif" class="MovingObjects" style="position:absolute; left:22226px; bottom:276px;" id="skybirds-enm19"/> 
               <img src="images/level-5-assets/Objects/d2.gif" class="MovingObjects" style="position:absolute; left:36608px; bottom:270px;" id="skybirds-enm20"/> 
               <img src="images/level-5-assets/Objects/d3.gif" class="MovingObjects" style="position:absolute; left:28298px; bottom:275px;" id="skybirds-enm21"/> 
               <img src="images/level-5-assets/Objects/d2.gif" class="MovingObjects" style="position:absolute; left:28991px; bottom:255px;" id="skybirds-enm22"/> 
               <img src="images/level-5-assets/Objects/d3.gif" class="MovingObjects" style="position:absolute; left:35751px; bottom:296px;" id="skybirds-enm23"/> 
               <img src="images/level-5-assets/Objects/d2.gif" class="MovingObjects" style="position:absolute; left:26215px; bottom:262px;" id="skybirds-enm24"/> 
               <img src="images/level-5-assets/Objects/d1.gif" class="MovingObjects" style="position:absolute; left:9815px; bottom:293px;" id="skybirds-enm25"/> 
               <img src="images/level-5-assets/Objects/d1.gif" class="MovingObjects" style="position:absolute; left:35592px; bottom:272px;" id="skybirds-enm26"/> 
               <img src="images/level-5-assets/Objects/d1.gif" class="MovingObjects" style="position:absolute; left:18085px; bottom:282px;" id="skybirds-enm27"/> 
               <img src="images/level-5-assets/Objects/d2.gif" class="MovingObjects" style="position:absolute; left:2855px; bottom:260px;" id="skybirds-enm28"/> 
               <img src="images/level-5-assets/Objects/d3.gif" class="MovingObjects" style="position:absolute; left:5832px; bottom:261px;" id="skybirds-enm29"/> 
               <img src="images/level-5-assets/Objects/d2.gif" class="MovingObjects" style="position:absolute; left:13809px; bottom:292px;" id="skybirds-enm30"/> 
               <img src="images/level-5-assets/Objects/d3.gif" class="MovingObjects" style="position:absolute; left:24180px; bottom:294px;" id="skybirds-enm31"/> 
               <img src="images/level-5-assets/Objects/d1.gif" class="MovingObjects" style="position:absolute; left:24786px; bottom:251px;" id="skybirds-enm32"/> 
               <img src="images/level-5-assets/Objects/d1.gif" class="MovingObjects" style="position:absolute; left:28640px; bottom:274px;" id="skybirds-enm33"/> 
               <img src="images/level-5-assets/Objects/d2.gif" class="MovingObjects" style="position:absolute; left:24356px; bottom:267px;" id="skybirds-enm34"/> 
               <img src="images/level-5-assets/Objects/d2.gif" class="MovingObjects" style="position:absolute; left:28074px; bottom:265px;" id="skybirds-enm35"/> 
               <img src="images/level-5-assets/Objects/d1.gif" class="MovingObjects" style="position:absolute; left:33289px; bottom:263px;" id="skybirds-enm36"/> 
               <img src="images/level-5-assets/Objects/d1.gif" class="MovingObjects" style="position:absolute; left:29668px; bottom:291px;" id="skybirds-enm37"/> 
               <img src="images/level-5-assets/Objects/d3.gif" class="MovingObjects" style="position:absolute; left:12217px; bottom:280px;" id="skybirds-enm38"/> 
               <img src="images/level-5-assets/Objects/d3.gif" class="MovingObjects" style="position:absolute; left:14476px; bottom:293px;" id="skybirds-enm39"/> 
               <img src="images/level-5-assets/Objects/d1.gif" class="MovingObjects" style="position:absolute; left:15245px; bottom:281px;" id="skybirds-enm40"/> 
               <img src="images/level-5-assets/Objects/d2.gif" class="MovingObjects" style="position:absolute; left:21482px; bottom:269px;" id="skybirds-enm41"/> 
               <img src="images/level-5-assets/Objects/d3.gif" class="MovingObjects" style="position:absolute; left:10471px; bottom:277px;" id="skybirds-enm42"/> 
               <img src="images/level-5-assets/Objects/d2.gif" class="MovingObjects" style="position:absolute; left:24293px; bottom:295px;" id="skybirds-enm43"/> 
               <img src="images/level-5-assets/Objects/d2.gif" class="MovingObjects" style="position:absolute; left:21167px; bottom:264px;" id="skybirds-enm44"/> 
               <img src="images/level-5-assets/Objects/d1.gif" class="MovingObjects" style="position:absolute; left:28686px; bottom:293px;" id="skybirds-enm45"/> 
               <img src="images/level-5-assets/Objects/d1.gif" class="MovingObjects" style="position:absolute; left:27236px; bottom:276px;" id="skybirds-enm46"/> 
               <img src="images/level-5-assets/Objects/d1.gif" class="MovingObjects" style="position:absolute; left:4442px; bottom:250px;" id="skybirds-enm47"/> 
               <img src="images/level-5-assets/Objects/d2.gif" class="MovingObjects" style="position:absolute; left:36740px; bottom:273px;" id="skybirds-enm48"/> 
               <img src="images/level-5-assets/Objects/d2.gif" class="MovingObjects" style="position:absolute; left:23956px; bottom:251px;" id="skybirds-enm49"/> 
               <img src="images/level-5-assets/Objects/d1.gif" class="MovingObjects" style="position:absolute; left:17638px; bottom:286px;" id="skybirds-enm50"/> 
               <img src="images/level-5-assets/Objects/d3.gif" class="MovingObjects" style="position:absolute; left:21228px; bottom:295px;" id="skybirds-enm51"/> 
               <img src="images/level-5-assets/Objects/d3.gif" class="MovingObjects" style="position:absolute; left:12947px; bottom:280px;" id="skybirds-enm52"/> 
               <img src="images/level-5-assets/Objects/d1.gif" class="MovingObjects" style="position:absolute; left:16984px; bottom:296px;" id="skybirds-enm53"/> 
               <img src="images/level-5-assets/Objects/d3.gif" class="MovingObjects" style="position:absolute; left:31152px; bottom:298px;" id="skybirds-enm54"/> 
               <img src="images/level-5-assets/Objects/d3.gif" class="MovingObjects" style="position:absolute; left:24010px; bottom:287px;" id="skybirds-enm55"/> 
               <img src="images/level-5-assets/Objects/d2.gif" class="MovingObjects" style="position:absolute; left:19202px; bottom:255px;" id="skybirds-enm56"/> 
               <img src="images/level-5-assets/Objects/d1.gif" class="MovingObjects" style="position:absolute; left:27331px; bottom:253px;" id="skybirds-enm57"/> 
               <img src="images/level-5-assets/Objects/d1.gif" class="MovingObjects" style="position:absolute; left:13801px; bottom:262px;" id="skybirds-enm58"/> 
               <img src="images/level-5-assets/Objects/d1.gif" class="MovingObjects" style="position:absolute; left:29937px; bottom:275px;" id="skybirds-enm59"/> 
               <img src="images/level-5-assets/Objects/d1.gif" class="MovingObjects" style="position:absolute; left:14110px; bottom:285px;" id="skybirds-enm60"/> 
               <img src="images/level-5-assets/Objects/d2.gif" class="MovingObjects" style="position:absolute; left:15616px; bottom:267px;" id="skybirds-enm61"/> 
               <img src="images/level-5-assets/Objects/d2.gif" class="MovingObjects" style="position:absolute; left:27273px; bottom:253px;" id="skybirds-enm62"/> 
               <img src="images/level-5-assets/Objects/d3.gif" class="MovingObjects" style="position:absolute; left:5621px; bottom:274px;" id="skybirds-enm63"/> 
               <img src="images/level-5-assets/Objects/d2.gif" class="MovingObjects" style="position:absolute; left:32188px; bottom:260px;" id="skybirds-enm64"/> 
               <img src="images/level-5-assets/Objects/d2.gif" class="MovingObjects" style="position:absolute; left:28894px; bottom:262px;" id="skybirds-enm65"/> 
               <img src="images/level-5-assets/Objects/d1.gif" class="MovingObjects" style="position:absolute; left:2894px; bottom:275px;" id="skybirds-enm66"/> 
               <img src="images/level-5-assets/Objects/d2.gif" class="MovingObjects" style="position:absolute; left:31509px; bottom:285px;" id="skybirds-enm67"/> 
               <img src="images/level-5-assets/Objects/d1.gif" class="MovingObjects" style="position:absolute; left:32386px; bottom:251px;" id="skybirds-enm68"/> 
               <img src="images/level-5-assets/Objects/d2.gif" class="MovingObjects" style="position:absolute; left:32822px; bottom:256px;" id="skybirds-enm69"/> 
               <img src="images/level-5-assets/Objects/d2.gif" class="MovingObjects" style="position:absolute; left:26964px; bottom:291px;" id="skybirds-enm70"/> 
               <img src="images/level-5-assets/Objects/d1.gif" class="MovingObjects" style="position:absolute; left:27972px; bottom:252px;" id="skybirds-enm71"/> 
               <img src="images/level-5-assets/Objects/d3.gif" class="MovingObjects" style="position:absolute; left:24334px; bottom:250px;" id="skybirds-enm72"/> 
               <img src="images/level-5-assets/Objects/d1.gif" class="MovingObjects" style="position:absolute; left:3786px; bottom:267px;" id="skybirds-enm73"/> 
               <img src="images/level-5-assets/Objects/d3.gif" class="MovingObjects" style="position:absolute; left:36914px; bottom:250px;" id="skybirds-enm74"/> 
               <img src="images/level-5-assets/Objects/d3.gif" class="MovingObjects" style="position:absolute; left:34907px; bottom:289px;" id="skybirds-enm75"/> 
               <img src="images/level-5-assets/Objects/d1.gif" class="MovingObjects" style="position:absolute; left:11740px; bottom:256px;" id="skybirds-enm76"/> 
               <img src="images/level-5-assets/Objects/d2.gif" class="MovingObjects" style="position:absolute; left:17676px; bottom:280px;" id="skybirds-enm77"/> 
               <img src="images/level-5-assets/Objects/d3.gif" class="MovingObjects" style="position:absolute; left:35757px; bottom:254px;" id="skybirds-enm78"/> 
               <img src="images/level-5-assets/Objects/d3.gif" class="MovingObjects" style="position:absolute; left:31960px; bottom:267px;" id="skybirds-enm79"/> 
               <img src="images/level-5-assets/Objects/d3.gif" class="MovingObjects" style="position:absolute; left:24561px; bottom:265px;" id="skybirds-enm80"/> 
               <img src="images/level-5-assets/Objects/d3.gif" class="MovingObjects" style="position:absolute; left:18306px; bottom:271px;" id="skybirds-enm81"/> 
               <img src="images/level-5-assets/Objects/d1.gif" class="MovingObjects" style="position:absolute; left:4118px; bottom:250px;" id="skybirds-enm82"/> 
               <img src="images/level-5-assets/Objects/d3.gif" class="MovingObjects" style="position:absolute; left:17887px; bottom:298px;" id="skybirds-enm83"/> 
               <img src="images/level-5-assets/Objects/d2.gif" class="MovingObjects" style="position:absolute; left:31950px; bottom:281px;" id="skybirds-enm84"/> 
               <img src="images/level-5-assets/Objects/d3.gif" class="MovingObjects" style="position:absolute; left:21688px; bottom:280px;" id="skybirds-enm85"/> 
               <img src="images/level-5-assets/Objects/d2.gif" class="MovingObjects" style="position:absolute; left:12200px; bottom:292px;" id="skybirds-enm86"/> 
               <img src="images/level-5-assets/Objects/d2.gif" class="MovingObjects" style="position:absolute; left:2521px; bottom:288px;" id="skybirds-enm87"/> 
               <img src="images/level-5-assets/Objects/d1.gif" class="MovingObjects" style="position:absolute; left:31582px; bottom:250px;" id="skybirds-enm88"/> 
               <img src="images/level-5-assets/Objects/d3.gif" class="MovingObjects" style="position:absolute; left:8024px; bottom:254px;" id="skybirds-enm89"/> 
               <img src="images/level-5-assets/Objects/d2.gif" class="MovingObjects" style="position:absolute; left:15597px; bottom:288px;" id="skybirds-enm90"/> 
               <img src="images/level-5-assets/Objects/d1.gif" class="MovingObjects" style="position:absolute; left:24949px; bottom:279px;" id="skybirds-enm91"/> 
               <img src="images/level-5-assets/Objects/d2.gif" class="MovingObjects" style="position:absolute; left:12004px; bottom:251px;" id="skybirds-enm92"/> 
               <img src="images/level-5-assets/Objects/d2.gif" class="MovingObjects" style="position:absolute; left:27984px; bottom:287px;" id="skybirds-enm93"/> 
               <img src="images/level-5-assets/Objects/d1.gif" class="MovingObjects" style="position:absolute; left:12756px; bottom:296px;" id="skybirds-enm94"/> 
               <img src="images/level-5-assets/Objects/d3.gif" class="MovingObjects" style="position:absolute; left:23055px; bottom:271px;" id="skybirds-enm95"/> 
               <img src="images/level-5-assets/Objects/d1.gif" class="MovingObjects" style="position:absolute; left:8661px; bottom:297px;" id="skybirds-enm96"/> 
               <img src="images/level-5-assets/Objects/d2.gif" class="MovingObjects" style="position:absolute; left:12390px; bottom:282px;" id="skybirds-enm97"/> 
               <img src="images/level-5-assets/Objects/d3.gif" class="MovingObjects" style="position:absolute; left:7917px; bottom:275px;" id="skybirds-enm98"/> 
               <img src="images/level-5-assets/Objects/d3.gif" class="MovingObjects" style="position:absolute; left:32314px; bottom:283px;" id="skybirds-enm99"/> 
               <img src="images/level-5-assets/Objects/d3.gif" class="MovingObjects" style="position:absolute; left:32193px; bottom:295px;" id="skybirds-enm100"/> 
               <img src="images/level-5-assets/Objects/d3.gif" class="MovingObjects" style="position:absolute; left:15622px; bottom:265px;" id="skybirds-enm101"/> 
               <img src="images/level-5-assets/Objects/d2.gif" class="MovingObjects" style="position:absolute; left:4890px; bottom:280px;" id="skybirds-enm102"/> 
               <img src="images/level-5-assets/Objects/d2.gif" class="MovingObjects" style="position:absolute; left:17169px; bottom:267px;" id="skybirds-enm103"/> 
               <img src="images/level-5-assets/Objects/d1.gif" class="MovingObjects" style="position:absolute; left:14116px; bottom:260px;" id="skybirds-enm104"/> 
               <img src="images/level-5-assets/Objects/d3.gif" class="MovingObjects" style="position:absolute; left:7373px; bottom:261px;" id="skybirds-enm105"/> 
               <img src="images/level-5-assets/Objects/d1.gif" class="MovingObjects" style="position:absolute; left:34008px; bottom:256px;" id="skybirds-enm106"/> 
               <img src="images/level-5-assets/Objects/d3.gif" class="MovingObjects" style="position:absolute; left:9182px; bottom:260px;" id="skybirds-enm107"/> 
               <img src="images/level-5-assets/Objects/d1.gif" class="MovingObjects" style="position:absolute; left:3160px; bottom:269px;" id="skybirds-enm108"/> 
               <img src="images/level-5-assets/Objects/d1.gif" class="MovingObjects" style="position:absolute; left:36359px; bottom:296px;" id="skybirds-enm109"/> 
               <img src="images/level-5-assets/Objects/d2.gif" class="MovingObjects" style="position:absolute; left:17487px; bottom:286px;" id="skybirds-enm110"/> 
               <img src="images/level-5-assets/Objects/d3.gif" class="MovingObjects" style="position:absolute; left:29666px; bottom:283px;" id="skybirds-enm111"/> 
               <img src="images/level-5-assets/Objects/d3.gif" class="MovingObjects" style="position:absolute; left:16575px; bottom:252px;" id="skybirds-enm112"/> 
               <img src="images/level-5-assets/Objects/d3.gif" class="MovingObjects" style="position:absolute; left:7983px; bottom:250px;" id="skybirds-enm113"/> 
               <img src="images/level-5-assets/Objects/d1.gif" class="MovingObjects" style="position:absolute; left:3787px; bottom:253px;" id="skybirds-enm114"/> 
               <img src="images/level-5-assets/Objects/d3.gif" class="MovingObjects" style="position:absolute; left:7493px; bottom:275px;" id="skybirds-enm115"/> 
               <img src="images/level-5-assets/Objects/d2.gif" class="MovingObjects" style="position:absolute; left:7792px; bottom:269px;" id="skybirds-enm116"/> 
               <img src="images/level-5-assets/Objects/d1.gif" class="MovingObjects" style="position:absolute; left:13799px; bottom:259px;" id="skybirds-enm117"/> 
               <img src="images/level-5-assets/Objects/d2.gif" class="MovingObjects" style="position:absolute; left:4443px; bottom:280px;" id="skybirds-enm118"/> 
               <img src="images/level-5-assets/Objects/d2.gif" class="MovingObjects" style="position:absolute; left:30946px; bottom:297px;" id="skybirds-enm119"/> 
               <img src="images/level-5-assets/Objects/d1.gif" class="MovingObjects" style="position:absolute; left:32233px; bottom:280px;" id="skybirds-enm120"/> 
               
               

             </div>

            </div>
            <div class="score-objects">
               <!-- Coins Collections -->

               <img src="images/doors/5.png" style="position:absolute; left:1900px; top:-170px; height: 400px;" id="door1"/> 
               <img src="images/doors/5.png" style="position:absolute; left:4200px; top:-170px; height: 400px;" id="door2"/> 
               <img src="images/doors/5.png" style="position:absolute; left:6400px; top:-170px; height: 400px;" id="door3"/> 
               <img src="images/doors/5.png" style="position:absolute; left:8800px; top:-170px; height: 400px;" id="door4"/> 
               <img src="images/doors/5.png" style="position:absolute; left:11400px; top:-170px; height: 400px;" id="door5"/> 
               <img src="images/doors/5.png" style="position:absolute; left:13500px; top:-170px; height: 400px;" id="door6"/> 
               <img src="images/doors/5.png" style="position:absolute; left:15200px; top:-170px; height: 400px;" id="door7"/> 
               <img src="images/doors/5.png" style="position:absolute; left:17700px; top:-170px; height: 400px;" id="door8"/> 
               <img src="images/doors/5.png" style="position:absolute; left:19600px; top:-170px; height: 400px;" id="door9"/> 
               <img src="images/doors/5.png" style="position:absolute; left:21800px; top:-170px; height: 400px;" id="door10"/> 
               <img src="images/doors/5.png" style="position:absolute; left:24000px; top:-170px; height: 400px;" id="door11"/> 
               <img src="images/doors/5.png" style="position:absolute; left:26200px; top:-170px; height: 400px;" id="door12"/> 
               <img src="images/doors/5.png" style="position:absolute; left:28300px; top:-170px; height: 400px;" id="door13"/> 
               <img src="images/doors/5.png" style="position:absolute; left:30600px; top:-170px; height: 400px;" id="door14"/> 
               <img src="images/doors/5.png" style="position:absolute; left:32800px; top:-170px; height: 400px;" id="door15"/> 


               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:17651px; top:-13.344703690827203px;" id="coin1" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:10345px; top:-22.410153201247155px;" id="coin2" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:14283px; top:-97.02739345535394px;" id="coin3" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:8333px; top:18.164973347285127px;" id="coin4" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:11759px; top:-46.363620293946006px;" id="coin5" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:4656px; top:36.98587481692863px;" id="coin6" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:20352px; top:-87.53237581070172px;" id="coin7" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:29658px; top:-59.72577120223614px;" id="coin8" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:14467px; top:-56.859667337597216px;" id="coin9" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:11097px; top:22.077113563391976px;" id="coin10" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:30192px; top:3.7642540839543557px;" id="coin11" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:33828px; top:30.78636662876673px;" id="coin12" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:3366px; top:8.607723194558673px;" id="coin13" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:13760px; top:-39.736702016772256px;" id="coin14" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:32342px; top:-80.1780454401173px;" id="coin15" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:4156px; top:26.344372020800662px;" id="coin16" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:21318px; top:-55.28448604879405px;" id="coin17" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:28410px; top:-53.597887116724095px;" id="coin18" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:29386px; top:-73.04514965785458px;" id="coin19" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:19563px; top:-56.555782165190315px;" id="coin20" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:30273px; top:-86.41271708564852px;" id="coin21" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:36249px; top:5.041170762792504px;" id="coin22" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:2606px; top:32.314691774991246px;" id="coin23" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:27640px; top:34.457125051889335px;" id="coin24" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:12734px; top:4.161787549563371px;" id="coin25" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:10085px; top:-36.319663431398396px;" id="coin26" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:6774px; top:20.519476957876634px;" id="coin27" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:29642px; top:-37.933504289960446px;" id="coin28" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:29814px; top:25.339413859642363px;" id="coin29" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:27014px; top:-33.562497299562px;" id="coin30" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:21415px; top:-44.174209763394764px;" id="coin31" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:4149px; top:-35.043840461691374px;" id="coin32" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:26590px; top:-58.46131809110375px;" id="coin33" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:14441px; top:-81.0239536515765px;" id="coin34" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:6792px; top:5.086775161463166px;" id="coin35" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:12962px; top:8.35959652335302px;" id="coin36" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:28815px; top:-30.10114920148436px;" id="coin37" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:19164px; top:37.96848321231451px;" id="coin38" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:22392px; top:-15.31495874531089px;" id="coin39" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:16853px; top:-86.16145931072691px;" id="coin40" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:24820px; top:-32.948295886894414px;" id="coin41" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:4786px; top:32.018638421202496px;" id="coin42" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:12148px; top:-52.69186657212311px;" id="coin43" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:17160px; top:33.03228720638674px;" id="coin44" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:31128px; top:-80.47461355496318px;" id="coin45" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:13971px; top:-26.757127899271282px;" id="coin46" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:13999px; top:5.985835591173014px;" id="coin47" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:10208px; top:-43.95943173010059px;" id="coin48" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:32926px; top:-80.8715966537003px;" id="coin49" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:19880px; top:-86.81694393068311px;" id="coin50" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:25554px; top:-53.271149764208px;" id="coin51" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:7430px; top:-32.39951571546516px;" id="coin52" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:27954px; top:-12.052273696440452px;" id="coin53" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:2210px; top:-26.512966814554986px;" id="coin54" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:5980px; top:-89.22357794385456px;" id="coin55" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:36461px; top:-17.406597938078193px;" id="coin56" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:8749px; top:-2.665264429196455px;" id="coin57" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:36970px; top:14.99882751081222px;" id="coin58" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:22390px; top:-75.76860424981639px;" id="coin59" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:13369px; top:-16.20660467077066px;" id="coin60" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:2587px; top:-41.317831887204854px;" id="coin61" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:7654px; top:-89.11400434615257px;" id="coin62" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:34003px; top:-7.5985929951310425px;" id="coin63" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:36153px; top:-35.73679727184867px;" id="coin64" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:9091px; top:32.84665307428199px;" id="coin65" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:31748px; top:-44.33930700318183px;" id="coin66" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:28754px; top:-3.441133835464939px;" id="coin67" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:3212px; top:-86.59484195557613px;" id="coin68" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:20524px; top:-46.979500387735115px;" id="coin69" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:15558px; top:-17.337496502831343px;" id="coin70" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:36144px; top:-96.54077765974264px;" id="coin71" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:20626px; top:-62.165393552672526px;" id="coin72" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:30559px; top:39.824808446798215px;" id="coin73" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:27982px; top:37.64649297773926px;" id="coin74" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:27790px; top:16.555423967171507px;" id="coin75" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:27141px; top:37.978442990539406px;" id="coin76" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:4387px; top:-56.987673982314156px;" id="coin77" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:27209px; top:-23.993405923501px;" id="coin78" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:11725px; top:9.501813325418937px;" id="coin79" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:16429px; top:30.443717611165283px;" id="coin80" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:3533px; top:-54.729571666290546px;" id="coin81" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:12570px; top:-42.54501083473188px;" id="coin82" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:32476px; top:-64.2336740197891px;" id="coin83" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:5551px; top:-75.73800304600827px;" id="coin84" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:15272px; top:10.654659448308735px;" id="coin85" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:36112px; top:-50.51204008798367px;" id="coin86" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:17589px; top:16.929235499461157px;" id="coin87" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:4174px; top:38.154144482172256px;" id="coin88" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:20336px; top:-78.39918199955723px;" id="coin89" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:23002px; top:24.967557210612796px;" id="coin90" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:14327px; top:25.330955820366412px;" id="coin91" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:11945px; top:-25.32586203931423px;" id="coin92" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:34223px; top:38.025361307234675px;" id="coin93" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:3706px; top:-42.72167095811589px;" id="coin94" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:11571px; top:12.71550034467731px;" id="coin95" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:9231px; top:-4.8055888640082856px;" id="coin96" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:24409px; top:-68.50142833003525px;" id="coin97" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:17346px; top:-34.85232681914121px;" id="coin98" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:9200px; top:-4.642083622982284px;" id="coin99" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:15653px; top:-68.2309724228777px;" id="coin100" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:8167px; top:-7.780569686464958px;" id="coin101" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:2698px; top:-56.76039437410569px;" id="coin102" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:18769px; top:-31.24109630889943px;" id="coin103" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:36850px; top:-40.709387248046184px;" id="coin104" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:22017px; top:-42.7841644409817px;" id="coin105" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:5986px; top:-87.89476217349926px;" id="coin106" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:19382px; top:23.95193038994104px;" id="coin107" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:22382px; top:26.45769282661108px;" id="coin108" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:5877px; top:3.198521167740111px;" id="coin109" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:2975px; top:-39.71051258049664px;" id="coin110" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:16445px; top:-64.7318448091991px;" id="coin111" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:8741px; top:34.54213555339123px;" id="coin112" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:19941px; top:-19.222990707275315px;" id="coin113" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:8036px; top:-40.56051048659166px;" id="coin114" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:3789px; top:-34.03341271188786px;" id="coin115" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:3012px; top:-51.51913809179634px;" id="coin116" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:28661px; top:25.038018835794844px;" id="coin117" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:25959px; top:-96.38368812808899px;" id="coin118" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:23501px; top:-32.1136469453274px;" id="coin119" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:31394px; top:-17.97460265144022px;" id="coin120" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:14681px; top:-69.44230829791044px;" id="coin121" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:7114px; top:-45.36410837321535px;" id="coin122" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:18908px; top:20.36247682761136px;" id="coin123" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:8289px; top:10.740032134445755px;" id="coin124" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:11821px; top:39.85866523991888px;" id="coin125" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:18372px; top:-10.785477500144552px;" id="coin126" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:12462px; top:-91.77387209842885px;" id="coin127" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:8909px; top:-65.39184199946541px;" id="coin128" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:27775px; top:-33.38464715803994px;" id="coin129" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:14234px; top:14.748426971691885px;" id="coin130" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:21568px; top:-92.98600057111524px;" id="coin131" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:9196px; top:11.522833885853203px;" id="coin132" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:27492px; top:37.29290218244299px;" id="coin133" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:25918px; top:-7.095023791776498px;" id="coin134" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:17126px; top:-91.61549080441193px;" id="coin135" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:30649px; top:-20.160531298258235px;" id="coin136" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:31664px; top:-4.964161925799459px;" id="coin137" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:23547px; top:-51.46191929760574px;" id="coin138" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:37020px; top:-42.72531564970878px;" id="coin139" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:25259px; top:-11.574228898119216px;" id="coin140" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:28996px; top:-39.54548229932573px;" id="coin141" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:24281px; top:-28.15751840078734px;" id="coin142" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:2828px; top:12.225861583353904px;" id="coin143" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:33038px; top:-39.89998179667345px;" id="coin144" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:26246px; top:-41.048273162944604px;" id="coin145" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:29499px; top:10.40186922633535px;" id="coin146" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:32130px; top:-64.46132404690115px;" id="coin147" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:20953px; top:-17.519714034638866px;" id="coin148" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:21054px; top:-50.46912935749765px;" id="coin149" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:12617px; top:7.2954266928431935px;" id="coin150" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:20134px; top:34.72755744116384px;" id="coin151" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:25675px; top:37.95572699001164px;" id="coin152" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:35175px; top:-74.36643835311006px;" id="coin153" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:5122px; top:-53.17208492322617px;" id="coin154" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:31816px; top:37.116547943642956px;" id="coin155" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:36254px; top:17.588952930709866px;" id="coin156" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:11622px; top:-91.02002036988974px;" id="coin157" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:25479px; top:-63.733569177486686px;" id="coin158" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:18520px; top:-21.031887869222288px;" id="coin159" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:34681px; top:-69.03269174161743px;" id="coin160" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:25125px; top:-19.93788639363605px;" id="coin161" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:19297px; top:1.6449434202338296px;" id="coin162" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:18989px; top:-14.451440799294545px;" id="coin163" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:30833px; top:-57.811609514853984px;" id="coin164" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:32411px; top:-24.037005219601653px;" id="coin165" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:21572px; top:13.296107205690433px;" id="coin166" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:35571px; top:-65.14706379083948px;" id="coin167" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:15224px; top:-64.27163442874459px;" id="coin168" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:21169px; top:25.79923720990712px;" id="coin169" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:27374px; top:-60.62204058726205px;" id="coin170" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:3513px; top:-23.03010390361598px;" id="coin171" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:6140px; top:-11.52841220684408px;" id="coin172" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:14416px; top:-62.16541212854602px;" id="coin173" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:6414px; top:-50.02375215546909px;" id="coin174" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:31219px; top:-73.2482634992716px;" id="coin175" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:6819px; top:-25.223496747023873px;" id="coin176" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:21994px; top:-78.6331974213491px;" id="coin177" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:35734px; top:-12.72866972803321px;" id="coin178" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:25529px; top:22.25399559173823px;" id="coin179" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:8424px; top:-96.3492096686066px;" id="coin180" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:7673px; top:-57.49507180808676px;" id="coin181" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:21570px; top:-93.87818681323625px;" id="coin182" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:6243px; top:-32.42563805921584px;" id="coin183" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:8516px; top:11.603175145835422px;" id="coin184" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:37256px; top:-53.05185019934015px;" id="coin185" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:19271px; top:31.009929370604596px;" id="coin186" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:36241px; top:8.682176441958688px;" id="coin187" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:24650px; top:24.565578612231064px;" id="coin188" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:37200px; top:-87.0813289170961px;" id="coin189" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:28206px; top:-20.702889869113577px;" id="coin190" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:19884px; top:24.291053986293406px;" id="coin191" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:28866px; top:-79.81868010385212px;" id="coin192" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:32217px; top:-95.01629663333769px;" id="coin193" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:16997px; top:27.579834141396276px;" id="coin194" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:23396px; top:-1.9775321642077444px;" id="coin195" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:13061px; top:39.952227069342314px;" id="coin196" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:10290px; top:-6.302519783047259px;" id="coin197" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:13321px; top:-71.08930096459673px;" id="coin198" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:27405px; top:-43.044546429661445px;" id="coin199" />
               <img src="images/coin/c1.png" class="runcoin" style="position:absolute; left:18269px; top:-75.75649718080325px;" id="coin200" />


               <img src="images/coin/dim.png" class="" style="position:absolute; left:31432px; top:-93.17661751420317px;" id="diamond1" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:10412px; top:-51.01598944694943px;" id="diamond2" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:23985px; top:-78.34959891022739px;" id="diamond3" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:22336px; top:-84.03758829745465px;" id="diamond4" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:35765px; top:-91.6488867219941px;" id="diamond5" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:12993px; top:-88.69980653398234px;" id="diamond6" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:15681px; top:-36.50596136613042px;" id="diamond7" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:11476px; top:-30.957615446364372px;" id="diamond8" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:26935px; top:-27.058852254368944px;" id="diamond9" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:28749px; top:-43.58396226541729px;" id="diamond10" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:25219px; top:-87.3470152105082px;" id="diamond11" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:5891px; top:-47.98910646620392px;" id="diamond12" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:26957px; top:-48.716659120976416px;" id="diamond13" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:6753px; top:-33.8655241512253px;" id="diamond14" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:22999px; top:-19.526437239180822px;" id="diamond15" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:2785px; top:-65.1885692435353px;" id="diamond16" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:19083px; top:-48.18702237947931px;" id="diamond17" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:33160px; top:-81.9039771167884px;" id="diamond18" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:7635px; top:-74.29325820900912px;" id="diamond19" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:6278px; top:-59.063580176491705px;" id="diamond20" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:31360px; top:-24.42291920992031px;" id="diamond21" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:17071px; top:-48.1479169947932px;" id="diamond22" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:23089px; top:-1.643211477458422px;" id="diamond23" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:13731px; top:-73.76664281999308px;" id="diamond24" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:21837px; top:-32.25476242192293px;" id="diamond25" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:35680px; top:-89.65479643954848px;" id="diamond26" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:28108px; top:-63.64667353542422px;" id="diamond27" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:4155px; top:31.50082094865911px;" id="diamond28" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:22685px; top:-90.08955236583733px;" id="diamond29" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:22150px; top:-60.94413702383322px;" id="diamond30" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:23952px; top:-1.403924638774896px;" id="diamond31" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:34009px; top:-69.9562061159344px;" id="diamond32" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:22494px; top:17.712221925290933px;" id="diamond33" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:28794px; top:-49.512349278122315px;" id="diamond34" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:13660px; top:-2.570146617252803px;" id="diamond35" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:27601px; top:-89.12751645652885px;" id="diamond36" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:16741px; top:37.53627219293503px;" id="diamond37" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:32001px; top:23.948258634920194px;" id="diamond38" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:7734px; top:-86.16254786811095px;" id="diamond39" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:25123px; top:-93.96112097514954px;" id="diamond40" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:5917px; top:30.366014895387025px;" id="diamond41" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:25406px; top:18.004903813368614px;" id="diamond42" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:37198px; top:13.349541574952354px;" id="diamond43" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:8015px; top:8.077404499064215px;" id="diamond44" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:2155px; top:-28.881032838684078px;" id="diamond45" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:5650px; top:-65.61407010646437px;" id="diamond46" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:20096px; top:-92.93523249786554px;" id="diamond47" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:30446px; top:-84.37599279694166px;" id="diamond48" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:13559px; top:-28.053125110278913px;" id="diamond49" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:14007px; top:-93.81407004950066px;" id="diamond50" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:20815px; top:-77.75664322204948px;" id="diamond51" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:15714px; top:-58.06215977291476px;" id="diamond52" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:19175px; top:-13.783466668249517px;" id="diamond53" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:25037px; top:1.7907512200314386px;" id="diamond54" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:5428px; top:-39.731094905783614px;" id="diamond55" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:30753px; top:24.13710490334843px;" id="diamond56" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:9518px; top:33.84461823435706px;" id="diamond57" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:24360px; top:-51.35578170675463px;" id="diamond58" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:17202px; top:-40.236859179803886px;" id="diamond59" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:33628px; top:-4.222717910636433px;" id="diamond60" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:23076px; top:32.76541725830819px;" id="diamond61" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:34820px; top:-45.99095892862175px;" id="diamond62" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:23671px; top:-68.90055149311354px;" id="diamond63" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:17200px; top:-13.641026515506937px;" id="diamond64" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:25613px; top:38.749094904396344px;" id="diamond65" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:21886px; top:-12.210853652127057px;" id="diamond66" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:22278px; top:-30.30113462694291px;" id="diamond67" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:21454px; top:-68.26319054841656px;" id="diamond68" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:15924px; top:-42.288220109589346px;" id="diamond69" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:15724px; top:-62.694631602088975px;" id="diamond70" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:34304px; top:-96.19028075231792px;" id="diamond71" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:18291px; top:21.56537628346932px;" id="diamond72" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:36972px; top:-58.811983175173275px;" id="diamond73" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:37681px; top:-41.910505676567816px;" id="diamond74" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:37103px; top:-72.53289341179811px;" id="diamond75" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:36425px; top:-30.298754096740637px;" id="diamond76" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:37192px; top:2.7843955647118435px;" id="diamond77" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:29174px; top:-80.82176112972687px;" id="diamond78" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:23637px; top:2.863273406969199px;" id="diamond79" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:5161px; top:31.889183430573894px;" id="diamond80" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:8966px; top:-83.31703928206196px;" id="diamond81" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:3081px; top:20.335020168133866px;" id="diamond82" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:13447px; top:-39.08025501304378px;" id="diamond83" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:17417px; top:-15.733724763501954px;" id="diamond84" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:5878px; top:39.12260394291309px;" id="diamond85" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:29584px; top:33.17029464752579px;" id="diamond86" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:21642px; top:-31.737495491035645px;" id="diamond87" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:8955px; top:-75.15529189829566px;" id="diamond88" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:31314px; top:-65.00714095867258px;" id="diamond89" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:13144px; top:-0.6970975159340469px;" id="diamond90" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:4992px; top:-7.962892130158934px;" id="diamond91" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:5728px; top:-30.581285236314727px;" id="diamond92" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:10333px; top:-7.042067338113156px;" id="diamond93" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:27988px; top:37.67807816388259px;" id="diamond94" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:2756px; top:-7.4069659096768845px;" id="diamond95" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:13219px; top:-18.39118507954457px;" id="diamond96" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:32135px; top:-78.35895730612211px;" id="diamond97" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:34903px; top:7.21133917408801px;" id="diamond98" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:10594px; top:-1.1678989413062482px;" id="diamond99" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:2712px; top:-7.747742584673645px;" id="diamond100" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:25526px; top:-34.807868900703255px;" id="diamond101" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:17023px; top:-36.699912044021275px;" id="diamond102" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:5797px; top:3.109542976682121px;" id="diamond103" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:30383px; top:-76.73944609932205px;" id="diamond104" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:26734px; top:-99.80010225641601px;" id="diamond105" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:24304px; top:-87.71749650637825px;" id="diamond106" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:23585px; top:-26.143288108834298px;" id="diamond107" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:29830px; top:30.876349105943348px;" id="diamond108" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:16333px; top:-94.75606814587553px;" id="diamond109" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:35960px; top:-18.70568991750764px;" id="diamond110" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:29670px; top:-66.64640339632562px;" id="diamond111" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:8399px; top:19.097626551884858px;" id="diamond112" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:35726px; top:-21.399582993756866px;" id="diamond113" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:27014px; top:-9.939660917389958px;" id="diamond114" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:15743px; top:-46.82752887721807px;" id="diamond115" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:14755px; top:-90.39017085907119px;" id="diamond116" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:8740px; top:0.7212274795887481px;" id="diamond117" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:16019px; top:22.707392528943103px;" id="diamond118" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:3310px; top:-76.43542988470429px;" id="diamond119" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:30923px; top:19.254285780054218px;" id="diamond120" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:6543px; top:-34.39232567107648px;" id="diamond121" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:6310px; top:15.693235567062246px;" id="diamond122" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:33445px; top:-44.10506416989232px;" id="diamond123" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:36570px; top:11.063260734367688px;" id="diamond124" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:17283px; top:-62.00542275376868px;" id="diamond125" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:22414px; top:-40.86245407849877px;" id="diamond126" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:18866px; top:-63.17764942074284px;" id="diamond127" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:13109px; top:-16.54683725007233px;" id="diamond128" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:14926px; top:-13.18321538439099px;" id="diamond129" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:20384px; top:39.00096596452386px;" id="diamond130" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:28983px; top:-61.34288903788973px;" id="diamond131" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:29574px; top:-37.742435704534806px;" id="diamond132" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:14631px; top:-66.23047946688322px;" id="diamond133" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:15252px; top:9.705648767558955px;" id="diamond134" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:24048px; top:-88.39842966556527px;" id="diamond135" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:7809px; top:38.04700431213212px;" id="diamond136" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:32924px; top:-92.29322576350711px;" id="diamond137" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:29228px; top:32.03759875881116px;" id="diamond138" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:31637px; top:2.4765327082583752px;" id="diamond139" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:9945px; top:-19.30976814594193px;" id="diamond140" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:27345px; top:0.8161063429832183px;" id="diamond141" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:21616px; top:-58.16930767942147px;" id="diamond142" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:11300px; top:-38.72965803036181px;" id="diamond143" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:25491px; top:0.4967120891422354px;" id="diamond144" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:15718px; top:-25.756544385750345px;" id="diamond145" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:26660px; top:-43.181362118750904px;" id="diamond146" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:17650px; top:38.26251235268032px;" id="diamond147" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:9329px; top:-82.75320390847052px;" id="diamond148" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:3777px; top:-49.48888037719599px;" id="diamond149" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:26136px; top:-53.89370099094521px;" id="diamond150" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:33959px; top:-83.7276685178084px;" id="diamond151" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:11651px; top:-92.08057738039557px;" id="diamond152" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:11196px; top:-67.49933906618679px;" id="diamond153" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:10286px; top:24.440299109788px;" id="diamond154" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:6299px; top:-98.80013774839333px;" id="diamond155" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:9469px; top:14.817047270673953px;" id="diamond156" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:32905px; top:-13.288177305622px;" id="diamond157" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:5735px; top:-19.50716758129562px;" id="diamond158" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:26392px; top:28.281926246724993px;" id="diamond159" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:9091px; top:-92.0895919946409px;" id="diamond160" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:9002px; top:-77.5563092440456px;" id="diamond161" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:30592px; top:-86.69799274257015px;" id="diamond162" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:4803px; top:-25.787663972501633px;" id="diamond163" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:21268px; top:-47.64560388324803px;" id="diamond164" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:23654px; top:-18.001214205983047px;" id="diamond165" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:26963px; top:-0.5017257511177178px;" id="diamond166" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:3096px; top:2.56962655512865px;" id="diamond167" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:33137px; top:-82.2717007534443px;" id="diamond168" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:6566px; top:-63.88416406238925px;" id="diamond169" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:36292px; top:-65.73896065559535px;" id="diamond170" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:9915px; top:-17.88031787473213px;" id="diamond171" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:19597px; top:16.83938903896751px;" id="diamond172" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:9490px; top:-45.57825376891395px;" id="diamond173" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:23634px; top:-97.94466873574571px;" id="diamond174" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:12481px; top:-5.909735306924105px;" id="diamond175" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:14200px; top:-57.07868079012202px;" id="diamond176" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:26993px; top:-46.16241821851383px;" id="diamond177" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:16575px; top:-7.826852660728065px;" id="diamond178" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:11621px; top:-53.442696442418985px;" id="diamond179" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:10801px; top:-20.59724844304671px;" id="diamond180" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:6061px; top:-4.1413882112674685px;" id="diamond181" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:21118px; top:-42.418984401862964px;" id="diamond182" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:18971px; top:9.490381723913444px;" id="diamond183" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:26918px; top:1.2132168873196747px;" id="diamond184" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:8560px; top:4.449182890355203px;" id="diamond185" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:7980px; top:39.20497978804818px;" id="diamond186" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:28110px; top:-75.71199140978402px;" id="diamond187" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:37321px; top:7.072841342205763px;" id="diamond188" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:17183px; top:23.733887699676217px;" id="diamond189" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:4381px; top:-89.03582321589624px;" id="diamond190" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:29941px; top:4.387779006937748px;" id="diamond191" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:37119px; top:-31.720544244626865px;" id="diamond192" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:13068px; top:-58.84842502506058px;" id="diamond193" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:25492px; top:-73.50595180007384px;" id="diamond194" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:22178px; top:-61.157409171648276px;" id="diamond195" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:9682px; top:-24.131734783306385px;" id="diamond196" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:33414px; top:-82.36591297605858px;" id="diamond197" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:22144px; top:-16.350388141687958px;" id="diamond198" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:9127px; top:-39.74628395458099px;" id="diamond199" />
               <img src="images/coin/dim.png" class="" style="position:absolute; left:23634px; top:-87.36289851691696px;" id="diamond200" />


                           
               <img src="images/flag.gif"  id="flag" style="position:absolute; left:37000px; bottom: 100px;" />

            </div>
         </div>
      </div>
      <!--<img src="images/jump.png"  style="position:absolute; z-index:55555; right:11px;  bottom:12px;"  onclick="jumper();" />-->

      <div class="seenlayer">
         <div class="kutubminar"></div>
         <div class="palace"></div>
         <div class="kutubminar2"></div>
         <div class="palace2"></div>
      </div>
      <div class="maintree">
         <div style="position:relative;">
            
            <div class="tree1" style="left:1000px;"></div> 
            <div class="tree1" style="left:1457px;"></div> 
            <div class="tree1" style="left:2233px;"></div> 
            <div class="tree1" style="left:3028px;"></div> 
            <div class="tree1" style="left:3403px;"></div> 
            <div class="tree1" style="left:4302px;"></div> 
            <div class="tree1" style="left:4762px;"></div> 
            <div class="tree1" style="left:5355px;"></div> 
            <div class="tree1" style="left:5932px;"></div> 
            <div class="tree1" style="left:6412px;"></div> 
            <div class="tree1" style="left:6887px;"></div> 
            <div class="tree1" style="left:7364px;"></div> 
            <div class="tree1" style="left:7868px;"></div> 
            <div class="tree1" style="left:8316px;"></div> 
            <div class="tree1" style="left:8854px;"></div> 
            <div class="tree1" style="left:9537px;"></div> 
            <div class="tree1" style="left:10169px;"></div> 
            <div class="tree1" style="left:10875px;"></div> 
            <div class="tree1" style="left:11382px;"></div> 
            <div class="tree1" style="left:12326px;"></div> 
            <div class="tree1" style="left:12978px;"></div> 
            <div class="tree1" style="left:13798px;"></div> 
            <div class="tree1" style="left:14462px;"></div> 
            <div class="tree1" style="left:15265px;"></div> 
            <div class="tree1" style="left:15771px;"></div> 
            <div class="tree1" style="left:16107px;"></div> 
            <div class="tree1" style="left:16579px;"></div> 
            <div class="tree1" style="left:16955px;"></div> 
            <div class="tree1" style="left:17489px;"></div> 
            <div class="tree1" style="left:18219px;"></div> 
            <div class="tree1" style="left:19140px;"></div> 
            <div class="tree1" style="left:20012px;"></div> 
            <div class="tree1" style="left:20517px;"></div> 
            <div class="tree1" style="left:21515px;"></div> 
            <div class="tree1" style="left:22078px;"></div> 
            <div class="tree1" style="left:22992px;"></div> 
            <div class="tree1" style="left:23767px;"></div> 
            <div class="tree1" style="left:24610px;"></div> 
            <div class="tree1" style="left:25027px;"></div> 
            <div class="tree1" style="left:25391px;"></div> 
            <div class="tree1" style="left:25788px;"></div> 
            <div class="tree1" style="left:26416px;"></div> 
            <div class="tree1" style="left:27014px;"></div> 
            <div class="tree1" style="left:27454px;"></div> 
            <div class="tree1" style="left:28352px;"></div> 
            <div class="tree1" style="left:29054px;"></div> 
            <div class="tree1" style="left:29883px;"></div> 
            <div class="tree1" style="left:30473px;"></div> 
            <div class="tree1" style="left:31007px;"></div> 
            <div class="tree1" style="left:31327px;"></div> 
            <div class="tree1" style="left:31740px;"></div> 
            <div class="tree1" style="left:32149px;"></div> 
            <div class="tree1" style="left:32727px;"></div> 
            <div class="tree1" style="left:33687px;"></div> 
            <div class="tree1" style="left:34605px;"></div> 
            <div class="tree1" style="left:35041px;"></div> 
            <div class="tree1" style="left:35348px;"></div> 
            <div class="tree1" style="left:36130px;"></div> 
            <div class="tree1" style="left:37074px;"></div> 
            <div class="tree1" style="left:37645px;"></div> 

          
            <div class="right-arrow" style="left:8596px;"></div> 
            <div class="right-arrow" style="left:28411px;"></div> 
            <div class="right-arrow" style="left:3263px;"></div> 
            <div class="right-arrow" style="left:29338px;"></div> 
            <div class="right-arrow" style="left:31646px;"></div> 
            <div class="right-arrow" style="left:5910px;"></div> 
            <div class="right-arrow" style="left:24419px;"></div> 
            <div class="right-arrow" style="left:27813px;"></div> 
            <div class="right-arrow" style="left:28006px;"></div> 
            <div class="right-arrow" style="left:28156px;"></div> 
            <div class="right-arrow" style="left:9064px;"></div> 
            <div class="right-arrow" style="left:23328px;"></div> 
            <div class="right-arrow" style="left:16569px;"></div> 
            <div class="right-arrow" style="left:20584px;"></div> 
            <div class="right-arrow" style="left:17213px;"></div> 
             
            <div class="right-arrow2" style="left:27674px;"></div> 
            <div class="right-arrow2" style="left:17668px;"></div> 
            <div class="right-arrow2" style="left:12285px;"></div> 
            <div class="right-arrow2" style="left:29011px;"></div> 
            <div class="right-arrow2" style="left:18255px;"></div> 
            <div class="right-arrow2" style="left:28708px;"></div> 
            <div class="right-arrow2" style="left:17415px;"></div> 
            <div class="right-arrow2" style="left:16380px;"></div> 
            <div class="right-arrow2" style="left:19048px;"></div> 
            <div class="right-arrow2" style="left:3941px;"></div> 
            <div class="right-arrow2" style="left:12598px;"></div> 
            <div class="right-arrow2" style="left:9174px;"></div> 
            <div class="right-arrow2" style="left:21430px;"></div> 
            <div class="right-arrow2" style="left:2213px;"></div> 
            <div class="right-arrow2" style="left:29302px;"></div> 
            
         
            <div class="bush1" style="left:28801px;"></div> 
            <div class="bush1" style="left:32182px;"></div> 
            <div class="bush1" style="left:18281px;"></div> 
            <div class="bush1" style="left:30719px;"></div> 
            <div class="bush2" style="left:7591px;"></div> 
            <div class="bush2" style="left:4874px;"></div> 
            <div class="bush2" style="left:18967px;"></div> 
            <div class="bush1" style="left:8713px;"></div> 
            <div class="bush1" style="left:20739px;"></div> 
            <div class="bush2" style="left:9024px;"></div> 
            <div class="bush1" style="left:8593px;"></div> 
            <div class="bush2" style="left:23708px;"></div> 
            <div class="bush2" style="left:35208px;"></div> 
            <div class="bush2" style="left:12891px;"></div> 
            <div class="bush1" style="left:7400px;"></div> 
            <div class="bush2" style="left:15013px;"></div> 
            <div class="bush1" style="left:7240px;"></div> 
            <div class="bush1" style="left:30539px;"></div> 
            <div class="bush2" style="left:30659px;"></div> 
            <div class="bush2" style="left:26408px;"></div> 
            <div class="bush2" style="left:19161px;"></div> 
            <div class="bush1" style="left:13895px;"></div> 
            <div class="bush2" style="left:28625px;"></div> 
            <div class="bush1" style="left:15127px;"></div> 
            <div class="bush2" style="left:21173px;"></div> 
            <div class="bush1" style="left:7789px;"></div> 
            <div class="bush2" style="left:31663px;"></div> 
            <div class="bush1" style="left:16340px;"></div> 
            <div class="bush2" style="left:5311px;"></div> 
            <div class="bush2" style="left:13981px;"></div> 
            <div class="bush1" style="left:11778px;"></div> 
            <div class="bush2" style="left:34675px;"></div> 
            <div class="bush1" style="left:28346px;"></div> 
            <div class="bush2" style="left:25476px;"></div> 
            <div class="bush1" style="left:24293px;"></div> 
            <div class="bush2" style="left:34324px;"></div> 
            <div class="bush1" style="left:19575px;"></div> 
            <div class="bush2" style="left:2319px;"></div> 
            <div class="bush2" style="left:35022px;"></div> 
            <div class="bush2" style="left:34988px;"></div> 
            <div class="bush1" style="left:3726px;"></div> 
            <div class="bush2" style="left:9850px;"></div> 
            <div class="bush1" style="left:30347px;"></div> 
            <div class="bush1" style="left:12648px;"></div> 
            <div class="bush1" style="left:33684px;"></div> 
            <div class="bush2" style="left:10730px;"></div> 
            <div class="bush2" style="left:28726px;"></div> 
            <div class="bush1" style="left:23110px;"></div> 
            <div class="bush2" style="left:3214px;"></div> 
            <div class="bush1" style="left:30057px;"></div> 
            <div class="bush2" style="left:1515px;"></div> 
            <div class="bush2" style="left:21750px;"></div> 
            <div class="bush2" style="left:21335px;"></div> 
            <div class="bush2" style="left:23431px;"></div> 
            <div class="bush1" style="left:25716px;"></div> 
            <div class="bush2" style="left:25064px;"></div> 
            <div class="bush2" style="left:3922px;"></div> 
            <div class="bush2" style="left:28921px;"></div> 
            <div class="bush2" style="left:22849px;"></div> 
            <div class="bush1" style="left:30955px;"></div> 
            <div class="bush1" style="left:25562px;"></div> 
            <div class="bush1" style="left:9133px;"></div> 
            <div class="bush2" style="left:33836px;"></div> 
            <div class="bush2" style="left:19638px;"></div> 
            <div class="bush2" style="left:15029px;"></div> 
            <div class="bush1" style="left:35734px;"></div> 
            <div class="bush1" style="left:32379px;"></div> 
            <div class="bush2" style="left:7186px;"></div> 
            <div class="bush1" style="left:27773px;"></div> 
            <div class="bush1" style="left:29982px;"></div> 
            <div class="bush1" style="left:33502px;"></div> 
            <div class="bush1" style="left:2558px;"></div> 
            <div class="bush2" style="left:19962px;"></div> 
            <div class="bush1" style="left:1839px;"></div> 
            <div class="bush1" style="left:30667px;"></div> 
            <div class="bush2" style="left:12881px;"></div> 
            <div class="bush2" style="left:9062px;"></div> 
            <div class="bush2" style="left:23496px;"></div> 
            <div class="bush2" style="left:5575px;"></div> 
            <div class="bush1" style="left:25258px;"></div> 
            <div class="bush2" style="left:31025px;"></div> 
            <div class="bush1" style="left:35157px;"></div> 
            <div class="bush1" style="left:9327px;"></div> 
            <div class="bush2" style="left:14985px;"></div> 
            <div class="bush2" style="left:10763px;"></div> 
            <div class="bush2" style="left:27746px;"></div> 
            <div class="bush2" style="left:8720px;"></div> 
            <div class="bush1" style="left:21374px;"></div> 
            <div class="bush2" style="left:16525px;"></div> 
            <div class="bush1" style="left:8937px;"></div> 
            <div class="bush2" style="left:16774px;"></div> 
            <div class="bush2" style="left:3174px;"></div> 
            <div class="bush2" style="left:6140px;"></div> 
            <div class="bush1" style="left:12894px;"></div> 
            <div class="bush1" style="left:13794px;"></div> 
            <div class="bush2" style="left:29102px;"></div> 
            <div class="bush2" style="left:25800px;"></div> 
            <div class="bush1" style="left:13406px;"></div> 
            <div class="bush2" style="left:11123px;"></div> 
            <div class="bush2" style="left:13934px;"></div> 
            <div class="bush2" style="left:31321px;"></div> 
            <div class="bush1" style="left:26953px;"></div> 
            <div class="bush2" style="left:3693px;"></div> 
            <div class="bush1" style="left:9327px;"></div> 
            <div class="bush2" style="left:20115px;"></div> 
            <div class="bush1" style="left:18220px;"></div> 
            <div class="bush1" style="left:3859px;"></div> 
            <div class="bush1" style="left:25797px;"></div> 
            <div class="bush1" style="left:18491px;"></div> 
            <div class="bush2" style="left:32897px;"></div> 
            <div class="bush1" style="left:15968px;"></div> 
            <div class="bush1" style="left:24182px;"></div> 
            <div class="bush2" style="left:18822px;"></div> 
            <div class="bush2" style="left:23700px;"></div> 
            <div class="bush1" style="left:5443px;"></div> 
            <div class="bush1" style="left:27613px;"></div> 
            <div class="bush1" style="left:2019px;"></div> 
            <div class="bush1" style="left:17573px;"></div> 
            <div class="bush1" style="left:13837px;"></div> 
            <div class="bush1" style="left:28059px;"></div> 
            <div class="bush2" style="left:19841px;"></div> 
            <div class="bush1" style="left:12906px;"></div> 
            <div class="bush2" style="left:22134px;"></div> 
            <div class="bush2" style="left:31058px;"></div> 
            <div class="bush2" style="left:11407px;"></div> 
            <div class="bush2" style="left:24345px;"></div> 
            <div class="bush1" style="left:32201px;"></div> 
            <div class="bush2" style="left:25385px;"></div> 
            <div class="bush2" style="left:14069px;"></div> 
            <div class="bush2" style="left:30855px;"></div> 
            <div class="bush1" style="left:7297px;"></div> 
            <div class="bush1" style="left:18038px;"></div> 
            <div class="bush1" style="left:628px;"></div> 
            <div class="bush2" style="left:5097px;"></div> 
            <div class="bush1" style="left:19833px;"></div> 
            <div class="bush2" style="left:27471px;"></div> 
            <div class="bush1" style="left:9359px;"></div> 
            <div class="bush1" style="left:32392px;"></div> 
            <div class="bush1" style="left:30666px;"></div> 
            <div class="bush2" style="left:27787px;"></div> 
            <div class="bush2" style="left:20653px;"></div> 
            <div class="bush2" style="left:5086px;"></div> 
            <div class="bush1" style="left:7991px;"></div> 
            <div class="bush1" style="left:29383px;"></div> 
            <div class="bush2" style="left:17264px;"></div> 
            <div class="bush1" style="left:28333px;"></div> 
            <div class="bush1" style="left:6674px;"></div> 
            <div class="bush1" style="left:14707px;"></div> 
            <div class="bush2" style="left:25311px;"></div> 
            <div class="bush1" style="left:32921px;"></div> 
            <div class="bush1" style="left:10447px;"></div> 
            <div class="bush1" style="left:16640px;"></div> 
            <div class="bush1" style="left:848px;"></div> 
            <div class="bush2" style="left:7903px;"></div> 
            <div class="bush1" style="left:20905px;"></div> 
            <div class="bush1" style="left:21551px;"></div> 
            <div class="bush2" style="left:30267px;"></div> 
            <div class="bush1" style="left:19257px;"></div> 
            <div class="bush1" style="left:29784px;"></div> 
            <div class="bush1" style="left:230px;"></div> 
            <div class="bush2" style="left:30286px;"></div> 
            <div class="bush1" style="left:5576px;"></div> 
            <div class="bush2" style="left:30572px;"></div> 
            <div class="bush1" style="left:18880px;"></div> 
            <div class="bush2" style="left:23505px;"></div> 
            <div class="bush2" style="left:25468px;"></div> 
            <div class="bush2" style="left:32678px;"></div> 
            <div class="bush2" style="left:10024px;"></div> 
            <div class="bush2" style="left:29638px;"></div> 
            <div class="bush1" style="left:21845px;"></div> 
            <div class="bush2" style="left:23624px;"></div> 
            <div class="bush2" style="left:5826px;"></div> 
            <div class="bush1" style="left:23940px;"></div> 
            <div class="bush1" style="left:24163px;"></div> 
            <div class="bush1" style="left:3078px;"></div> 
            <div class="bush2" style="left:21849px;"></div> 
            <div class="bush2" style="left:22085px;"></div> 
            <div class="bush2" style="left:27605px;"></div> 
            <div class="bush2" style="left:16834px;"></div> 
            <div class="bush2" style="left:33674px;"></div> 
            <div class="bush1" style="left:19325px;"></div> 
            <div class="bush2" style="left:6345px;"></div> 
            <div class="bush2" style="left:23683px;"></div> 
            <div class="bush2" style="left:3705px;"></div> 
            <div class="bush2" style="left:23821px;"></div> 
            <div class="bush1" style="left:16182px;"></div> 
            <div class="bush1" style="left:4682px;"></div> 
            <div class="bush2" style="left:2372px;"></div> 
            <div class="bush2" style="left:31130px;"></div> 
            <div class="bush2" style="left:11349px;"></div> 
            <div class="bush2" style="left:22104px;"></div> 
            <div class="bush1" style="left:26103px;"></div> 
            <div class="bush1" style="left:13428px;"></div> 
            <div class="bush1" style="left:2974px;"></div> 
            <div class="bush2" style="left:5261px;"></div> 
            <div class="bush1" style="left:18806px;"></div> 
            <div class="bush2" style="left:1898px;"></div> 
            <div class="bush2" style="left:831px;"></div> 
            <div class="bush2" style="left:10669px;"></div> 
            <div class="bush2" style="left:14932px;"></div> 
            <div class="bush1" style="left:8802px;"></div> 
            <div class="bush1" style="left:20262px;"></div> 
            <div class="bush2" style="left:25767px;"></div> 
            <div class="bush2" style="left:8778px;"></div> 
            <div class="bush1" style="left:25867px;"></div> 
            <div class="bush1" style="left:10789px;"></div> 
            <div class="bush1" style="left:9033px;"></div> 
            <div class="bush2" style="left:18649px;"></div> 
            <div class="bush2" style="left:31138px;"></div> 
            <div class="bush1" style="left:12849px;"></div> 
            <div class="bush1" style="left:4300px;"></div> 
            <div class="bush2" style="left:11475px;"></div> 
            <div class="bush1" style="left:8847px;"></div> 
            <div class="bush2" style="left:15026px;"></div> 
            <div class="bush1" style="left:7590px;"></div> 
            <div class="bush1" style="left:30815px;"></div> 
            <div class="bush2" style="left:22985px;"></div> 
            <div class="bush1" style="left:16067px;"></div> 
            <div class="bush1" style="left:28505px;"></div> 
            <div class="bush1" style="left:33194px;"></div> 
            <div class="bush2" style="left:28442px;"></div> 
            <div class="bush2" style="left:18524px;"></div> 
            <div class="bush2" style="left:12812px;"></div> 
            <div class="bush1" style="left:21535px;"></div> 
            <div class="bush2" style="left:14084px;"></div> 
            <div class="bush2" style="left:18294px;"></div> 
            <div class="bush1" style="left:33621px;"></div> 
            <div class="bush2" style="left:5544px;"></div> 
            <div class="bush2" style="left:969px;"></div> 
            <div class="bush1" style="left:20973px;"></div> 
            <div class="bush2" style="left:11541px;"></div> 
            <div class="bush1" style="left:15125px;"></div> 
            <div class="bush1" style="left:9733px;"></div> 
            <div class="bush2" style="left:707px;"></div> 
            <div class="bush1" style="left:27965px;"></div> 
            <div class="bush1" style="left:18557px;"></div> 
            <div class="bush2" style="left:26532px;"></div> 
            <div class="bush1" style="left:18330px;"></div> 
            <div class="bush2" style="left:27552px;"></div> 
            <div class="bush1" style="left:20022px;"></div> 
            <div class="bush2" style="left:10983px;"></div> 
            <div class="bush2" style="left:2714px;"></div> 
            <div class="bush2" style="left:23546px;"></div> 
            <div class="bush2" style="left:8392px;"></div> 
            <div class="bush2" style="left:30441px;"></div> 
            <div class="bush1" style="left:268px;"></div> 
            <div class="bush1" style="left:32220px;"></div> 
            <div class="bush2" style="left:26160px;"></div> 
            <div class="bush2" style="left:32631px;"></div> 
            <div class="bush2" style="left:29044px;"></div> 
            <div class="bush1" style="left:2650px;"></div> 
            <div class="bush2" style="left:29218px;"></div> 
            <div class="bush2" style="left:7838px;"></div> 
            <div class="bush1" style="left:11210px;"></div> 
            <div class="bush1" style="left:33699px;"></div> 
            <div class="bush1" style="left:19477px;"></div> 
            <div class="bush1" style="left:3446px;"></div> 
            <div class="bush1" style="left:21914px;"></div> 
            <div class="bush2" style="left:23466px;"></div> 
            <div class="bush2" style="left:25792px;"></div> 
            <div class="bush1" style="left:18311px;"></div> 
            <div class="bush1" style="left:2660px;"></div> 
            <div class="bush2" style="left:34260px;"></div> 
            <div class="bush2" style="left:18541px;"></div> 
            <div class="bush2" style="left:10664px;"></div> 
            <div class="bush2" style="left:10960px;"></div> 
            <div class="bush1" style="left:10987px;"></div> 
            <div class="bush2" style="left:27077px;"></div> 
            <div class="bush1" style="left:19383px;"></div> 
            <div class="bush2" style="left:13992px;"></div> 
            <div class="bush1" style="left:16219px;"></div> 
            <div class="bush1" style="left:6814px;"></div> 
            <div class="bush1" style="left:23025px;"></div> 
            <div class="bush1" style="left:381px;"></div> 
            <div class="bush1" style="left:35701px;"></div> 
            <div class="bush2" style="left:15179px;"></div> 
            <div class="bush2" style="left:7704px;"></div> 
            <div class="bush1" style="left:6544px;"></div> 
            <div class="bush1" style="left:26978px;"></div> 
            <div class="bush1" style="left:15272px;"></div> 
            <div class="bush1" style="left:30265px;"></div> 
            <div class="bush2" style="left:22420px;"></div> 
            <div class="bush1" style="left:13650px;"></div> 
            <div class="bush2" style="left:2972px;"></div> 
            <div class="bush1" style="left:24108px;"></div> 
            <div class="bush2" style="left:5318px;"></div> 
            <div class="bush1" style="left:24424px;"></div> 
            <div class="bush1" style="left:25129px;"></div> 
            <div class="bush2" style="left:17747px;"></div> 
            <div class="bush2" style="left:31447px;"></div> 
            <div class="bush1" style="left:12276px;"></div> 
            <div class="bush1" style="left:10796px;"></div> 
            <div class="bush2" style="left:25652px;"></div> 
            <div class="bush1" style="left:18162px;"></div> 
            <div class="bush1" style="left:34473px;"></div> 
            <div class="bush2" style="left:13644px;"></div> 
            <div class="bush2" style="left:5377px;"></div> 
            <div class="bush2" style="left:7657px;"></div> 
            <div class="bush1" style="left:6265px;"></div> 
            <div class="bush1" style="left:20078px;"></div> 
            <div class="bush1" style="left:20835px;"></div> 
            <div class="bush2" style="left:31293px;"></div> 
            <div class="bush2" style="left:24676px;"></div> 
            <div class="bush1" style="left:25614px;"></div> 
            <div class="bush1" style="left:35200px;"></div> 
            <div class="bush1" style="left:24943px;"></div> 
            <div class="bush2" style="left:28014px;"></div> 
            <div class="bush2" style="left:31323px;"></div> 
            <div class="bush2" style="left:11953px;"></div> 
            <div class="bush1" style="left:34626px;"></div> 
            <div class="bush1" style="left:23255px;"></div> 
            <div class="bush1" style="left:21460px;"></div> 
            <div class="bush2" style="left:34632px;"></div> 
            <div class="bush2" style="left:4421px;"></div> 
            <div class="bush1" style="left:10079px;"></div> 
            <div class="bush2" style="left:18459px;"></div> 
            <div class="bush2" style="left:6494px;"></div> 
            <div class="bush2" style="left:6978px;"></div> 
            <div class="bush1" style="left:13009px;"></div> 
            <div class="bush2" style="left:7067px;"></div> 
            <div class="bush1" style="left:34112px;"></div> 
            <div class="bush1" style="left:20685px;"></div> 
            <div class="bush2" style="left:12804px;"></div> 
            <div class="bush1" style="left:25406px;"></div> 
            <div class="bush2" style="left:11524px;"></div> 
            <div class="bush2" style="left:32616px;"></div> 
            <div class="bush2" style="left:31994px;"></div> 
            <div class="bush1" style="left:13068px;"></div> 
            <div class="bush1" style="left:12957px;"></div> 
            <div class="bush1" style="left:11654px;"></div> 
            <div class="bush1" style="left:16169px;"></div> 
            <div class="bush1" style="left:29828px;"></div> 
            <div class="bush2" style="left:6468px;"></div> 
            <div class="bush2" style="left:24700px;"></div> 
            <div class="bush2" style="left:10661px;"></div> 
            <div class="bush1" style="left:12383px;"></div> 
            <div class="bush1" style="left:25287px;"></div> 
            <div class="bush1" style="left:15254px;"></div> 
            <div class="bush2" style="left:3960px;"></div> 
            <div class="bush2" style="left:13148px;"></div> 
            <div class="bush1" style="left:25510px;"></div> 
            <div class="bush2" style="left:28019px;"></div> 
            <div class="bush2" style="left:1814px;"></div> 
            <div class="bush2" style="left:23102px;"></div> 
            <div class="bush1" style="left:3425px;"></div> 
            <div class="bush1" style="left:14155px;"></div> 
            <div class="bush1" style="left:19030px;"></div> 
            <div class="bush2" style="left:28264px;"></div> 
            <div class="bush2" style="left:20635px;"></div> 
            <div class="bush2" style="left:16880px;"></div> 
            <div class="bush1" style="left:11768px;"></div> 
            <div class="bush2" style="left:21883px;"></div> 
            <div class="bush1" style="left:21097px;"></div> 
            <div class="bush2" style="left:21765px;"></div> 
            <div class="bush2" style="left:20602px;"></div> 
            <div class="bush1" style="left:29869px;"></div> 
            <div class="bush1" style="left:8563px;"></div> 
            <div class="bush1" style="left:33702px;"></div> 
            <div class="bush1" style="left:22390px;"></div> 
            <div class="bush1" style="left:13082px;"></div> 
            <div class="bush1" style="left:27559px;"></div> 
            <div class="bush2" style="left:25368px;"></div> 
            <div class="bush1" style="left:3731px;"></div> 
            <div class="bush1" style="left:29189px;"></div> 
            <div class="bush2" style="left:27898px;"></div> 
            <div class="bush2" style="left:10492px;"></div> 
            <div class="bush1" style="left:25736px;"></div> 
            <div class="bush2" style="left:11746px;"></div> 
            <div class="bush1" style="left:9098px;"></div> 
            <div class="bush2" style="left:14982px;"></div> 
            <div class="bush1" style="left:12084px;"></div> 
            <div class="bush1" style="left:13085px;"></div> 
            <div class="bush2" style="left:26933px;"></div> 
            <div class="bush2" style="left:6059px;"></div> 
            <div class="bush2" style="left:7878px;"></div> 
            <div class="bush2" style="left:16472px;"></div> 
            <div class="bush1" style="left:5503px;"></div> 
            <div class="bush2" style="left:1755px;"></div> 
            <div class="bush1" style="left:19637px;"></div> 
            <div class="bush1" style="left:9865px;"></div> 
            <div class="bush1" style="left:32567px;"></div> 
            <div class="bush1" style="left:33548px;"></div> 
            <div class="bush2" style="left:14661px;"></div> 
            <div class="bush1" style="left:28595px;"></div> 
            <div class="bush1" style="left:25485px;"></div> 
            <div class="bush2" style="left:17407px;"></div> 
            <div class="bush2" style="left:26254px;"></div> 
            <div class="bush1" style="left:34057px;"></div> 
            <div class="bush2" style="left:704px;"></div> 
            <div class="bush1" style="left:29834px;"></div> 
            <div class="bush1" style="left:24483px;"></div> 
            <div class="bush2" style="left:5016px;"></div> 
            <div class="bush2" style="left:21770px;"></div> 
            <div class="bush1" style="left:9053px;"></div> 
            <div class="bush1" style="left:17641px;"></div> 
            <div class="bush2" style="left:22793px;"></div> 
            <div class="bush1" style="left:30492px;"></div> 
            <div class="bush2" style="left:24402px;"></div> 
            <div class="bush1" style="left:29536px;"></div> 
            <div class="bush1" style="left:6785px;"></div> 
            <div class="bush2" style="left:11346px;"></div> 
            <div class="bush1" style="left:19889px;"></div> 
            <div class="bush1" style="left:24395px;"></div> 
            <div class="bush1" style="left:6064px;"></div> 
            <div class="bush2" style="left:18085px;"></div> 
            <div class="bush1" style="left:1193px;"></div> 
            <div class="bush1" style="left:15168px;"></div> 
            <div class="bush2" style="left:17795px;"></div> 
            <div class="bush1" style="left:10675px;"></div> 
            <div class="bush2" style="left:2854px;"></div> 
            <div class="bush2" style="left:19302px;"></div> 
            <div class="bush2" style="left:2598px;"></div> 
            <div class="bush1" style="left:32222px;"></div> 
            <div class="bush1" style="left:13120px;"></div> 
            <div class="bush1" style="left:1379px;"></div> 
            <div class="bush1" style="left:33439px;"></div> 
            <div class="bush2" style="left:12351px;"></div> 
            <div class="bush1" style="left:9272px;"></div> 
            <div class="bush1" style="left:29423px;"></div> 
            <div class="bush1" style="left:21656px;"></div> 
            <div class="bush1" style="left:27417px;"></div> 
            <div class="bush1" style="left:29027px;"></div> 
            <div class="bush2" style="left:19191px;"></div> 
            <div class="bush2" style="left:23603px;"></div> 
            <div class="bush1" style="left:12976px;"></div> 
            <div class="bush1" style="left:31058px;"></div> 
            <div class="bush2" style="left:29979px;"></div> 
            <div class="bush1" style="left:10135px;"></div> 
            <div class="bush2" style="left:505px;"></div> 
            <div class="bush1" style="left:23519px;"></div> 
            <div class="bush1" style="left:25132px;"></div> 
            <div class="bush2" style="left:27442px;"></div> 
            <div class="bush2" style="left:3649px;"></div> 
            <div class="bush1" style="left:32847px;"></div> 
            <div class="bush1" style="left:12470px;"></div> 
            <div class="bush1" style="left:3457px;"></div> 
            <div class="bush2" style="left:17512px;"></div> 
            <div class="bush1" style="left:5078px;"></div> 
            <div class="bush1" style="left:20450px;"></div> 
            <div class="bush2" style="left:35072px;"></div> 
            <div class="bush1" style="left:25987px;"></div> 
            <div class="bush1" style="left:28673px;"></div> 
            <div class="bush1" style="left:893px;"></div> 
            <div class="bush2" style="left:25745px;"></div> 
            <div class="bush1" style="left:10423px;"></div> 
            <div class="bush1" style="left:12692px;"></div> 
            <div class="bush1" style="left:28630px;"></div> 
            <div class="bush1" style="left:9151px;"></div> 
            <div class="bush1" style="left:23584px;"></div> 
            <div class="bush1" style="left:11672px;"></div> 
            <div class="bush1" style="left:16822px;"></div> 
            <div class="bush1" style="left:35537px;"></div> 
            <div class="bush2" style="left:9392px;"></div> 
            <div class="bush1" style="left:10276px;"></div> 
            <div class="bush2" style="left:12426px;"></div> 
            <div class="bush1" style="left:26212px;"></div> 
            <div class="bush2" style="left:12723px;"></div> 
            <div class="bush2" style="left:1543px;"></div> 
            <div class="bush2" style="left:25530px;"></div> 
            <div class="bush1" style="left:17051px;"></div> 
            <div class="bush2" style="left:6306px;"></div> 
            <div class="bush1" style="left:4696px;"></div> 
            <div class="bush2" style="left:7255px;"></div> 
            <div class="bush1" style="left:20814px;"></div> 
            <div class="bush1" style="left:24933px;"></div> 
            <div class="bush1" style="left:2550px;"></div> 
            <div class="bush1" style="left:1139px;"></div> 
            <div class="bush2" style="left:8405px;"></div> 
            <div class="bush1" style="left:5771px;"></div> 
            <div class="bush2" style="left:7889px;"></div> 
            <div class="bush1" style="left:3901px;"></div> 
            <div class="bush1" style="left:2576px;"></div> 
            <div class="bush1" style="left:34330px;"></div> 
            <div class="bush1" style="left:10445px;"></div> 
            <div class="bush2" style="left:13244px;"></div> 
            <div class="bush1" style="left:26046px;"></div> 
            <div class="bush2" style="left:30725px;"></div> 
            <div class="bush2" style="left:26954px;"></div> 
            <div class="bush1" style="left:5355px;"></div> 
            <div class="bush1" style="left:30892px;"></div> 
            <div class="bush1" style="left:31332px;"></div> 
            <div class="bush1" style="left:12659px;"></div> 
            <div class="bush1" style="left:19498px;"></div> 
            <div class="bush1" style="left:7657px;"></div> 
            <div class="bush1" style="left:24061px;"></div> 
            <div class="bush1" style="left:23038px;"></div> 
            <div class="bush1" style="left:22949px;"></div> 
            <div class="bush1" style="left:20076px;"></div> 
            <div class="bush1" style="left:20208px;"></div> 
            <div class="bush2" style="left:2959px;"></div> 
            <div class="bush1" style="left:7830px;"></div> 
            <div class="bush1" style="left:6954px;"></div> 
            <div class="bush1" style="left:2673px;"></div> 
            <div class="bush2" style="left:26156px;"></div> 
            <div class="bush1" style="left:22956px;"></div> 
            <div class="bush1" style="left:2425px;"></div> 
            <div class="bush1" style="left:24878px;"></div> 
            <div class="bush1" style="left:18207px;"></div> 
            <div class="bush1" style="left:13810px;"></div> 
            <div class="bush1" style="left:28112px;"></div> 

            
            <div class="stone2" style="left:5937px;"></div> 
            <div class="stone2" style="left:26776px;"></div> 
            <div class="stone1" style="left:2013px;"></div> 
            <div class="stone1" style="left:18676px;"></div> 
            <div class="stone1" style="left:11867px;"></div> 
            <div class="stone1" style="left:34212px;"></div> 
            <div class="stone2" style="left:7389px;"></div> 
            <div class="stone2" style="left:13337px;"></div> 
            <div class="stone1" style="left:22082px;"></div> 
            <div class="stone2" style="left:25630px;"></div> 
            <div class="stone2" style="left:17696px;"></div> 
            <div class="stone2" style="left:1774px;"></div> 
            <div class="stone2" style="left:13280px;"></div> 
            <div class="stone2" style="left:23091px;"></div> 
            <div class="stone2" style="left:12985px;"></div> 
            <div class="stone1" style="left:290px;"></div> 
            <div class="stone1" style="left:26301px;"></div> 
            <div class="stone1" style="left:33820px;"></div> 
            <div class="stone1" style="left:3176px;"></div> 
            <div class="stone1" style="left:15337px;"></div> 
            <div class="stone1" style="left:33975px;"></div> 
            <div class="stone1" style="left:30649px;"></div> 
            <div class="stone2" style="left:19025px;"></div> 
            <div class="stone1" style="left:32037px;"></div> 
            <div class="stone2" style="left:7388px;"></div> 
            <div class="stone2" style="left:25895px;"></div> 
            <div class="stone2" style="left:29344px;"></div> 
            <div class="stone1" style="left:6758px;"></div> 
            <div class="stone1" style="left:34264px;"></div> 
            <div class="stone1" style="left:6592px;"></div> 
            <div class="stone2" style="left:3394px;"></div> 
            <div class="stone1" style="left:4981px;"></div> 
            <div class="stone1" style="left:30934px;"></div> 
            <div class="stone1" style="left:22468px;"></div> 
            <div class="stone2" style="left:27209px;"></div> 
            <div class="stone2" style="left:13943px;"></div> 
            <div class="stone2" style="left:24320px;"></div> 
            <div class="stone2" style="left:15948px;"></div> 
            <div class="stone2" style="left:23031px;"></div> 
            <div class="stone2" style="left:17150px;"></div> 
            <div class="stone1" style="left:715px;"></div> 
            <div class="stone2" style="left:15795px;"></div> 
            <div class="stone2" style="left:18048px;"></div> 
            <div class="stone2" style="left:19766px;"></div> 
            <div class="stone1" style="left:19452px;"></div> 
            <div class="stone2" style="left:14486px;"></div> 
            <div class="stone2" style="left:25122px;"></div> 
            <div class="stone2" style="left:17551px;"></div> 
            <div class="stone2" style="left:14068px;"></div> 
            <div class="stone2" style="left:1820px;"></div> 
            <div class="stone2" style="left:10481px;"></div> 
            <div class="stone1" style="left:24280px;"></div> 
            <div class="stone2" style="left:19904px;"></div> 
            <div class="stone2" style="left:35723px;"></div> 
            <div class="stone1" style="left:35298px;"></div> 
            <div class="stone2" style="left:24670px;"></div> 
            <div class="stone2" style="left:22929px;"></div> 
            <div class="stone1" style="left:12792px;"></div> 
            <div class="stone2" style="left:5000px;"></div> 
            <div class="stone1" style="left:26203px;"></div> 
            <div class="stone2" style="left:17062px;"></div> 
            <div class="stone2" style="left:25261px;"></div> 
            <div class="stone1" style="left:23873px;"></div> 
            <div class="stone1" style="left:21832px;"></div> 
            <div class="stone2" style="left:10762px;"></div> 
            <div class="stone2" style="left:9054px;"></div> 
            <div class="stone1" style="left:21892px;"></div> 
            <div class="stone1" style="left:12310px;"></div> 
            <div class="stone1" style="left:3946px;"></div> 
            <div class="stone1" style="left:4139px;"></div> 
            <div class="stone2" style="left:20835px;"></div> 
            <div class="stone2" style="left:30472px;"></div> 
            <div class="stone2" style="left:9418px;"></div> 
            <div class="stone2" style="left:34264px;"></div> 
            <div class="stone1" style="left:13013px;"></div> 
            <div class="stone2" style="left:28968px;"></div> 
            <div class="stone1" style="left:29948px;"></div> 
            <div class="stone2" style="left:27546px;"></div> 
            <div class="stone1" style="left:21376px;"></div> 
            <div class="stone2" style="left:14976px;"></div> 
            <div class="stone1" style="left:32384px;"></div> 
            <div class="stone1" style="left:28052px;"></div> 
            <div class="stone2" style="left:22941px;"></div> 
            <div class="stone1" style="left:1257px;"></div> 
            <div class="stone2" style="left:4106px;"></div> 
            <div class="stone2" style="left:33838px;"></div> 
            <div class="stone2" style="left:23049px;"></div> 
            <div class="stone1" style="left:11024px;"></div> 
            <div class="stone1" style="left:11580px;"></div> 
            <div class="stone1" style="left:10151px;"></div> 
            <div class="stone2" style="left:1145px;"></div> 
            <div class="stone2" style="left:23770px;"></div> 
            <div class="stone2" style="left:14274px;"></div> 
            <div class="stone1" style="left:21070px;"></div> 
            <div class="stone2" style="left:29407px;"></div> 
            <div class="stone2" style="left:7333px;"></div> 
            <div class="stone2" style="left:29237px;"></div> 
            <div class="stone2" style="left:20905px;"></div> 
            <div class="stone2" style="left:14503px;"></div> 
            <div class="stone2" style="left:23399px;"></div> 
            <div class="stone2" style="left:20171px;"></div> 
            <div class="stone1" style="left:25624px;"></div> 
            <div class="stone1" style="left:1937px;"></div> 
            <div class="stone1" style="left:22653px;"></div> 
            <div class="stone1" style="left:16079px;"></div> 
            <div class="stone2" style="left:8551px;"></div> 
            <div class="stone2" style="left:30465px;"></div> 
            <div class="stone2" style="left:6907px;"></div> 
            <div class="stone2" style="left:34877px;"></div> 
            <div class="stone1" style="left:21158px;"></div> 
            <div class="stone1" style="left:22873px;"></div> 
            <div class="stone2" style="left:34582px;"></div> 
            <div class="stone1" style="left:10826px;"></div> 
            <div class="stone1" style="left:24501px;"></div> 
            <div class="stone1" style="left:28407px;"></div> 
            <div class="stone1" style="left:33027px;"></div> 
            <div class="stone2" style="left:19778px;"></div> 
            <div class="stone2" style="left:21627px;"></div> 
            <div class="stone1" style="left:34581px;"></div> 
            <div class="stone1" style="left:957px;"></div> 
            <div class="stone1" style="left:13000px;"></div> 
            <div class="stone2" style="left:8263px;"></div> 
            <div class="stone1" style="left:29745px;"></div> 
            <div class="stone1" style="left:12796px;"></div> 
            <div class="stone2" style="left:14878px;"></div> 
            <div class="stone2" style="left:21040px;"></div> 
            <div class="stone2" style="left:15060px;"></div> 
            <div class="stone1" style="left:12871px;"></div> 
            <div class="stone1" style="left:24518px;"></div> 
            <div class="stone1" style="left:19441px;"></div> 
            <div class="stone2" style="left:18480px;"></div> 
            <div class="stone1" style="left:31636px;"></div> 
            <div class="stone2" style="left:4200px;"></div> 
            <div class="stone2" style="left:10684px;"></div> 
            <div class="stone1" style="left:11473px;"></div> 
            <div class="stone1" style="left:9987px;"></div> 
            <div class="stone2" style="left:17294px;"></div> 
            <div class="stone2" style="left:14272px;"></div> 
            <div class="stone1" style="left:30449px;"></div> 
            <div class="stone2" style="left:589px;"></div> 
            <div class="stone1" style="left:15432px;"></div> 
            <div class="stone1" style="left:32859px;"></div> 
            <div class="stone1" style="left:3534px;"></div> 
            <div class="stone1" style="left:27722px;"></div> 
            <div class="stone1" style="left:4926px;"></div> 
            <div class="stone2" style="left:8681px;"></div> 
            <div class="stone1" style="left:32637px;"></div> 
            <div class="stone2" style="left:23015px;"></div> 
            <div class="stone2" style="left:15333px;"></div> 
            <div class="stone2" style="left:26762px;"></div> 
            <div class="stone2" style="left:22596px;"></div> 
            <div class="stone1" style="left:27034px;"></div> 
            <div class="stone2" style="left:11565px;"></div> 
            <div class="stone2" style="left:4005px;"></div> 
            <div class="stone1" style="left:646px;"></div> 
            <div class="stone2" style="left:25822px;"></div> 
            <div class="stone2" style="left:5195px;"></div> 
            <div class="stone1" style="left:13888px;"></div> 
            <div class="stone2" style="left:26283px;"></div> 
            <div class="stone1" style="left:458px;"></div> 
            <div class="stone1" style="left:16709px;"></div> 
            <div class="stone1" style="left:3860px;"></div> 
            <div class="stone2" style="left:29932px;"></div> 
            <div class="stone1" style="left:27792px;"></div> 
            <div class="stone2" style="left:29201px;"></div> 
            <div class="stone1" style="left:26029px;"></div> 
            <div class="stone2" style="left:10657px;"></div> 
            <div class="stone1" style="left:5820px;"></div> 
            <div class="stone2" style="left:20186px;"></div> 
            <div class="stone1" style="left:24643px;"></div> 
            <div class="stone1" style="left:5759px;"></div> 
            <div class="stone2" style="left:24080px;"></div> 
            <div class="stone1" style="left:8337px;"></div> 
            <div class="stone1" style="left:4394px;"></div> 
            <div class="stone2" style="left:7757px;"></div> 
            <div class="stone1" style="left:11433px;"></div> 
            <div class="stone2" style="left:35627px;"></div> 
            <div class="stone2" style="left:20605px;"></div> 
            <div class="stone1" style="left:6062px;"></div> 
            <div class="stone2" style="left:17561px;"></div> 
            <div class="stone2" style="left:9196px;"></div> 
            <div class="stone2" style="left:7370px;"></div> 
            <div class="stone2" style="left:21814px;"></div> 
            <div class="stone2" style="left:17586px;"></div> 
            <div class="stone1" style="left:19991px;"></div> 
            <div class="stone1" style="left:26969px;"></div> 
            <div class="stone2" style="left:34028px;"></div> 
            <div class="stone1" style="left:21891px;"></div> 
            <div class="stone1" style="left:26687px;"></div> 
            <div class="stone2" style="left:12255px;"></div> 
            <div class="stone1" style="left:19828px;"></div> 
            <div class="stone2" style="left:34706px;"></div> 
            <div class="stone2" style="left:7282px;"></div> 
            <div class="stone1" style="left:16931px;"></div> 
            <div class="stone2" style="left:7799px;"></div> 
            <div class="stone2" style="left:31373px;"></div> 
            <div class="stone2" style="left:5848px;"></div> 
            <div class="stone1" style="left:22759px;"></div> 
            <div class="stone1" style="left:22260px;"></div> 
            <div class="stone2" style="left:21824px;"></div> 
            <div class="stone2" style="left:30302px;"></div> 
            <div class="stone2" style="left:29517px;"></div> 
            <div class="stone1" style="left:14508px;"></div> 
            <div class="stone2" style="left:2114px;"></div> 
            <div class="stone2" style="left:24822px;"></div> 
            <div class="stone2" style="left:29499px;"></div> 
            <div class="stone2" style="left:1727px;"></div> 
            <div class="stone1" style="left:26450px;"></div> 
            <div class="stone2" style="left:9449px;"></div> 
            <div class="stone2" style="left:30131px;"></div> 
            <div class="stone1" style="left:351px;"></div> 
            <div class="stone2" style="left:8575px;"></div> 
            <div class="stone2" style="left:26755px;"></div> 
            <div class="stone1" style="left:4030px;"></div> 
            <div class="stone1" style="left:25877px;"></div> 
            <div class="stone1" style="left:29340px;"></div> 
            <div class="stone2" style="left:14913px;"></div> 
            <div class="stone2" style="left:31990px;"></div> 
            <div class="stone2" style="left:22955px;"></div> 
            <div class="stone1" style="left:16887px;"></div> 
            <div class="stone1" style="left:22170px;"></div> 
            <div class="stone1" style="left:6311px;"></div> 
            <div class="stone2" style="left:23286px;"></div> 
            <div class="stone1" style="left:6666px;"></div> 
            <div class="stone1" style="left:3929px;"></div> 
            <div class="stone1" style="left:18256px;"></div> 
            <div class="stone1" style="left:12824px;"></div> 
            <div class="stone1" style="left:31687px;"></div> 
            <div class="stone1" style="left:4932px;"></div> 
            <div class="stone1" style="left:17512px;"></div> 
            <div class="stone2" style="left:15402px;"></div> 
            <div class="stone2" style="left:32682px;"></div> 
            <div class="stone2" style="left:2103px;"></div> 
            <div class="stone1" style="left:15158px;"></div> 
            <div class="stone2" style="left:19929px;"></div> 
            <div class="stone1" style="left:15392px;"></div> 
            <div class="stone1" style="left:5934px;"></div> 
            <div class="stone2" style="left:31212px;"></div> 
            <div class="stone1" style="left:5940px;"></div> 
            <div class="stone1" style="left:12603px;"></div> 
            <div class="stone1" style="left:29184px;"></div> 
            <div class="stone2" style="left:11876px;"></div> 
            <div class="stone1" style="left:7433px;"></div> 
            <div class="stone1" style="left:12702px;"></div> 
            <div class="stone2" style="left:4607px;"></div> 
            <div class="stone1" style="left:17031px;"></div> 
            <div class="stone1" style="left:28235px;"></div> 
            <div class="stone1" style="left:8229px;"></div> 
            <div class="stone2" style="left:24078px;"></div> 
            <div class="stone1" style="left:34522px;"></div> 
            <div class="stone1" style="left:28963px;"></div> 
            <div class="stone1" style="left:7999px;"></div> 
            <div class="stone1" style="left:25797px;"></div> 
            <div class="stone1" style="left:30834px;"></div> 
            <div class="stone2" style="left:32444px;"></div> 
            <div class="stone1" style="left:33628px;"></div> 
            <div class="stone1" style="left:11645px;"></div> 
            <div class="stone2" style="left:35265px;"></div> 
            <div class="stone1" style="left:33199px;"></div> 
            <div class="stone1" style="left:5108px;"></div> 
            <div class="stone1" style="left:1802px;"></div> 
            <div class="stone2" style="left:30040px;"></div> 
            <div class="stone2" style="left:14084px;"></div> 
            <div class="stone2" style="left:1855px;"></div> 
            <div class="stone1" style="left:1559px;"></div> 
            <div class="stone2" style="left:34136px;"></div> 
            <div class="stone2" style="left:19300px;"></div> 
            <div class="stone1" style="left:7580px;"></div> 
            <div class="stone2" style="left:28006px;"></div> 
            <div class="stone2" style="left:3167px;"></div> 
            <div class="stone1" style="left:15837px;"></div> 
            <div class="stone1" style="left:27760px;"></div> 
            <div class="stone2" style="left:27436px;"></div> 
            <div class="stone1" style="left:33963px;"></div> 
            <div class="stone2" style="left:11334px;"></div> 
            <div class="stone2" style="left:30104px;"></div> 
            <div class="stone2" style="left:1897px;"></div> 
            <div class="stone2" style="left:17656px;"></div> 
            <div class="stone2" style="left:18633px;"></div> 
            <div class="stone2" style="left:11557px;"></div> 
            <div class="stone2" style="left:13696px;"></div> 
            <div class="stone2" style="left:34785px;"></div> 
            <div class="stone2" style="left:12402px;"></div> 
            <div class="stone1" style="left:3351px;"></div> 
            <div class="stone2" style="left:13695px;"></div> 
            <div class="stone2" style="left:1965px;"></div> 
            <div class="stone2" style="left:12934px;"></div> 
            <div class="stone2" style="left:34879px;"></div> 
            <div class="stone2" style="left:32881px;"></div> 
            <div class="stone2" style="left:31994px;"></div> 
            <div class="stone2" style="left:17225px;"></div> 
            <div class="stone1" style="left:22628px;"></div> 
            <div class="stone1" style="left:8410px;"></div> 
            <div class="stone1" style="left:17417px;"></div> 
            <div class="stone2" style="left:7057px;"></div> 
            <div class="stone2" style="left:5020px;"></div> 
            <div class="stone2" style="left:30688px;"></div> 
            <div class="stone2" style="left:9279px;"></div> 
            <div class="stone1" style="left:31590px;"></div> 
            <div class="stone2" style="left:17709px;"></div> 
            <div class="stone2" style="left:2385px;"></div> 
            <div class="stone2" style="left:21951px;"></div> 
            <div class="stone1" style="left:33880px;"></div> 
            <div class="stone1" style="left:10745px;"></div> 
            <div class="stone1" style="left:3994px;"></div> 
            <div class="stone1" style="left:20389px;"></div> 
            <div class="stone1" style="left:26442px;"></div> 
            <div class="stone1" style="left:19219px;"></div> 
            <div class="stone2" style="left:2466px;"></div> 
            <div class="stone2" style="left:18980px;"></div> 
            <div class="stone1" style="left:6540px;"></div> 
            <div class="stone2" style="left:13411px;"></div> 
            <div class="stone2" style="left:26015px;"></div> 
            <div class="stone2" style="left:10145px;"></div> 
            <div class="stone1" style="left:20450px;"></div> 
            <div class="stone2" style="left:25690px;"></div> 
            <div class="stone1" style="left:28090px;"></div> 
            <div class="stone2" style="left:16535px;"></div> 
            <div class="stone1" style="left:26450px;"></div> 
            <div class="stone1" style="left:34656px;"></div> 
            <div class="stone2" style="left:9084px;"></div> 
            <div class="stone1" style="left:28152px;"></div> 
            <div class="stone2" style="left:20727px;"></div> 
            <div class="stone2" style="left:19000px;"></div> 
            <div class="stone1" style="left:1155px;"></div> 
            <div class="stone1" style="left:19405px;"></div> 
            <div class="stone1" style="left:32277px;"></div> 
            <div class="stone2" style="left:9234px;"></div> 
            <div class="stone1" style="left:28170px;"></div> 
            <div class="stone2" style="left:34610px;"></div> 
            <div class="stone1" style="left:31775px;"></div> 
            <div class="stone1" style="left:14632px;"></div> 
            <div class="stone2" style="left:1392px;"></div> 
            <div class="stone1" style="left:19734px;"></div> 
            <div class="stone2" style="left:5767px;"></div> 
            <div class="stone1" style="left:34629px;"></div> 
            <div class="stone2" style="left:15265px;"></div> 
            <div class="stone2" style="left:11595px;"></div> 
            <div class="stone1" style="left:6013px;"></div> 
            <div class="stone2" style="left:11608px;"></div> 
            <div class="stone1" style="left:23333px;"></div> 
            <div class="stone2" style="left:16888px;"></div> 
            <div class="stone1" style="left:21323px;"></div> 
            <div class="stone1" style="left:19129px;"></div> 
            <div class="stone2" style="left:21880px;"></div> 
            <div class="stone1" style="left:30056px;"></div> 
            <div class="stone1" style="left:9186px;"></div> 
            <div class="stone1" style="left:7447px;"></div> 
            <div class="stone2" style="left:2506px;"></div> 
            <div class="stone1" style="left:8214px;"></div> 
            <div class="stone1" style="left:26798px;"></div> 
            <div class="stone1" style="left:13552px;"></div> 
            <div class="stone2" style="left:14530px;"></div> 
            <div class="stone1" style="left:22710px;"></div> 
            <div class="stone1" style="left:1298px;"></div> 
            <div class="stone2" style="left:22698px;"></div> 
            <div class="stone1" style="left:31111px;"></div> 
            <div class="stone2" style="left:12142px;"></div> 
            <div class="stone1" style="left:17733px;"></div> 
            <div class="stone1" style="left:8107px;"></div> 
            <div class="stone2" style="left:7216px;"></div> 
            <div class="stone2" style="left:25225px;"></div> 
            <div class="stone2" style="left:5030px;"></div> 
            <div class="stone1" style="left:1291px;"></div> 
            <div class="stone1" style="left:29642px;"></div> 
            <div class="stone1" style="left:20762px;"></div> 
            <div class="stone1" style="left:1386px;"></div> 
            <div class="stone2" style="left:27741px;"></div> 
            <div class="stone2" style="left:14654px;"></div> 
            <div class="stone1" style="left:2986px;"></div> 
            <div class="stone2" style="left:26939px;"></div> 
            <div class="stone1" style="left:24995px;"></div> 
            <div class="stone2" style="left:11073px;"></div> 
            <div class="stone2" style="left:4225px;"></div> 
            <div class="stone1" style="left:34862px;"></div> 
            <div class="stone2" style="left:4416px;"></div> 
            <div class="stone2" style="left:11367px;"></div> 
            <div class="stone2" style="left:28538px;"></div> 
            <div class="stone1" style="left:7931px;"></div> 
            <div class="stone1" style="left:34338px;"></div> 
            <div class="stone2" style="left:12754px;"></div> 
            <div class="stone1" style="left:35069px;"></div> 
            <div class="stone2" style="left:25729px;"></div> 
            <div class="stone2" style="left:13852px;"></div> 
            <div class="stone1" style="left:442px;"></div> 
            <div class="stone1" style="left:9531px;"></div> 
            <div class="stone2" style="left:32581px;"></div> 
            <div class="stone1" style="left:8474px;"></div> 
            <div class="stone2" style="left:24496px;"></div> 
            <div class="stone2" style="left:30419px;"></div> 
            <div class="stone1" style="left:33450px;"></div> 
            <div class="stone1" style="left:32489px;"></div> 
            <div class="stone2" style="left:761px;"></div> 
            <div class="stone1" style="left:32143px;"></div> 
            <div class="stone1" style="left:3795px;"></div> 
            <div class="stone2" style="left:17074px;"></div> 
            <div class="stone2" style="left:5157px;"></div> 
            <div class="stone1" style="left:30027px;"></div> 
            <div class="stone2" style="left:12719px;"></div> 
            <div class="stone1" style="left:27743px;"></div> 

            <div class="deadbush" style="left:6875px;"></div> 
            <div class="deadbush" style="left:6798px;"></div> 
            <div class="deadbush" style="left:20743px;"></div> 
            <div class="deadbush" style="left:11656px;"></div> 
            <div class="deadbush" style="left:3039px;"></div> 
            <div class="deadbush" style="left:23062px;"></div> 
            <div class="deadbush" style="left:1652px;"></div> 
            <div class="deadbush" style="left:17700px;"></div> 
            <div class="deadbush" style="left:24117px;"></div> 
            <div class="deadbush" style="left:22690px;"></div> 
            <div class="deadbush" style="left:31446px;"></div> 
            <div class="deadbush" style="left:3101px;"></div> 
            <div class="deadbush" style="left:17859px;"></div> 
            <div class="deadbush" style="left:35989px;"></div> 
            <div class="deadbush" style="left:20065px;"></div> 
            <div class="deadbush" style="left:35922px;"></div> 
            <div class="deadbush" style="left:5422px;"></div> 
            <div class="deadbush" style="left:28748px;"></div> 
            <div class="deadbush" style="left:20121px;"></div> 
            <div class="deadbush" style="left:20260px;"></div> 
            <div class="deadbush" style="left:10944px;"></div> 
            <div class="deadbush" style="left:4839px;"></div> 
            <div class="deadbush" style="left:24737px;"></div> 
            <div class="deadbush" style="left:28190px;"></div> 
            <div class="deadbush" style="left:20293px;"></div> 
            <div class="deadbush" style="left:3582px;"></div> 
            <div class="deadbush" style="left:16475px;"></div> 
            <div class="deadbush" style="left:4702px;"></div> 
            <div class="deadbush" style="left:29267px;"></div> 
            <div class="deadbush" style="left:6290px;"></div> 
            <div class="deadbush" style="left:28099px;"></div> 
            <div class="deadbush" style="left:27036px;"></div> 
            <div class="deadbush" style="left:21323px;"></div> 
            <div class="deadbush" style="left:12727px;"></div> 
            <div class="deadbush" style="left:10819px;"></div> 
            <div class="deadbush" style="left:33253px;"></div> 
            <div class="deadbush" style="left:30657px;"></div> 
            <div class="deadbush" style="left:26780px;"></div> 
            <div class="deadbush" style="left:6918px;"></div> 
            <div class="deadbush" style="left:35378px;"></div> 
            <div class="deadbush" style="left:3165px;"></div> 
            <div class="deadbush" style="left:23398px;"></div> 
            <div class="deadbush" style="left:5815px;"></div> 
            <div class="deadbush" style="left:23082px;"></div> 
            <div class="deadbush" style="left:28496px;"></div> 
            <div class="deadbush" style="left:29413px;"></div> 
            <div class="deadbush" style="left:35135px;"></div> 
            <div class="deadbush" style="left:29482px;"></div> 
            <div class="deadbush" style="left:34356px;"></div> 
            <div class="deadbush" style="left:33491px;"></div> 
            <div class="deadbush" style="left:29770px;"></div> 
            <div class="deadbush" style="left:5314px;"></div> 
            <div class="deadbush" style="left:29270px;"></div> 
            <div class="deadbush" style="left:31720px;"></div> 
            <div class="deadbush" style="left:34490px;"></div> 
            <div class="deadbush" style="left:27525px;"></div> 
            <div class="deadbush" style="left:16047px;"></div> 
            <div class="deadbush" style="left:24944px;"></div> 
            <div class="deadbush" style="left:28501px;"></div> 
            <div class="deadbush" style="left:24394px;"></div> 
            <div class="deadbush" style="left:31744px;"></div> 
            <div class="deadbush" style="left:6297px;"></div> 
            <div class="deadbush" style="left:12917px;"></div> 
            <div class="deadbush" style="left:31786px;"></div> 
            <div class="deadbush" style="left:7523px;"></div> 
            <div class="deadbush" style="left:21781px;"></div> 
            <div class="deadbush" style="left:33044px;"></div> 
            <div class="deadbush" style="left:29411px;"></div> 
            <div class="deadbush" style="left:19585px;"></div> 
            <div class="deadbush" style="left:14710px;"></div> 
            <div class="deadbush" style="left:6396px;"></div> 
            <div class="deadbush" style="left:2724px;"></div> 
            <div class="deadbush" style="left:28404px;"></div> 
            <div class="deadbush" style="left:2191px;"></div> 
            <div class="deadbush" style="left:28065px;"></div> 
            <div class="deadbush" style="left:31322px;"></div> 
            <div class="deadbush" style="left:9934px;"></div> 
            <div class="deadbush" style="left:8802px;"></div> 
            <div class="deadbush" style="left:16118px;"></div> 
            <div class="deadbush" style="left:17504px;"></div> 
            <div class="deadbush" style="left:24222px;"></div> 
            <div class="deadbush" style="left:10183px;"></div> 
            <div class="deadbush" style="left:5391px;"></div> 
            <div class="deadbush" style="left:5308px;"></div> 
            <div class="deadbush" style="left:11486px;"></div> 
            <div class="deadbush" style="left:18145px;"></div> 
            <div class="deadbush" style="left:21368px;"></div> 
            <div class="deadbush" style="left:26813px;"></div> 
            <div class="deadbush" style="left:16304px;"></div> 
            <div class="deadbush" style="left:20990px;"></div> 
            <div class="deadbush" style="left:19897px;"></div> 
            <div class="deadbush" style="left:20080px;"></div> 
            <div class="deadbush" style="left:32346px;"></div> 
            <div class="deadbush" style="left:13539px;"></div> 
            <div class="deadbush" style="left:18779px;"></div> 
            <div class="deadbush" style="left:24548px;"></div> 
            <div class="deadbush" style="left:16349px;"></div> 
            <div class="deadbush" style="left:3314px;"></div> 
            <div class="deadbush" style="left:31092px;"></div> 
            <div class="deadbush" style="left:31784px;"></div> 

            <div class="skeleton" style="left:9034px;"></div> 
            <div class="skeleton" style="left:19807px;"></div> 
            <div class="skeleton" style="left:1131px;"></div> 
            <div class="skeleton" style="left:11324px;"></div> 
            <div class="skeleton" style="left:9513px;"></div> 
            <div class="skeleton" style="left:35312px;"></div> 
            <div class="skeleton" style="left:13964px;"></div> 
            <div class="skeleton" style="left:32351px;"></div> 
            <div class="skeleton" style="left:27180px;"></div> 
            <div class="skeleton" style="left:1784px;"></div> 
            <div class="skeleton" style="left:19131px;"></div> 
            <div class="skeleton" style="left:11279px;"></div> 
            <div class="skeleton" style="left:15358px;"></div> 
            <div class="skeleton" style="left:24618px;"></div> 
            <div class="skeleton" style="left:17486px;"></div> 
            <div class="skeleton" style="left:24455px;"></div> 
            <div class="skeleton" style="left:27538px;"></div> 
            <div class="skeleton" style="left:7825px;"></div> 
            <div class="skeleton" style="left:19475px;"></div> 
            <div class="skeleton" style="left:23043px;"></div> 
            <div class="skeleton" style="left:12119px;"></div> 
            <div class="skeleton" style="left:26666px;"></div> 
            <div class="skeleton" style="left:34651px;"></div> 
            <div class="skeleton" style="left:15805px;"></div> 
            <div class="skeleton" style="left:13831px;"></div> 
            <div class="skeleton" style="left:7308px;"></div> 
            <div class="skeleton" style="left:18259px;"></div> 
            <div class="skeleton" style="left:17279px;"></div> 
            <div class="skeleton" style="left:30944px;"></div> 
            <div class="skeleton" style="left:24841px;"></div> 
            <div class="skeleton" style="left:5291px;"></div> 
            <div class="skeleton" style="left:21799px;"></div> 
            <div class="skeleton" style="left:3643px;"></div> 
            <div class="skeleton" style="left:2372px;"></div> 
            <div class="skeleton" style="left:21970px;"></div> 
            <div class="skeleton" style="left:12900px;"></div> 
            <div class="skeleton" style="left:15441px;"></div> 
            <div class="skeleton" style="left:23663px;"></div> 
            <div class="skeleton" style="left:3671px;"></div> 
            <div class="skeleton" style="left:20102px;"></div> 
            <div class="skeleton" style="left:1374px;"></div> 
            <div class="skeleton" style="left:23165px;"></div> 
            <div class="skeleton" style="left:17408px;"></div> 
            <div class="skeleton" style="left:19818px;"></div> 
            <div class="skeleton" style="left:34575px;"></div> 
            <div class="skeleton" style="left:17913px;"></div> 
            <div class="skeleton" style="left:17814px;"></div> 
            <div class="skeleton" style="left:31131px;"></div> 
            <div class="skeleton" style="left:8887px;"></div> 
            <div class="skeleton" style="left:9366px;"></div> 
            <div class="skeleton" style="left:15301px;"></div> 
            <div class="skeleton" style="left:34504px;"></div> 
            <div class="skeleton" style="left:32060px;"></div> 
            <div class="skeleton" style="left:13079px;"></div> 
            <div class="skeleton" style="left:21260px;"></div> 
            <div class="skeleton" style="left:10890px;"></div> 
            <div class="skeleton" style="left:3735px;"></div> 
            <div class="skeleton" style="left:13618px;"></div> 
            <div class="skeleton" style="left:9347px;"></div> 
            <div class="skeleton" style="left:20140px;"></div> 
            <div class="skeleton" style="left:1139px;"></div> 
            <div class="skeleton" style="left:12134px;"></div> 
            <div class="skeleton" style="left:19682px;"></div> 
            <div class="skeleton" style="left:27447px;"></div> 
            <div class="skeleton" style="left:6605px;"></div> 
            <div class="skeleton" style="left:22658px;"></div> 
            <div class="skeleton" style="left:25213px;"></div> 
            <div class="skeleton" style="left:33080px;"></div> 
            <div class="skeleton" style="left:8821px;"></div> 
            <div class="skeleton" style="left:34821px;"></div> 
            <div class="skeleton" style="left:4553px;"></div> 
            <div class="skeleton" style="left:5242px;"></div> 
            <div class="skeleton" style="left:23537px;"></div> 
            <div class="skeleton" style="left:34291px;"></div> 
            <div class="skeleton" style="left:5485px;"></div> 
            <div class="skeleton" style="left:17146px;"></div> 
            <div class="skeleton" style="left:9332px;"></div> 
            <div class="skeleton" style="left:26308px;"></div> 
            <div class="skeleton" style="left:665px;"></div> 
            <div class="skeleton" style="left:5069px;"></div> 
            <div class="skeleton" style="left:28033px;"></div> 
            <div class="skeleton" style="left:22555px;"></div> 
            <div class="skeleton" style="left:2734px;"></div> 
            <div class="skeleton" style="left:30764px;"></div> 
            <div class="skeleton" style="left:9705px;"></div> 
            <div class="skeleton" style="left:8463px;"></div> 
            <div class="skeleton" style="left:14669px;"></div> 
            <div class="skeleton" style="left:33468px;"></div> 
            <div class="skeleton" style="left:15092px;"></div> 
            <div class="skeleton" style="left:31996px;"></div> 
            <div class="skeleton" style="left:23432px;"></div> 
            <div class="skeleton" style="left:28308px;"></div> 
            <div class="skeleton" style="left:32074px;"></div> 
            <div class="skeleton" style="left:15855px;"></div> 
            <div class="skeleton" style="left:35973px;"></div> 
            <div class="skeleton" style="left:7156px;"></div> 
            <div class="skeleton" style="left:15824px;"></div> 
            <div class="skeleton" style="left:19523px;"></div> 
            <div class="skeleton" style="left:4367px;"></div> 
            <div class="skeleton" style="left:11065px;"></div> 


            


            

         </div>
      </div>
      <div style="position:absolute; bottom:128px; left:201px; z-index:10000" id="box">
         <div style="position:relative;" id="div2">
            <span id="playerContainer">
               <img style="width: 80px; height: 120px;" src="images/game-player/0-idle/Idle__000.png"  id="player-idle"  />
               <img style="display: none; width: 110px; height: 130px;" src="images/game-player/2-jump/Jump__000.png"  id="player-jump" />
               <img style="display: none; width: 110px; height: 130px;" src="images/game-player/3-run/Run__000.png"  id="player-run" />
               <img style="display: none; width: 110px; height: 130px;" src="images/game-player/1-dead/Dead__000.png"  id="player-die" />
            </span>
         </div>
      </div>
      </div>

      <!--Game Over Box-->
      <div style="width:100%; margin-top:10%; position:fixed; width:100%; left:0px; top:0px; z-index:99999999; display:none; " id="gameoverbox">
         <div style="width:500px; height: 250px;  margin:auto; background-color:#FFFF99; border:5px solid #CC0000; box-shadow:0px 0px 30px #000; border-radius:10px; padding:20px; text-align:center; ">
            <h1 class="style1">Game Over</h1>
            <div style="font-size:25px; font-weight:bold; margin-bottom:10px; margin-top:10px;" >Total Score <span id="showscor"></span></div>
            <div style="margin-top:10px; font-size:13px;">Retry</div>
            <form style="margin-top:20px;">
               <a href="level-5.php" style="text-decoration: none; background-color:#CC3300; border-radius:10px; padding:10px; color:#FFFFFF; border:2px solid #000; font-size:18px; font-family:Verdana, Arial, Helvetica, sans-serif;">Start Over</a>
            </form>
         </div>
      </div>

      <div id="scoreb" style=" padding:10px; background-color:#CC0000; color:#FFFFFF; font-size:25px; font-weight:bold; position:fixed; right:10px; top:10px; border:5px #FFFFFF; border-radius:50px;" >Score : <span id="doughnuts">0</span></div>
      <!--Score Box-->

   </body>

   <script type="text/javascript" src="js/level-5/script-2.js"></script>
   <script type="text/javascript" src="js/level-5/timer-ticker-script.js"></script>
   


</html>