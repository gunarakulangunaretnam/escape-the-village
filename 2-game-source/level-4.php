<?php

include '../1-landing-page-source/php-classes/php-curd-class.php';

session_start();

if (!isset($_SESSION['SESSION_EXISTS']))
{
    
    header("Location: ../1-landing-page-source/index.php");
    die();

}else{

    $finishedLevels = "";

    $dataObj = new DatabaseCURD();

    $SessionValue = $_SESSION['SESSION_VALUE'];

    $data = $dataObj->SelectQuery("SELECT finished_levels FROM game_data WHERE email = '$SessionValue'");

    if ($data->num_rows > 0) {

        while($row = $data->fetch_assoc()) {

            $finishedLevels = $row["finished_levels"];
        }
    

    }else{

        header("Location: ../1-landing-page-source/index.php");
        die();
        
    }


    if(intval($finishedLevels) >= 4){

      //Do nothing

    }else{

        header("Location: game-menu-start-game.php");
        die();
    }


}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="js/jquery-3.6.1.min.JS"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
    <script type="text/javascript" src="js/level-4/main.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/level-4/main.css" rel="stylesheet" type="text/css" />
    <link href="css/level-4/custom.css" rel="stylesheet" type="text/css" />
    <link href="css/level-4/timer-ticker-style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/level-4/script-1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>


    <div id="level-1-cover-box">

        <a class="btn btn-danger btn-lg" href="game-menu-start-game.php"
            style="color:white; font-weight:bold;position:absolute; left: 2%; top:5%; border:2px solid black;">
            <i class="fa fa-home"></i> Go to Menu</a>

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

            <div style="position:absolute; z-index:111; left:19067px; bottom:60px;"'>
               <div style=" position:relative;">
                  <img style="width: 180px; height: 180px;" src="images/enm_stage1/ant.gif"/>
                  <div style="position:absolute; width:60px; left:20px; top:0px; height:100px;"  id="enm1"></div>
               </div>
           </div>
 
<div style="position:absolute; z-index:111; left:20040px; bottom:60px;"'>
                <div style=" position:relative;">
                    <img style="width: 180px; height: 180px;" src="images/enm_stage1/ant.gif" />
                    <div style="position:absolute; width:60px; left:20px; top:0px; height:100px;" id="enm2"></div>
                </div>
            </div>

            <div style="position:absolute; z-index:111; left:14110px; bottom:60px;"'>
               <div style=" position:relative;">
                  <img style="width: 180px; height: 180px;" src="images/enm_stage1/ant.gif"/>
                  <div style="position:absolute; width:60px; left:20px; top:0px; height:100px;"  id="enm3"></div>
               </div>
           </div>
 
<div style="position:absolute; z-index:111; left:8359px; bottom:60px;"'>
                <div style=" position:relative;">
                    <img style="width: 180px; height: 180px;" src="images/enm_stage1/ant.gif" />
                    <div style="position:absolute; width:60px; left:20px; top:0px; height:100px;" id="enm4"></div>
                </div>
            </div>

            <div style="position:absolute; z-index:111; left:15160px; bottom:60px;"'>
               <div style=" position:relative;">
                  <img style="width: 180px; height: 180px;" src="images/enm_stage1/ant.gif"/>
                  <div style="position:absolute; width:60px; left:20px; top:0px; height:100px;"  id="enm5"></div>
               </div>
           </div>
 
<div style="position:absolute; z-index:111; left:12288px; bottom:60px;"'>
                <div style=" position:relative;">
                    <img style="width: 180px; height: 180px;" src="images/enm_stage1/ant.gif" />
                    <div style="position:absolute; width:60px; left:20px; top:0px; height:100px;" id="enm6"></div>
                </div>
            </div>

            <div style="position:absolute; z-index:111; left:5057px; bottom:60px;"'>
               <div style=" position:relative;">
                  <img style="width: 180px; height: 180px;" src="images/enm_stage1/ant.gif"/>
                  <div style="position:absolute; width:60px; left:20px; top:0px; height:100px;"  id="enm7"></div>
               </div>
           </div>
 
<div style="position:absolute; z-index:111; left:27585px; bottom:60px;"'>
                <div style=" position:relative;">
                    <img style="width: 180px; height: 180px;" src="images/enm_stage1/ant.gif" />
                    <div style="position:absolute; width:60px; left:20px; top:0px; height:100px;" id="enm8"></div>
                </div>
            </div>

            <div style="position:absolute; z-index:111; left:5553px; bottom:60px;"'>
               <div style=" position:relative;">
                  <img style="width: 180px; height: 180px;" src="images/enm_stage1/ant.gif"/>
                  <div style="position:absolute; width:60px; left:20px; top:0px; height:100px;"  id="enm9"></div>
               </div>
           </div>
 
<div style="position:absolute; z-index:111; left:11190px; bottom:60px;"'>
                <div style=" position:relative;">
                    <img style="width: 180px; height: 180px;" src="images/enm_stage1/ant.gif" />
                    <div style="position:absolute; width:60px; left:20px; top:0px; height:100px;" id="enm10"></div>
                </div>
            </div>

            <div style="position:absolute; z-index:111; left:24102px; bottom:60px;"'>
               <div style=" position:relative;">
                  <img style="width: 180px; height: 180px;" src="images/enm_stage1/ant.gif"/>
                  <div style="position:absolute; width:60px; left:20px; top:0px; height:100px;"  id="enm11"></div>
               </div>
           </div>
 
<div style="position:absolute; z-index:111; left:16056px; bottom:60px;"'>
                <div style=" position:relative;">
                    <img style="width: 180px; height: 180px;" src="images/enm_stage1/ant.gif" />
                    <div style="position:absolute; width:60px; left:20px; top:0px; height:100px;" id="enm12"></div>
                </div>
            </div>









            <div class="enmybox MovingObjects">

                <!-- Finsih line -->

                <!-- Birds Collections -->
                <div style="position:relative; width:100%; overflow:visible;">
                    <img src="images/enm_stage1/bird-4.gif" class="MovingObjects"
                        style="position:absolute; left:3577px; bottom:317px;" id="skybirds-enm1" />
                    <img src="images/enm_stage1/bird-5.gif" class="MovingObjects"
                        style="position:absolute; left:23077px; bottom:314px;" id="skybirds-enm2" />
                    <img src="images/enm_stage1/bird-5.gif" class="MovingObjects"
                        style="position:absolute; left:17144px; bottom:294px;" id="skybirds-enm3" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:12020px; bottom:291px;" id="skybirds-enm4" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:35934px; bottom:289px;" id="skybirds-enm5" />
                    <img src="images/enm_stage1/bird-4.gif" class="MovingObjects"
                        style="position:absolute; left:11136px; bottom:295px;" id="skybirds-enm6" />
                    <img src="images/enm_stage1/bird-4.gif" class="MovingObjects"
                        style="position:absolute; left:26163px; bottom:307px;" id="skybirds-enm7" />
                    <img src="images/enm_stage1/bird-4.gif" class="MovingObjects"
                        style="position:absolute; left:17170px; bottom:298px;" id="skybirds-enm8" />
                    <img src="images/enm_stage1/bird-4.gif" class="MovingObjects"
                        style="position:absolute; left:18134px; bottom:280px;" id="skybirds-enm9" />
                    <img src="images/enm_stage1/bird-2.gif" class="MovingObjects"
                        style="position:absolute; left:19403px; bottom:310px;" id="skybirds-enm10" />
                    <img src="images/enm_stage1/bird-5.gif" class="MovingObjects"
                        style="position:absolute; left:21611px; bottom:301px;" id="skybirds-enm11" />
                    <img src="images/enm_stage1/bird-5.gif" class="MovingObjects"
                        style="position:absolute; left:25573px; bottom:304px;" id="skybirds-enm12" />
                    <img src="images/enm_stage1/bird-2.gif" class="MovingObjects"
                        style="position:absolute; left:6614px; bottom:318px;" id="skybirds-enm13" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:10081px; bottom:295px;" id="skybirds-enm14" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:9706px; bottom:317px;" id="skybirds-enm15" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:20957px; bottom:296px;" id="skybirds-enm16" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:26813px; bottom:319px;" id="skybirds-enm17" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:8294px; bottom:293px;" id="skybirds-enm18" />
                    <img src="images/enm_stage1/bird-4.gif" class="MovingObjects"
                        style="position:absolute; left:35960px; bottom:299px;" id="skybirds-enm19" />
                    <img src="images/enm_stage1/bird-4.gif" class="MovingObjects"
                        style="position:absolute; left:34458px; bottom:313px;" id="skybirds-enm20" />
                    <img src="images/enm_stage1/bird-4.gif" class="MovingObjects"
                        style="position:absolute; left:12513px; bottom:286px;" id="skybirds-enm21" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:19088px; bottom:319px;" id="skybirds-enm22" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:6383px; bottom:302px;" id="skybirds-enm23" />
                    <img src="images/enm_stage1/bird-4.gif" class="MovingObjects"
                        style="position:absolute; left:10172px; bottom:288px;" id="skybirds-enm24" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:30503px; bottom:307px;" id="skybirds-enm25" />
                    <img src="images/enm_stage1/bird-5.gif" class="MovingObjects"
                        style="position:absolute; left:4602px; bottom:313px;" id="skybirds-enm26" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:19616px; bottom:285px;" id="skybirds-enm27" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:32557px; bottom:313px;" id="skybirds-enm28" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:13608px; bottom:284px;" id="skybirds-enm29" />
                    <img src="images/enm_stage1/bird-4.gif" class="MovingObjects"
                        style="position:absolute; left:4599px; bottom:297px;" id="skybirds-enm30" />
                    <img src="images/enm_stage1/bird-5.gif" class="MovingObjects"
                        style="position:absolute; left:34323px; bottom:291px;" id="skybirds-enm31" />
                    <img src="images/enm_stage1/bird-2.gif" class="MovingObjects"
                        style="position:absolute; left:2901px; bottom:314px;" id="skybirds-enm32" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:37335px; bottom:299px;" id="skybirds-enm33" />
                    <img src="images/enm_stage1/bird-2.gif" class="MovingObjects"
                        style="position:absolute; left:4702px; bottom:306px;" id="skybirds-enm34" />
                    <img src="images/enm_stage1/bird-4.gif" class="MovingObjects"
                        style="position:absolute; left:6607px; bottom:308px;" id="skybirds-enm35" />
                    <img src="images/enm_stage1/bird-4.gif" class="MovingObjects"
                        style="position:absolute; left:23884px; bottom:305px;" id="skybirds-enm36" />
                    <img src="images/enm_stage1/bird-5.gif" class="MovingObjects"
                        style="position:absolute; left:3304px; bottom:288px;" id="skybirds-enm37" />
                    <img src="images/enm_stage1/bird-4.gif" class="MovingObjects"
                        style="position:absolute; left:33248px; bottom:292px;" id="skybirds-enm38" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:29707px; bottom:303px;" id="skybirds-enm39" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:23944px; bottom:297px;" id="skybirds-enm40" />
                    <img src="images/enm_stage1/bird-2.gif" class="MovingObjects"
                        style="position:absolute; left:4927px; bottom:312px;" id="skybirds-enm41" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:28106px; bottom:314px;" id="skybirds-enm42" />
                    <img src="images/enm_stage1/bird-2.gif" class="MovingObjects"
                        style="position:absolute; left:31053px; bottom:314px;" id="skybirds-enm43" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:2285px; bottom:316px;" id="skybirds-enm44" />
                    <img src="images/enm_stage1/bird-4.gif" class="MovingObjects"
                        style="position:absolute; left:35667px; bottom:314px;" id="skybirds-enm45" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:37701px; bottom:314px;" id="skybirds-enm46" />
                    <img src="images/enm_stage1/bird-4.gif" class="MovingObjects"
                        style="position:absolute; left:29578px; bottom:310px;" id="skybirds-enm47" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:13299px; bottom:313px;" id="skybirds-enm48" />
                    <img src="images/enm_stage1/bird-4.gif" class="MovingObjects"
                        style="position:absolute; left:24550px; bottom:297px;" id="skybirds-enm49" />
                    <img src="images/enm_stage1/bird-4.gif" class="MovingObjects"
                        style="position:absolute; left:15744px; bottom:297px;" id="skybirds-enm50" />
                    <img src="images/enm_stage1/bird-5.gif" class="MovingObjects"
                        style="position:absolute; left:36007px; bottom:305px;" id="skybirds-enm51" />
                    <img src="images/enm_stage1/bird-5.gif" class="MovingObjects"
                        style="position:absolute; left:20857px; bottom:294px;" id="skybirds-enm52" />
                    <img src="images/enm_stage1/bird-5.gif" class="MovingObjects"
                        style="position:absolute; left:34380px; bottom:284px;" id="skybirds-enm53" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:4954px; bottom:316px;" id="skybirds-enm54" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:27350px; bottom:298px;" id="skybirds-enm55" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:36384px; bottom:310px;" id="skybirds-enm56" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:2981px; bottom:295px;" id="skybirds-enm57" />
                    <img src="images/enm_stage1/bird-4.gif" class="MovingObjects"
                        style="position:absolute; left:37607px; bottom:289px;" id="skybirds-enm58" />
                    <img src="images/enm_stage1/bird-4.gif" class="MovingObjects"
                        style="position:absolute; left:32698px; bottom:300px;" id="skybirds-enm59" />
                    <img src="images/enm_stage1/bird-5.gif" class="MovingObjects"
                        style="position:absolute; left:28579px; bottom:318px;" id="skybirds-enm60" />
                    <img src="images/enm_stage1/bird-4.gif" class="MovingObjects"
                        style="position:absolute; left:31965px; bottom:302px;" id="skybirds-enm61" />
                    <img src="images/enm_stage1/bird-2.gif" class="MovingObjects"
                        style="position:absolute; left:34377px; bottom:302px;" id="skybirds-enm62" />
                    <img src="images/enm_stage1/bird-2.gif" class="MovingObjects"
                        style="position:absolute; left:35344px; bottom:296px;" id="skybirds-enm63" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:12010px; bottom:309px;" id="skybirds-enm64" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:11217px; bottom:308px;" id="skybirds-enm65" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:37859px; bottom:310px;" id="skybirds-enm66" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:15770px; bottom:316px;" id="skybirds-enm67" />
                    <img src="images/enm_stage1/bird-4.gif" class="MovingObjects"
                        style="position:absolute; left:35242px; bottom:305px;" id="skybirds-enm68" />
                    <img src="images/enm_stage1/bird-5.gif" class="MovingObjects"
                        style="position:absolute; left:26788px; bottom:282px;" id="skybirds-enm69" />
                    <img src="images/enm_stage1/bird-4.gif" class="MovingObjects"
                        style="position:absolute; left:20323px; bottom:287px;" id="skybirds-enm70" />
                    <img src="images/enm_stage1/bird-5.gif" class="MovingObjects"
                        style="position:absolute; left:10871px; bottom:308px;" id="skybirds-enm71" />
                    <img src="images/enm_stage1/bird-2.gif" class="MovingObjects"
                        style="position:absolute; left:2428px; bottom:289px;" id="skybirds-enm72" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:31994px; bottom:301px;" id="skybirds-enm73" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:28458px; bottom:311px;" id="skybirds-enm74" />
                    <img src="images/enm_stage1/bird-5.gif" class="MovingObjects"
                        style="position:absolute; left:11712px; bottom:294px;" id="skybirds-enm75" />
                    <img src="images/enm_stage1/bird-2.gif" class="MovingObjects"
                        style="position:absolute; left:23263px; bottom:299px;" id="skybirds-enm76" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:32446px; bottom:286px;" id="skybirds-enm77" />
                    <img src="images/enm_stage1/bird-5.gif" class="MovingObjects"
                        style="position:absolute; left:3991px; bottom:317px;" id="skybirds-enm78" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:9272px; bottom:308px;" id="skybirds-enm79" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:29682px; bottom:309px;" id="skybirds-enm80" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:8171px; bottom:311px;" id="skybirds-enm81" />
                    <img src="images/enm_stage1/bird-2.gif" class="MovingObjects"
                        style="position:absolute; left:14379px; bottom:295px;" id="skybirds-enm82" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:28356px; bottom:280px;" id="skybirds-enm83" />
                    <img src="images/enm_stage1/bird-4.gif" class="MovingObjects"
                        style="position:absolute; left:10688px; bottom:311px;" id="skybirds-enm84" />
                    <img src="images/enm_stage1/bird-5.gif" class="MovingObjects"
                        style="position:absolute; left:11069px; bottom:316px;" id="skybirds-enm85" />
                    <img src="images/enm_stage1/bird-5.gif" class="MovingObjects"
                        style="position:absolute; left:32614px; bottom:317px;" id="skybirds-enm86" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:31679px; bottom:310px;" id="skybirds-enm87" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:25808px; bottom:320px;" id="skybirds-enm88" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:5134px; bottom:319px;" id="skybirds-enm89" />
                    <img src="images/enm_stage1/bird-5.gif" class="MovingObjects"
                        style="position:absolute; left:6881px; bottom:280px;" id="skybirds-enm90" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:27999px; bottom:282px;" id="skybirds-enm91" />
                    <img src="images/enm_stage1/bird-2.gif" class="MovingObjects"
                        style="position:absolute; left:9982px; bottom:295px;" id="skybirds-enm92" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:5263px; bottom:298px;" id="skybirds-enm93" />
                    <img src="images/enm_stage1/bird-4.gif" class="MovingObjects"
                        style="position:absolute; left:4368px; bottom:319px;" id="skybirds-enm94" />
                    <img src="images/enm_stage1/bird-5.gif" class="MovingObjects"
                        style="position:absolute; left:33640px; bottom:293px;" id="skybirds-enm95" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:19925px; bottom:282px;" id="skybirds-enm96" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:28043px; bottom:299px;" id="skybirds-enm97" />
                    <img src="images/enm_stage1/bird-5.gif" class="MovingObjects"
                        style="position:absolute; left:2408px; bottom:292px;" id="skybirds-enm98" />
                    <img src="images/enm_stage1/bird-2.gif" class="MovingObjects"
                        style="position:absolute; left:19157px; bottom:295px;" id="skybirds-enm99" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:35754px; bottom:290px;" id="skybirds-enm100" />
                    <img src="images/enm_stage1/bird-5.gif" class="MovingObjects"
                        style="position:absolute; left:35058px; bottom:320px;" id="skybirds-enm101" />
                    <img src="images/enm_stage1/bird-5.gif" class="MovingObjects"
                        style="position:absolute; left:13204px; bottom:317px;" id="skybirds-enm102" />
                    <img src="images/enm_stage1/bird-4.gif" class="MovingObjects"
                        style="position:absolute; left:17239px; bottom:310px;" id="skybirds-enm103" />
                    <img src="images/enm_stage1/bird-5.gif" class="MovingObjects"
                        style="position:absolute; left:35962px; bottom:289px;" id="skybirds-enm104" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:4824px; bottom:294px;" id="skybirds-enm105" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:20135px; bottom:313px;" id="skybirds-enm106" />
                    <img src="images/enm_stage1/bird-5.gif" class="MovingObjects"
                        style="position:absolute; left:29035px; bottom:281px;" id="skybirds-enm107" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:25689px; bottom:318px;" id="skybirds-enm108" />
                    <img src="images/enm_stage1/bird-4.gif" class="MovingObjects"
                        style="position:absolute; left:33831px; bottom:281px;" id="skybirds-enm109" />
                    <img src="images/enm_stage1/bird-4.gif" class="MovingObjects"
                        style="position:absolute; left:34823px; bottom:284px;" id="skybirds-enm110" />
                    <img src="images/enm_stage1/bird-5.gif" class="MovingObjects"
                        style="position:absolute; left:16913px; bottom:309px;" id="skybirds-enm111" />
                    <img src="images/enm_stage1/bird-2.gif" class="MovingObjects"
                        style="position:absolute; left:29890px; bottom:309px;" id="skybirds-enm112" />
                    <img src="images/enm_stage1/bird-4.gif" class="MovingObjects"
                        style="position:absolute; left:17346px; bottom:286px;" id="skybirds-enm113" />
                    <img src="images/enm_stage1/bird-4.gif" class="MovingObjects"
                        style="position:absolute; left:19848px; bottom:302px;" id="skybirds-enm114" />
                    <img src="images/enm_stage1/bird-4.gif" class="MovingObjects"
                        style="position:absolute; left:11870px; bottom:286px;" id="skybirds-enm115" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:27288px; bottom:307px;" id="skybirds-enm116" />
                    <img src="images/enm_stage1/bird-5.gif" class="MovingObjects"
                        style="position:absolute; left:26849px; bottom:301px;" id="skybirds-enm117" />
                    <img src="images/enm_stage1/bird-5.gif" class="MovingObjects"
                        style="position:absolute; left:10870px; bottom:318px;" id="skybirds-enm118" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:5788px; bottom:318px;" id="skybirds-enm119" />
                    <img src="images/enm_stage1/bird-2.gif" class="MovingObjects"
                        style="position:absolute; left:9659px; bottom:285px;" id="skybirds-enm120" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:10134px; bottom:300px;" id="skybirds-enm121" />
                    <img src="images/enm_stage1/bird-4.gif" class="MovingObjects"
                        style="position:absolute; left:18342px; bottom:294px;" id="skybirds-enm122" />
                    <img src="images/enm_stage1/bird-5.gif" class="MovingObjects"
                        style="position:absolute; left:30274px; bottom:310px;" id="skybirds-enm123" />
                    <img src="images/enm_stage1/bird-5.gif" class="MovingObjects"
                        style="position:absolute; left:34669px; bottom:309px;" id="skybirds-enm124" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:3660px; bottom:320px;" id="skybirds-enm125" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:3997px; bottom:295px;" id="skybirds-enm126" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:26776px; bottom:300px;" id="skybirds-enm127" />
                    <img src="images/enm_stage1/bird-2.gif" class="MovingObjects"
                        style="position:absolute; left:14380px; bottom:297px;" id="skybirds-enm128" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:25785px; bottom:295px;" id="skybirds-enm129" />
                    <img src="images/enm_stage1/bird-5.gif" class="MovingObjects"
                        style="position:absolute; left:22169px; bottom:318px;" id="skybirds-enm130" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:33338px; bottom:281px;" id="skybirds-enm131" />
                    <img src="images/enm_stage1/bird-2.gif" class="MovingObjects"
                        style="position:absolute; left:9278px; bottom:315px;" id="skybirds-enm132" />
                    <img src="images/enm_stage1/bird-2.gif" class="MovingObjects"
                        style="position:absolute; left:34623px; bottom:280px;" id="skybirds-enm133" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:22450px; bottom:283px;" id="skybirds-enm134" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:21442px; bottom:297px;" id="skybirds-enm135" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:9858px; bottom:302px;" id="skybirds-enm136" />
                    <img src="images/enm_stage1/bird-2.gif" class="MovingObjects"
                        style="position:absolute; left:23640px; bottom:281px;" id="skybirds-enm137" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:14723px; bottom:291px;" id="skybirds-enm138" />
                    <img src="images/enm_stage1/bird-5.gif" class="MovingObjects"
                        style="position:absolute; left:17587px; bottom:288px;" id="skybirds-enm139" />
                    <img src="images/enm_stage1/bird-2.gif" class="MovingObjects"
                        style="position:absolute; left:28625px; bottom:289px;" id="skybirds-enm140" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:24844px; bottom:296px;" id="skybirds-enm141" />
                    <img src="images/enm_stage1/bird-5.gif" class="MovingObjects"
                        style="position:absolute; left:9654px; bottom:281px;" id="skybirds-enm142" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:23382px; bottom:288px;" id="skybirds-enm143" />
                    <img src="images/enm_stage1/bird-5.gif" class="MovingObjects"
                        style="position:absolute; left:22678px; bottom:280px;" id="skybirds-enm144" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:32784px; bottom:315px;" id="skybirds-enm145" />
                    <img src="images/enm_stage1/bird-4.gif" class="MovingObjects"
                        style="position:absolute; left:23770px; bottom:308px;" id="skybirds-enm146" />
                    <img src="images/enm_stage1/bird-5.gif" class="MovingObjects"
                        style="position:absolute; left:25092px; bottom:288px;" id="skybirds-enm147" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:17163px; bottom:301px;" id="skybirds-enm148" />
                    <img src="images/enm_stage1/bird-5.gif" class="MovingObjects"
                        style="position:absolute; left:3746px; bottom:297px;" id="skybirds-enm149" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:17700px; bottom:301px;" id="skybirds-enm150" />
                    <img src="images/enm_stage1/bird-4.gif" class="MovingObjects"
                        style="position:absolute; left:4628px; bottom:312px;" id="skybirds-enm151" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:18978px; bottom:308px;" id="skybirds-enm152" />
                    <img src="images/enm_stage1/bird-5.gif" class="MovingObjects"
                        style="position:absolute; left:18667px; bottom:282px;" id="skybirds-enm153" />
                    <img src="images/enm_stage1/bird-2.gif" class="MovingObjects"
                        style="position:absolute; left:8948px; bottom:320px;" id="skybirds-enm154" />
                    <img src="images/enm_stage1/bird-4.gif" class="MovingObjects"
                        style="position:absolute; left:4801px; bottom:280px;" id="skybirds-enm155" />
                    <img src="images/enm_stage1/bird-4.gif" class="MovingObjects"
                        style="position:absolute; left:8506px; bottom:318px;" id="skybirds-enm156" />
                    <img src="images/enm_stage1/bird-4.gif" class="MovingObjects"
                        style="position:absolute; left:10218px; bottom:297px;" id="skybirds-enm157" />
                    <img src="images/enm_stage1/bird-2.gif" class="MovingObjects"
                        style="position:absolute; left:23480px; bottom:290px;" id="skybirds-enm158" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:18055px; bottom:284px;" id="skybirds-enm159" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:9866px; bottom:314px;" id="skybirds-enm160" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:36372px; bottom:299px;" id="skybirds-enm161" />
                    <img src="images/enm_stage1/bird-2.gif" class="MovingObjects"
                        style="position:absolute; left:11376px; bottom:320px;" id="skybirds-enm162" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:17829px; bottom:298px;" id="skybirds-enm163" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:13760px; bottom:303px;" id="skybirds-enm164" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:29199px; bottom:302px;" id="skybirds-enm165" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:30157px; bottom:287px;" id="skybirds-enm166" />
                    <img src="images/enm_stage1/bird-2.gif" class="MovingObjects"
                        style="position:absolute; left:22531px; bottom:315px;" id="skybirds-enm167" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:13283px; bottom:311px;" id="skybirds-enm168" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:13030px; bottom:318px;" id="skybirds-enm169" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:18650px; bottom:314px;" id="skybirds-enm170" />
                    <img src="images/enm_stage1/bird-5.gif" class="MovingObjects"
                        style="position:absolute; left:25315px; bottom:308px;" id="skybirds-enm171" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:37597px; bottom:281px;" id="skybirds-enm172" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:20341px; bottom:282px;" id="skybirds-enm173" />
                    <img src="images/enm_stage1/bird-5.gif" class="MovingObjects"
                        style="position:absolute; left:32601px; bottom:304px;" id="skybirds-enm174" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:5198px; bottom:283px;" id="skybirds-enm175" />
                    <img src="images/enm_stage1/bird-4.gif" class="MovingObjects"
                        style="position:absolute; left:37690px; bottom:304px;" id="skybirds-enm176" />
                    <img src="images/enm_stage1/bird-5.gif" class="MovingObjects"
                        style="position:absolute; left:30156px; bottom:305px;" id="skybirds-enm177" />
                    <img src="images/enm_stage1/bird-4.gif" class="MovingObjects"
                        style="position:absolute; left:4544px; bottom:299px;" id="skybirds-enm178" />
                    <img src="images/enm_stage1/bird-2.gif" class="MovingObjects"
                        style="position:absolute; left:13478px; bottom:308px;" id="skybirds-enm179" />
                    <img src="images/enm_stage1/bird-2.gif" class="MovingObjects"
                        style="position:absolute; left:32587px; bottom:304px;" id="skybirds-enm180" />
                    <img src="images/enm_stage1/bird-2.gif" class="MovingObjects"
                        style="position:absolute; left:27461px; bottom:301px;" id="skybirds-enm181" />
                    <img src="images/enm_stage1/bird-4.gif" class="MovingObjects"
                        style="position:absolute; left:20247px; bottom:286px;" id="skybirds-enm182" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:15471px; bottom:287px;" id="skybirds-enm183" />
                    <img src="images/enm_stage1/bird-4.gif" class="MovingObjects"
                        style="position:absolute; left:27134px; bottom:297px;" id="skybirds-enm184" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:19440px; bottom:283px;" id="skybirds-enm185" />
                    <img src="images/enm_stage1/bird-2.gif" class="MovingObjects"
                        style="position:absolute; left:32331px; bottom:283px;" id="skybirds-enm186" />
                    <img src="images/enm_stage1/bird-2.gif" class="MovingObjects"
                        style="position:absolute; left:24664px; bottom:281px;" id="skybirds-enm187" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:25845px; bottom:293px;" id="skybirds-enm188" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:11996px; bottom:287px;" id="skybirds-enm189" />
                    <img src="images/enm_stage1/bird-5.gif" class="MovingObjects"
                        style="position:absolute; left:22632px; bottom:299px;" id="skybirds-enm190" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:16651px; bottom:281px;" id="skybirds-enm191" />
                    <img src="images/enm_stage1/bird-2.gif" class="MovingObjects"
                        style="position:absolute; left:22607px; bottom:314px;" id="skybirds-enm192" />
                    <img src="images/enm_stage1/bird-4.gif" class="MovingObjects"
                        style="position:absolute; left:11769px; bottom:319px;" id="skybirds-enm193" />
                    <img src="images/enm_stage1/bird-4.gif" class="MovingObjects"
                        style="position:absolute; left:16012px; bottom:286px;" id="skybirds-enm194" />
                    <img src="images/enm_stage1/bird-4.gif" class="MovingObjects"
                        style="position:absolute; left:36280px; bottom:299px;" id="skybirds-enm195" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:20316px; bottom:299px;" id="skybirds-enm196" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:2261px; bottom:304px;" id="skybirds-enm197" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:27057px; bottom:315px;" id="skybirds-enm198" />
                    <img src="images/enm_stage1/bird-4.gif" class="MovingObjects"
                        style="position:absolute; left:24653px; bottom:303px;" id="skybirds-enm199" />
                    <img src="images/enm_stage1/bird-2.gif" class="MovingObjects"
                        style="position:absolute; left:3804px; bottom:288px;" id="skybirds-enm200" />
                    <img src="images/enm_stage1/bird-2.gif" class="MovingObjects"
                        style="position:absolute; left:21622px; bottom:294px;" id="skybirds-enm201" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:6366px; bottom:304px;" id="skybirds-enm202" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:29371px; bottom:307px;" id="skybirds-enm203" />
                    <img src="images/enm_stage1/bird-4.gif" class="MovingObjects"
                        style="position:absolute; left:32487px; bottom:287px;" id="skybirds-enm204" />
                    <img src="images/enm_stage1/bird-2.gif" class="MovingObjects"
                        style="position:absolute; left:30109px; bottom:304px;" id="skybirds-enm205" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:12340px; bottom:295px;" id="skybirds-enm206" />
                    <img src="images/enm_stage1/bird-2.gif" class="MovingObjects"
                        style="position:absolute; left:34108px; bottom:310px;" id="skybirds-enm207" />
                    <img src="images/enm_stage1/bird-2.gif" class="MovingObjects"
                        style="position:absolute; left:36451px; bottom:301px;" id="skybirds-enm208" />
                    <img src="images/enm_stage1/bird-2.gif" class="MovingObjects"
                        style="position:absolute; left:21464px; bottom:301px;" id="skybirds-enm209" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:18899px; bottom:307px;" id="skybirds-enm210" />
                    <img src="images/enm_stage1/bird-2.gif" class="MovingObjects"
                        style="position:absolute; left:4859px; bottom:320px;" id="skybirds-enm211" />
                    <img src="images/enm_stage1/bird-4.gif" class="MovingObjects"
                        style="position:absolute; left:31423px; bottom:295px;" id="skybirds-enm212" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:34796px; bottom:291px;" id="skybirds-enm213" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:26029px; bottom:312px;" id="skybirds-enm214" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:6018px; bottom:288px;" id="skybirds-enm215" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:11007px; bottom:313px;" id="skybirds-enm216" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:33757px; bottom:290px;" id="skybirds-enm217" />
                    <img src="images/enm_stage1/bird-2.gif" class="MovingObjects"
                        style="position:absolute; left:7697px; bottom:294px;" id="skybirds-enm218" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:29519px; bottom:299px;" id="skybirds-enm219" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:24751px; bottom:317px;" id="skybirds-enm220" />
                    <img src="images/enm_stage1/bird-4.gif" class="MovingObjects"
                        style="position:absolute; left:26886px; bottom:312px;" id="skybirds-enm221" />
                    <img src="images/enm_stage1/bird-4.gif" class="MovingObjects"
                        style="position:absolute; left:35701px; bottom:288px;" id="skybirds-enm222" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:17423px; bottom:301px;" id="skybirds-enm223" />
                    <img src="images/enm_stage1/bird-5.gif" class="MovingObjects"
                        style="position:absolute; left:26666px; bottom:319px;" id="skybirds-enm224" />
                    <img src="images/enm_stage1/bird-5.gif" class="MovingObjects"
                        style="position:absolute; left:14242px; bottom:286px;" id="skybirds-enm225" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:17647px; bottom:298px;" id="skybirds-enm226" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:26894px; bottom:309px;" id="skybirds-enm227" />
                    <img src="images/enm_stage1/bird-4.gif" class="MovingObjects"
                        style="position:absolute; left:15101px; bottom:281px;" id="skybirds-enm228" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:30227px; bottom:281px;" id="skybirds-enm229" />
                    <img src="images/enm_stage1/bird-5.gif" class="MovingObjects"
                        style="position:absolute; left:16681px; bottom:287px;" id="skybirds-enm230" />
                    <img src="images/enm_stage1/bird-2.gif" class="MovingObjects"
                        style="position:absolute; left:31557px; bottom:281px;" id="skybirds-enm231" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:19620px; bottom:293px;" id="skybirds-enm232" />
                    <img src="images/enm_stage1/bird-4.gif" class="MovingObjects"
                        style="position:absolute; left:11462px; bottom:302px;" id="skybirds-enm233" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:29865px; bottom:313px;" id="skybirds-enm234" />
                    <img src="images/enm_stage1/bird-5.gif" class="MovingObjects"
                        style="position:absolute; left:14073px; bottom:311px;" id="skybirds-enm235" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:8537px; bottom:305px;" id="skybirds-enm236" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:6715px; bottom:314px;" id="skybirds-enm237" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:29856px; bottom:317px;" id="skybirds-enm238" />
                    <img src="images/enm_stage1/bird-5.gif" class="MovingObjects"
                        style="position:absolute; left:33766px; bottom:307px;" id="skybirds-enm239" />
                    <img src="images/enm_stage1/bird-5.gif" class="MovingObjects"
                        style="position:absolute; left:16927px; bottom:313px;" id="skybirds-enm240" />
                    <img src="images/enm_stage1/bird-5.gif" class="MovingObjects"
                        style="position:absolute; left:37052px; bottom:299px;" id="skybirds-enm241" />
                    <img src="images/enm_stage1/bird-5.gif" class="MovingObjects"
                        style="position:absolute; left:6753px; bottom:304px;" id="skybirds-enm242" />
                    <img src="images/enm_stage1/bird-5.gif" class="MovingObjects"
                        style="position:absolute; left:21260px; bottom:307px;" id="skybirds-enm243" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:18520px; bottom:311px;" id="skybirds-enm244" />
                    <img src="images/enm_stage1/bird-4.gif" class="MovingObjects"
                        style="position:absolute; left:16137px; bottom:289px;" id="skybirds-enm245" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:6199px; bottom:285px;" id="skybirds-enm246" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:15955px; bottom:287px;" id="skybirds-enm247" />
                    <img src="images/enm_stage1/bird-2.gif" class="MovingObjects"
                        style="position:absolute; left:22881px; bottom:284px;" id="skybirds-enm248" />
                    <img src="images/enm_stage1/bird-2.gif" class="MovingObjects"
                        style="position:absolute; left:7498px; bottom:301px;" id="skybirds-enm249" />
                    <img src="images/enm_stage1/bird-2.gif" class="MovingObjects"
                        style="position:absolute; left:37211px; bottom:298px;" id="skybirds-enm250" />
                    <img src="images/enm_stage1/bird-2.gif" class="MovingObjects"
                        style="position:absolute; left:24146px; bottom:286px;" id="skybirds-enm251" />
                    <img src="images/enm_stage1/bird-5.gif" class="MovingObjects"
                        style="position:absolute; left:7820px; bottom:295px;" id="skybirds-enm252" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:8565px; bottom:309px;" id="skybirds-enm253" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:35935px; bottom:281px;" id="skybirds-enm254" />
                    <img src="images/enm_stage1/bird-2.gif" class="MovingObjects"
                        style="position:absolute; left:26792px; bottom:285px;" id="skybirds-enm255" />
                    <img src="images/enm_stage1/bird-5.gif" class="MovingObjects"
                        style="position:absolute; left:36793px; bottom:316px;" id="skybirds-enm256" />
                    <img src="images/enm_stage1/bird-4.gif" class="MovingObjects"
                        style="position:absolute; left:19998px; bottom:286px;" id="skybirds-enm257" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:15908px; bottom:284px;" id="skybirds-enm258" />
                    <img src="images/enm_stage1/bird-2.gif" class="MovingObjects"
                        style="position:absolute; left:14267px; bottom:316px;" id="skybirds-enm259" />
                    <img src="images/enm_stage1/bird-5.gif" class="MovingObjects"
                        style="position:absolute; left:19198px; bottom:319px;" id="skybirds-enm260" />
                    <img src="images/enm_stage1/bird-2.gif" class="MovingObjects"
                        style="position:absolute; left:33355px; bottom:300px;" id="skybirds-enm261" />
                    <img src="images/enm_stage1/bird-5.gif" class="MovingObjects"
                        style="position:absolute; left:27392px; bottom:306px;" id="skybirds-enm262" />
                    <img src="images/enm_stage1/bird-2.gif" class="MovingObjects"
                        style="position:absolute; left:34118px; bottom:288px;" id="skybirds-enm263" />
                    <img src="images/enm_stage1/bird-5.gif" class="MovingObjects"
                        style="position:absolute; left:4184px; bottom:301px;" id="skybirds-enm264" />
                    <img src="images/enm_stage1/bird-5.gif" class="MovingObjects"
                        style="position:absolute; left:23248px; bottom:280px;" id="skybirds-enm265" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:5792px; bottom:291px;" id="skybirds-enm266" />
                    <img src="images/enm_stage1/bird-4.gif" class="MovingObjects"
                        style="position:absolute; left:25286px; bottom:315px;" id="skybirds-enm267" />
                    <img src="images/enm_stage1/bird-2.gif" class="MovingObjects"
                        style="position:absolute; left:4069px; bottom:312px;" id="skybirds-enm268" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:12908px; bottom:282px;" id="skybirds-enm269" />
                    <img src="images/enm_stage1/bird-5.gif" class="MovingObjects"
                        style="position:absolute; left:34547px; bottom:305px;" id="skybirds-enm270" />
                    <img src="images/enm_stage1/bird-2.gif" class="MovingObjects"
                        style="position:absolute; left:37554px; bottom:282px;" id="skybirds-enm271" />
                    <img src="images/enm_stage1/bird-4.gif" class="MovingObjects"
                        style="position:absolute; left:10513px; bottom:297px;" id="skybirds-enm272" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:9839px; bottom:298px;" id="skybirds-enm273" />
                    <img src="images/enm_stage1/bird-2.gif" class="MovingObjects"
                        style="position:absolute; left:36041px; bottom:294px;" id="skybirds-enm274" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:14543px; bottom:311px;" id="skybirds-enm275" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:33781px; bottom:304px;" id="skybirds-enm276" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:16013px; bottom:316px;" id="skybirds-enm277" />
                    <img src="images/enm_stage1/bird-4.gif" class="MovingObjects"
                        style="position:absolute; left:32457px; bottom:309px;" id="skybirds-enm278" />
                    <img src="images/enm_stage1/bird-5.gif" class="MovingObjects"
                        style="position:absolute; left:5796px; bottom:308px;" id="skybirds-enm279" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:12343px; bottom:286px;" id="skybirds-enm280" />
                    <img src="images/enm_stage1/bird-4.gif" class="MovingObjects"
                        style="position:absolute; left:36952px; bottom:293px;" id="skybirds-enm281" />
                    <img src="images/enm_stage1/bird-2.gif" class="MovingObjects"
                        style="position:absolute; left:34529px; bottom:310px;" id="skybirds-enm282" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:9604px; bottom:307px;" id="skybirds-enm283" />
                    <img src="images/enm_stage1/bird-2.gif" class="MovingObjects"
                        style="position:absolute; left:7785px; bottom:302px;" id="skybirds-enm284" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:16406px; bottom:300px;" id="skybirds-enm285" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:3977px; bottom:285px;" id="skybirds-enm286" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:8020px; bottom:301px;" id="skybirds-enm287" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:27025px; bottom:303px;" id="skybirds-enm288" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:27176px; bottom:301px;" id="skybirds-enm289" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:14146px; bottom:317px;" id="skybirds-enm290" />
                    <img src="images/enm_stage1/bird-4.gif" class="MovingObjects"
                        style="position:absolute; left:19781px; bottom:315px;" id="skybirds-enm291" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:26066px; bottom:310px;" id="skybirds-enm292" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:22603px; bottom:315px;" id="skybirds-enm293" />
                    <img src="images/enm_stage1/bird-5.gif" class="MovingObjects"
                        style="position:absolute; left:6743px; bottom:291px;" id="skybirds-enm294" />
                    <img src="images/enm_stage1/bird-2.gif" class="MovingObjects"
                        style="position:absolute; left:20916px; bottom:317px;" id="skybirds-enm295" />
                    <img src="images/enm_stage1/bird-2.gif" class="MovingObjects"
                        style="position:absolute; left:24889px; bottom:315px;" id="skybirds-enm296" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:25809px; bottom:286px;" id="skybirds-enm297" />
                    <img src="images/enm_stage1/bird-2.gif" class="MovingObjects"
                        style="position:absolute; left:21849px; bottom:310px;" id="skybirds-enm298" />
                    <img src="images/enm_stage1/bird-3.gif" class="MovingObjects"
                        style="position:absolute; left:28040px; bottom:294px;" id="skybirds-enm299" />
                    <img src="images/enm_stage1/bird-1.gif" class="MovingObjects"
                        style="position:absolute; left:17642px; bottom:292px;" id="skybirds-enm300" />

                </div>

            </div>
            <div class="score-objects">
                <!-- Coins Collections -->

                <img src="images/doors/6.png" style="position:absolute; left:2000px; top:-220px; height: 480px;"
                    id="door1" />
                <img src="images/doors/6.png" style="position:absolute; left:4200px; top:-220px; height: 480px;"
                    id="door2" />
                <img src="images/doors/6.png" style="position:absolute; left:6400px; top:-220px; height: 480px;"
                    id="door3" />
                <img src="images/doors/6.png" style="position:absolute; left:8600px; top:-220px; height: 480px;"
                    id="door4" />
                <img src="images/doors/6.png" style="position:absolute; left:11550px; top:-220px; height: 480px;"
                    id="door5" />
                <img src="images/doors/6.png" style="position:absolute; left:13500px; top:-220px; height: 480px;"
                    id="door6" />
                <img src="images/doors/6.png" style="position:absolute; left:15400px; top:-220px; height: 480px;"
                    id="door7" />
                <img src="images/doors/6.png" style="position:absolute; left:17400px; top:-220px; height: 480px;"
                    id="door8" />
                <img src="images/doors/6.png" style="position:absolute; left:19600px; top:-220px; height: 480px;"
                    id="door9" />
                <img src="images/doors/6.png" style="position:absolute; left:21800px; top:-220px; height: 480px;"
                    id="door10" />
                <img src="images/doors/6.png" style="position:absolute; left:25000px; top:-220px; height: 480px;"
                    id="door11" />
                <img src="images/doors/6.png" style="position:absolute; left:26200px; top:-220px; height: 480px;"
                    id="door12" />
                <img src="images/doors/6.png" style="position:absolute; left:28300px; top:-220px; height: 480px;"
                    id="door13" />
                <img src="images/doors/6.png" style="position:absolute; left:30600px; top:-220px; height: 480px;"
                    id="door14" />
                <img src="images/doors/6.png" style="position:absolute; left:32800px; top:-220px; height: 480px;"
                    id="door15" />


                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:34726px; top:-69.9686250994784px;" id="coin1" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:6091px; top:-41.91604851705529px;" id="coin2" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:26035px; top:19.696034278090167px;" id="coin3" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:25636px; top:-74.33280129538753px;" id="coin4" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:10966px; top:11.47123151274269px;" id="coin5" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:24946px; top:-67.24975553941769px;" id="coin6" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:31902px; top:-27.274539875353568px;" id="coin7" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:31340px; top:-33.60688086462797px;" id="coin8" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:10909px; top:-7.717676333480583px;" id="coin9" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:30320px; top:30.132627346382435px;" id="coin10" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:33144px; top:-18.26924394634247px;" id="coin11" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:13457px; top:-88.61531773825334px;" id="coin12" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:18742px; top:-14.880007147728008px;" id="coin13" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:36274px; top:-90.24096598039249px;" id="coin14" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:15147px; top:-78.42620226647986px;" id="coin15" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:4149px; top:-45.690116829304294px;" id="coin16" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:32984px; top:-48.891771360440615px;" id="coin17" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:21665px; top:19.327560629576126px;" id="coin18" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:18990px; top:23.34326456238672px;" id="coin19" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:2805px; top:1.1758759067151914px;" id="coin20" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:4089px; top:-6.067756090643371px;" id="coin21" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:8649px; top:-67.42947591783292px;" id="coin22" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:24662px; top:-62.356898825757604px;" id="coin23" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:11708px; top:15.483534254236204px;" id="coin24" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:10363px; top:4.97807757183736px;" id="coin25" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:29571px; top:-34.53540787587944px;" id="coin26" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:7474px; top:10.093553550694011px;" id="coin27" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:34978px; top:-6.1603191665798676px;" id="coin28" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:13572px; top:-66.50918633539226px;" id="coin29" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:14266px; top:-14.376758269154251px;" id="coin30" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:30308px; top:-36.54682431664359px;" id="coin31" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:37739px; top:-92.2408156664493px;" id="coin32" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:9867px; top:-91.52460217993283px;" id="coin33" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:36056px; top:-94.62892470899155px;" id="coin34" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:15407px; top:-96.92474068263084px;" id="coin35" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:14820px; top:-46.20799960738071px;" id="coin36" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:12614px; top:-86.88513144874378px;" id="coin37" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:9293px; top:-1.6763808101501354px;" id="coin38" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:28087px; top:9.260195067378945px;" id="coin39" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:24982px; top:-12.081116316876603px;" id="coin40" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:17454px; top:-63.84215338403642px;" id="coin41" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:9364px; top:-49.04101593296967px;" id="coin42" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:13066px; top:-63.89954080763612px;" id="coin43" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:6446px; top:-63.707891471403684px;" id="coin44" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:10286px; top:-14.188331722190256px;" id="coin45" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:7944px; top:-26.52884413057022px;" id="coin46" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:30501px; top:-88.09628602947456px;" id="coin47" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:23992px; top:36.32122498956866px;" id="coin48" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:36045px; top:-7.505825218810642px;" id="coin49" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:19367px; top:-12.037784719449192px;" id="coin50" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:6229px; top:-81.27550828316778px;" id="coin51" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:25413px; top:-74.89466716648286px;" id="coin52" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:27591px; top:-16.403378040516102px;" id="coin53" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:5876px; top:-55.11696076996678px;" id="coin54" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:6442px; top:-80.8483347236368px;" id="coin55" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:21072px; top:-4.603962020765053px;" id="coin56" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:17049px; top:-90.48959990834953px;" id="coin57" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:34008px; top:21.11745591088105px;" id="coin58" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:2090px; top:-55.83906942792703px;" id="coin59" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:37383px; top:-24.528206064047282px;" id="coin60" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:12006px; top:3.823547950836783px;" id="coin61" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:3844px; top:-62.42104254308088px;" id="coin62" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:16646px; top:39.49512130709658px;" id="coin63" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:28257px; top:33.73072332969912px;" id="coin64" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:37571px; top:8.089358166321901px;" id="coin65" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:14971px; top:21.20511014887923px;" id="coin66" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:3981px; top:-50.36691161169264px;" id="coin67" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:13768px; top:28.390530024100542px;" id="coin68" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:33190px; top:32.79458572009648px;" id="coin69" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:5273px; top:-15.998159600397358px;" id="coin70" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:10439px; top:-99.10496785397861px;" id="coin71" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:7986px; top:-63.416120686363065px;" id="coin72" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:7001px; top:-73.41266772270853px;" id="coin73" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:12256px; top:38.85226185100234px;" id="coin74" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:31006px; top:-94.18483902389048px;" id="coin75" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:20231px; top:-87.16560441556008px;" id="coin76" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:4352px; top:27.016148822363277px;" id="coin77" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:5773px; top:-96.30293687340904px;" id="coin78" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:34226px; top:-78.50769482892213px;" id="coin79" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:28758px; top:-58.94382143409616px;" id="coin80" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:2816px; top:-66.8414776029557px;" id="coin81" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:2649px; top:-48.252545491174075px;" id="coin82" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:5486px; top:-85.83665591773591px;" id="coin83" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:17889px; top:-52.8465613827581px;" id="coin84" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:25106px; top:11.012664088852006px;" id="coin85" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:23795px; top:23.227117258642892px;" id="coin86" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:9266px; top:-3.6928734449572005px;" id="coin87" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:32165px; top:21.135840695041892px;" id="coin88" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:9117px; top:-21.32427675098984px;" id="coin89" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:16056px; top:14.892979139881078px;" id="coin90" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:25830px; top:10.016294704217813px;" id="coin91" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:2201px; top:20.192045443217154px;" id="coin92" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:3499px; top:18.21548130249066px;" id="coin93" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:26764px; top:-53.78004560277428px;" id="coin94" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:37127px; top:-82.91809955228115px;" id="coin95" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:34146px; top:-54.504123135270106px;" id="coin96" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:37992px; top:-59.20421532634924px;" id="coin97" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:18453px; top:26.742307164457486px;" id="coin98" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:16903px; top:-68.77459650561832px;" id="coin99" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:6285px; top:-29.48204252832882px;" id="coin100" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:13909px; top:-22.84516770648699px;" id="coin101" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:35397px; top:-55.27681684364486px;" id="coin102" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:33692px; top:-80.88526376339584px;" id="coin103" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:35433px; top:2.009610634084339px;" id="coin104" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:4762px; top:22.319556103895508px;" id="coin105" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:36174px; top:33.75183861068609px;" id="coin106" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:10255px; top:-10.713922956740376px;" id="coin107" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:24757px; top:1.6026021448266619px;" id="coin108" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:5921px; top:-8.379857171743183px;" id="coin109" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:9258px; top:-96.66369761926295px;" id="coin110" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:20114px; top:-52.9006306183641px;" id="coin111" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:36462px; top:28.390399381771715px;" id="coin112" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:7879px; top:-9.25161365378625px;" id="coin113" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:14771px; top:-69.9293029995572px;" id="coin114" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:20311px; top:16.1566246686685px;" id="coin115" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:37666px; top:-56.88201759797178px;" id="coin116" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:2402px; top:2.8972984793066274px;" id="coin117" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:8282px; top:7.28710343859747px;" id="coin118" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:3519px; top:22.84944695512958px;" id="coin119" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:28571px; top:-2.853529552934674px;" id="coin120" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:12071px; top:-94.26670514167701px;" id="coin121" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:25730px; top:-61.482618149680306px;" id="coin122" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:2753px; top:24.00039677215763px;" id="coin123" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:31373px; top:-1.7198738941909681px;" id="coin124" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:27633px; top:24.08478649084026px;" id="coin125" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:3736px; top:-51.81262685560785px;" id="coin126" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:22856px; top:-91.47947829423642px;" id="coin127" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:4530px; top:-48.79970995084319px;" id="coin128" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:36152px; top:-15.908230068743364px;" id="coin129" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:17083px; top:-42.936982050761806px;" id="coin130" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:8565px; top:-55.597940003902124px;" id="coin131" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:13103px; top:-21.82206117493368px;" id="coin132" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:10304px; top:-30.717269934895725px;" id="coin133" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:19661px; top:-8.229051605903209px;" id="coin134" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:29225px; top:9.769961203611246px;" id="coin135" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:4898px; top:-19.91633943892319px;" id="coin136" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:36355px; top:-75.25713760753766px;" id="coin137" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:22694px; top:-39.78273377268066px;" id="coin138" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:2653px; top:-65.4733360003606px;" id="coin139" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:16169px; top:-46.956775350862706px;" id="coin140" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:2755px; top:-89.7870616586883px;" id="coin141" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:36946px; top:-4.787370826084654px;" id="coin142" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:27441px; top:0.46073187737903254px;" id="coin143" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:14512px; top:-90.25820803236812px;" id="coin144" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:28750px; top:-46.709980093480105px;" id="coin145" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:34211px; top:-82.70533326164491px;" id="coin146" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:35404px; top:-98.17323302858324px;" id="coin147" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:29619px; top:-15.273383720398982px;" id="coin148" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:8538px; top:5.368055575936751px;" id="coin149" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:12926px; top:9.748245752938004px;" id="coin150" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:16657px; top:18.564450154796276px;" id="coin151" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:19685px; top:4.563615538258517px;" id="coin152" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:36032px; top:-34.26867782217903px;" id="coin153" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:16506px; top:-22.876334030013666px;" id="coin154" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:22739px; top:-7.5065817705926605px;" id="coin155" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:28312px; top:-97.76379761684737px;" id="coin156" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:26457px; top:10.66607456405049px;" id="coin157" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:16085px; top:31.164438059027276px;" id="coin158" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:33513px; top:-61.9038598531237px;" id="coin159" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:29228px; top:36.78614926842616px;" id="coin160" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:15476px; top:-2.8343290928348637px;" id="coin161" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:17583px; top:8.90153514724311px;" id="coin162" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:5580px; top:-30.507774190899966px;" id="coin163" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:20978px; top:-89.99993707074209px;" id="coin164" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:18445px; top:24.781833440653983px;" id="coin165" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:24654px; top:3.514968680020033px;" id="coin166" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:12860px; top:5.2696551397019675px;" id="coin167" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:26263px; top:-52.83626522532798px;" id="coin168" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:35730px; top:-15.450648758434127px;" id="coin169" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:29680px; top:12.29803084517232px;" id="coin170" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:11763px; top:-70.74990050026467px;" id="coin171" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:27310px; top:-96.65313766240456px;" id="coin172" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:35513px; top:10.38094540879726px;" id="coin173" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:7166px; top:-19.06219115670679px;" id="coin174" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:2756px; top:20.336544824412698px;" id="coin175" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:24250px; top:2.2145203338036197px;" id="coin176" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:11479px; top:-74.86483509931873px;" id="coin177" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:24118px; top:-56.0370885023528px;" id="coin178" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:5115px; top:-9.926276802416993px;" id="coin179" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:25831px; top:-50.4424632529722px;" id="coin180" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:6620px; top:20.962576500058987px;" id="coin181" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:12822px; top:-4.386137416884907px;" id="coin182" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:23997px; top:39.234720776492566px;" id="coin183" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:8243px; top:34.75361656982585px;" id="coin184" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:7177px; top:-26.82124894779382px;" id="coin185" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:13432px; top:-51.63952130030083px;" id="coin186" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:20524px; top:-91.63508996796347px;" id="coin187" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:19036px; top:-20.345215224799972px;" id="coin188" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:21381px; top:8.155972303880745px;" id="coin189" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:17154px; top:-59.20909368036726px;" id="coin190" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:37117px; top:28.639641177748445px;" id="coin191" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:26957px; top:-25.568400215639045px;" id="coin192" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:7537px; top:-87.35626217182221px;" id="coin193" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:28598px; top:-3.2428369654266618px;" id="coin194" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:35198px; top:10.106146504481273px;" id="coin195" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:26288px; top:-2.7652143340226587px;" id="coin196" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:2793px; top:-78.47051197977936px;" id="coin197" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:19955px; top:6.887391274873551px;" id="coin198" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:18631px; top:-60.94188282745476px;" id="coin199" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:7306px; top:-45.52081529893365px;" id="coin200" />


                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:36318px; top:-47.61158703601043px;" id="diamond1" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:16445px; top:21.751891971561122px;" id="diamond2" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:17160px; top:-66.87868324338531px;" id="diamond3" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:34611px; top:-13.973255774255065px;" id="diamond4" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:35234px; top:-97.25952450333202px;" id="diamond5" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:21539px; top:-59.11348492688484px;" id="diamond6" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:10112px; top:-62.11334832636252px;" id="diamond7" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:3625px; top:0.24604038804156403px;" id="diamond8" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:31182px; top:28.874226511021277px;" id="diamond9" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:21772px; top:-52.420030035932605px;" id="diamond10" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:11541px; top:-36.84751504096467px;" id="diamond11" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:17154px; top:33.565881260792565px;" id="diamond12" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:3059px; top:-64.68996050626015px;" id="diamond13" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:12990px; top:-87.60321695218671px;" id="diamond14" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:10622px; top:32.96286866513421px;" id="diamond15" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:11824px; top:-17.41421706487833px;" id="diamond16" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:25681px; top:-52.05948913539901px;" id="diamond17" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:28321px; top:-80.0983409287021px;" id="diamond18" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:24221px; top:-22.616535043610966px;" id="diamond19" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:24709px; top:-90.43206133603913px;" id="diamond20" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:4703px; top:33.68306667106154px;"
                    id="diamond21" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:36752px; top:-10.96252394270401px;" id="diamond22" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:34436px; top:-14.686977460070949px;" id="diamond23" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:16235px; top:-77.01497367412523px;" id="diamond24" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:31534px; top:10.956606235444482px;" id="diamond25" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:30523px; top:-21.032549853751433px;" id="diamond26" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:27957px; top:-94.35762090900349px;" id="diamond27" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:22843px; top:-66.13876707446207px;" id="diamond28" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:20141px; top:-88.70601620020375px;" id="diamond29" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:17659px; top:19.909106948985425px;" id="diamond30" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:24825px; top:25.93823670935157px;" id="diamond31" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:30987px; top:-34.20707718119877px;" id="diamond32" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:7181px; top:-78.82953642975306px;" id="diamond33" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:25414px; top:-74.16389531166587px;" id="diamond34" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:21344px; top:14.601061029414254px;" id="diamond35" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:22590px; top:-20.677355326139022px;" id="diamond36" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:32030px; top:-13.280560974682302px;" id="diamond37" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:29983px; top:-78.97217243091492px;" id="diamond38" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:22871px; top:-11.39765400393091px;" id="diamond39" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:14039px; top:9.938525298291864px;" id="diamond40" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:33600px; top:38.797590053741004px;" id="diamond41" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:30317px; top:-13.320955961954368px;" id="diamond42" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:12373px; top:-67.09574271824873px;" id="diamond43" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:19492px; top:-39.06798253651594px;" id="diamond44" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:25467px; top:-89.56150634018864px;" id="diamond45" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:10590px; top:5.040009037194608px;" id="diamond46" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:30896px; top:-58.92492916704767px;" id="diamond47" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:3961px; top:-32.97158341237237px;" id="diamond48" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:18204px; top:-29.443831043104055px;" id="diamond49" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:21108px; top:5.636029953217374px;" id="diamond50" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:15531px; top:-15.116893163051373px;" id="diamond51" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:23236px; top:31.986315377183246px;" id="diamond52" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:3272px; top:2.424953381134685px;"
                    id="diamond53" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:27775px; top:-76.24261929243832px;" id="diamond54" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:21545px; top:-1.4890156753062342px;" id="diamond55" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:28572px; top:35.54617345236835px;" id="diamond56" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:6638px; top:-36.792185796176334px;" id="diamond57" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:16596px; top:-19.645236158493148px;" id="diamond58" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:33229px; top:-86.37174737839361px;" id="diamond59" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:36065px; top:-60.280641768011726px;" id="diamond60" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:13851px; top:-67.2862775884974px;" id="diamond61" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:27865px; top:-7.62680551998875px;" id="diamond62" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:32978px; top:31.2379334320365px;"
                    id="diamond63" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:20085px; top:34.325061157519485px;" id="diamond64" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:36314px; top:-52.81029817326212px;" id="diamond65" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:2290px; top:-78.71476306266322px;" id="diamond66" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:35921px; top:-72.05265686914319px;" id="diamond67" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:32358px; top:-24.412730531043422px;" id="diamond68" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:21463px; top:-39.88152807931712px;" id="diamond69" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:8983px; top:-21.1415325909242px;"
                    id="diamond70" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:33973px; top:-60.7765648315156px;" id="diamond71" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:7004px; top:28.123398336203195px;" id="diamond72" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:13819px; top:-11.668514754786514px;" id="diamond73" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:16771px; top:5.779861812220574px;" id="diamond74" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:24360px; top:-50.581988692012956px;" id="diamond75" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:21877px; top:39.527050897974334px;" id="diamond76" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:20785px; top:-98.62340152159705px;" id="diamond77" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:27755px; top:11.540631682691952px;" id="diamond78" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:36610px; top:10.113950257058775px;" id="diamond79" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:6029px; top:-10.07972327123197px;" id="diamond80" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:22219px; top:-16.279157877821632px;" id="diamond81" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:21787px; top:-46.98551228632114px;" id="diamond82" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:25212px; top:33.04007622836971px;" id="diamond83" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:20021px; top:-26.971619296914227px;" id="diamond84" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:10572px; top:-97.32684346579946px;" id="diamond85" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:8993px; top:-85.77007665799007px;" id="diamond86" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:14247px; top:-95.52570219233596px;" id="diamond87" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:24926px; top:-56.49203804293877px;" id="diamond88" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:11029px; top:-68.14283223281647px;" id="diamond89" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:27277px; top:-7.380125530628973px;" id="diamond90" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:34357px; top:-2.594206638294608px;" id="diamond91" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:36595px; top:-32.229420302883184px;" id="diamond92" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:29072px; top:13.336152164135783px;" id="diamond93" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:6612px; top:-81.1505837934078px;"
                    id="diamond94" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:18658px; top:10.865920246829276px;" id="diamond95" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:2016px; top:-36.11851688666984px;" id="diamond96" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:30004px; top:-7.816933794074373px;" id="diamond97" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:3817px; top:-49.83540367315334px;" id="diamond98" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:9173px; top:-68.60340458189178px;" id="diamond99" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:18852px; top:-46.83105972509948px;" id="diamond100" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:15100px; top:-86.55575926508777px;" id="diamond101" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:28056px; top:35.34526293458862px;" id="diamond102" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:30634px; top:-88.8327069656635px;" id="diamond103" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:16219px; top:-89.0541685610367px;" id="diamond104" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:9610px; top:-75.68655501395519px;" id="diamond105" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:30873px; top:-35.36026018963672px;" id="diamond106" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:9012px; top:3.67258344160048px;"
                    id="diamond107" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:28584px; top:-22.473495541461503px;" id="diamond108" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:27430px; top:6.337542642936469px;" id="diamond109" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:11643px; top:-60.11121873132663px;" id="diamond110" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:17144px; top:-76.35142157174491px;" id="diamond111" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:21089px; top:-54.979884511418064px;" id="diamond112" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:34663px; top:30.497885653284527px;" id="diamond113" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:8521px; top:29.817440136162986px;" id="diamond114" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:24318px; top:-52.24563041533575px;" id="diamond115" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:20505px; top:26.80174367411705px;" id="diamond116" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:29662px; top:-16.621786964868704px;" id="diamond117" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:37753px; top:-45.988354957625894px;" id="diamond118" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:20091px; top:-18.421331870002092px;" id="diamond119" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:36844px; top:-38.023871592995675px;" id="diamond120" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:31676px; top:-74.0743198166428px;" id="diamond121" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:12488px; top:-86.2822459508553px;" id="diamond122" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:30439px; top:-20.151067581147217px;" id="diamond123" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:19098px; top:-22.56254990443604px;" id="diamond124" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:5825px; top:-53.9609092136838px;"
                    id="diamond125" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:30151px; top:-22.854492356309578px;" id="diamond126" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:29147px; top:-33.27229664232611px;" id="diamond127" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:18711px; top:20.10927307836839px;" id="diamond128" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:24433px; top:31.306426333450474px;" id="diamond129" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:12822px; top:-74.31822266753801px;" id="diamond130" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:4023px; top:-85.7976170779688px;"
                    id="diamond131" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:3607px; top:-90.6828506170468px;"
                    id="diamond132" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:25018px; top:-80.98822478689402px;" id="diamond133" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:34772px; top:-19.6788387104709px;" id="diamond134" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:28638px; top:-48.134663793338234px;" id="diamond135" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:4265px; top:-27.66696600836208px;" id="diamond136" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:10484px; top:-81.1824184772796px;" id="diamond137" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:19396px; top:-83.78879129632561px;" id="diamond138" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:23490px; top:-99.08308490873574px;" id="diamond139" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:5071px; top:-89.00649789266268px;" id="diamond140" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:19763px; top:-49.3509757340525px;" id="diamond141" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:2937px; top:-20.278049365038584px;" id="diamond142" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:21929px; top:9.483839637868968px;" id="diamond143" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:37851px; top:38.039704694562204px;" id="diamond144" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:31634px; top:-42.37939989705666px;" id="diamond145" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:8150px; top:29.593100562464514px;" id="diamond146" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:35458px; top:-17.2217811149157px;" id="diamond147" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:30958px; top:24.530396757843093px;" id="diamond148" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:37206px; top:34.594558457838616px;" id="diamond149" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:18880px; top:35.2373543129095px;"
                    id="diamond150" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:31546px; top:5.461930511588946px;" id="diamond151" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:14009px; top:-48.8178846856662px;" id="diamond152" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:4594px; top:-86.24914389416269px;" id="diamond153" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:28025px; top:-19.752661117761463px;" id="diamond154" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:3537px; top:-20.181036510417755px;" id="diamond155" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:23093px; top:-1.9517100082974537px;" id="diamond156" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:17753px; top:-78.51126445739928px;" id="diamond157" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:13206px; top:18.310979842554204px;" id="diamond158" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:28066px; top:-6.439486197766513px;" id="diamond159" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:4753px; top:-96.60626855213565px;" id="diamond160" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:18296px; top:-36.18462505092828px;" id="diamond161" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:30898px; top:-40.226054738980956px;" id="diamond162" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:35568px; top:28.604196742670638px;" id="diamond163" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:36240px; top:18.81133505908349px;" id="diamond164" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:3698px; top:-10.528357239804151px;" id="diamond165" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:24051px; top:-84.64314011458183px;" id="diamond166" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:11427px; top:-20.334372002939162px;" id="diamond167" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:35329px; top:-10.597953080711079px;" id="diamond168" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:5944px; top:-24.776228079315956px;" id="diamond169" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:7946px; top:10.311028921476932px;" id="diamond170" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:2810px; top:-64.73965942356722px;" id="diamond171" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:14065px; top:26.11351333601054px;" id="diamond172" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:21965px; top:-43.9890677502489px;" id="diamond173" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:32349px; top:-1.4827814104720858px;" id="diamond174" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:30999px; top:-33.90439064564303px;" id="diamond175" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:35397px; top:-54.065925423516035px;" id="diamond176" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:36021px; top:-16.530159182092817px;" id="diamond177" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:18876px; top:29.429676813535735px;" id="diamond178" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:35382px; top:-68.17621424333457px;" id="diamond179" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:28875px; top:-79.631017602889px;"
                    id="diamond180" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:34536px; top:3.62684112080062px;"
                    id="diamond181" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:3668px; top:-47.005493911115224px;" id="diamond182" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:5988px; top:-23.74727926043103px;" id="diamond183" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:29809px; top:0.5125011050620714px;" id="diamond184" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:36056px; top:-40.781308216930455px;" id="diamond185" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:18591px; top:2.709310019421139px;" id="diamond186" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:34315px; top:23.28692321421427px;" id="diamond187" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:14752px; top:24.442618013813686px;" id="diamond188" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:37302px; top:-28.43639386210583px;" id="diamond189" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:10961px; top:31.709022349889324px;" id="diamond190" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:34204px; top:-26.096989958252223px;" id="diamond191" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:10343px; top:-24.444627472574496px;" id="diamond192" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:8554px; top:-31.796063182382454px;" id="diamond193" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:20877px; top:-84.47877851992683px;" id="diamond194" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:27667px; top:-10.150059113168055px;" id="diamond195" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:34422px; top:-31.28777648901844px;" id="diamond196" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:19852px; top:-94.06235324459983px;" id="diamond197" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:24383px; top:19.73647934036937px;" id="diamond198" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:33814px; top:-99.19621276527079px;" id="diamond199" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:3942px; top:0.8180522029360446px;" id="diamond200" />


                <img src="images/flag.gif" id="flag" style="position:absolute; left:37000px; bottom: 100px;" />

            </div>
        </div>
    </div>
    <!--<img src="images/jump.png"  style="position:absolute; z-index:55555; right:11px;  bottom:12px;"  onclick="jumper();" />-->

    <div class="seenlayer">
        <div class="kutubminar"></div>
        <div class="palace"></div>
        <div class="kutubminar2"></div>
        <div class="palace2"></div>
        <div class="kutubminar3"></div>
        <div class="palace3"></div>
        <div class="kutubminar4"></div>
        <div class="palace4"></div>
        <div class="kutubminar5"></div>
        <div class="palace5"></div>
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


            <div class="mush0" style="left:100px;"></div>
            <div class="mush0" style="left:300px;"></div>
            <div class="mush0" style="left:500px;"></div>
            <div class="mush0" style="left:600px;"></div>
            <div class="mush0" style="left:800px;"></div>
            <div class="mush0" style="left:900px;"></div>
            <div class="mush0" style="left:1100px;"></div>
            <div class="mush0" style="left:1200px;"></div>
            <div class="mush0" style="left:1400px;"></div>
            <div class="mush0" style="left:16000px;"></div>


            <div class="mush2" style="left:2100px;"></div>
            <div class="mush2" style="left:2200px;"></div>
            <div class="mush1" style="left:2300px;"></div>
            <div class="mush1" style="left:2400px;"></div>
            <div class="mush1" style="left:2500px;"></div>
            <div class="mush1" style="left:2600px;"></div>
            <div class="mush1" style="left:2700px;"></div>
            <div class="mush2" style="left:2800px;"></div>
            <div class="mush2" style="left:2900px;"></div>
            <div class="mush1" style="left:3000px;"></div>
            <div class="mush2" style="left:3100px;"></div>
            <div class="mush1" style="left:3200px;"></div>
            <div class="mush1" style="left:3300px;"></div>
            <div class="mush2" style="left:3400px;"></div>
            <div class="mush2" style="left:3500px;"></div>
            <div class="mush1" style="left:3600px;"></div>
            <div class="mush1" style="left:3700px;"></div>
            <div class="mush1" style="left:3800px;"></div>
            <div class="mush2" style="left:3900px;"></div>
            <div class="mush1" style="left:4000px;"></div>
            <div class="mush2" style="left:4100px;"></div>
            <div class="mush2" style="left:4200px;"></div>
            <div class="mush2" style="left:4300px;"></div>
            <div class="mush1" style="left:4400px;"></div>
            <div class="mush1" style="left:4500px;"></div>
            <div class="mush1" style="left:4600px;"></div>
            <div class="mush2" style="left:4700px;"></div>
            <div class="mush1" style="left:4800px;"></div>
            <div class="mush2" style="left:4900px;"></div>
            <div class="mush2" style="left:5000px;"></div>
            <div class="mush1" style="left:5100px;"></div>
            <div class="mush1" style="left:5200px;"></div>
            <div class="mush1" style="left:5300px;"></div>
            <div class="mush2" style="left:5400px;"></div>
            <div class="mush2" style="left:5500px;"></div>
            <div class="mush2" style="left:5600px;"></div>
            <div class="mush2" style="left:5700px;"></div>
            <div class="mush2" style="left:5800px;"></div>
            <div class="mush1" style="left:5900px;"></div>
            <div class="mush1" style="left:6000px;"></div>
            <div class="mush1" style="left:6100px;"></div>
            <div class="mush2" style="left:6200px;"></div>
            <div class="mush2" style="left:6300px;"></div>
            <div class="mush2" style="left:6400px;"></div>
            <div class="mush2" style="left:6500px;"></div>
            <div class="mush1" style="left:6600px;"></div>
            <div class="mush1" style="left:6700px;"></div>
            <div class="mush2" style="left:6800px;"></div>
            <div class="mush1" style="left:6900px;"></div>
            <div class="mush2" style="left:7000px;"></div>
            <div class="mush1" style="left:7100px;"></div>
            <div class="mush2" style="left:7200px;"></div>
            <div class="mush1" style="left:7300px;"></div>
            <div class="mush1" style="left:7400px;"></div>
            <div class="mush2" style="left:7500px;"></div>
            <div class="mush1" style="left:7600px;"></div>
            <div class="mush2" style="left:7700px;"></div>
            <div class="mush1" style="left:7800px;"></div>
            <div class="mush1" style="left:7900px;"></div>
            <div class="mush1" style="left:8000px;"></div>
            <div class="mush2" style="left:8100px;"></div>
            <div class="mush1" style="left:8200px;"></div>
            <div class="mush2" style="left:8300px;"></div>
            <div class="mush1" style="left:8400px;"></div>
            <div class="mush2" style="left:8500px;"></div>
            <div class="mush2" style="left:8600px;"></div>
            <div class="mush1" style="left:8700px;"></div>
            <div class="mush2" style="left:8800px;"></div>
            <div class="mush2" style="left:8900px;"></div>
            <div class="mush1" style="left:9000px;"></div>
            <div class="mush1" style="left:9100px;"></div>
            <div class="mush1" style="left:9200px;"></div>
            <div class="mush2" style="left:9300px;"></div>
            <div class="mush1" style="left:9400px;"></div>
            <div class="mush1" style="left:9500px;"></div>
            <div class="mush1" style="left:9600px;"></div>
            <div class="mush2" style="left:9700px;"></div>
            <div class="mush1" style="left:9800px;"></div>
            <div class="mush1" style="left:9900px;"></div>
            <div class="mush1" style="left:10000px;"></div>
            <div class="mush2" style="left:10100px;"></div>
            <div class="mush2" style="left:10200px;"></div>
            <div class="mush1" style="left:10300px;"></div>
            <div class="mush2" style="left:10400px;"></div>
            <div class="mush1" style="left:10500px;"></div>
            <div class="mush1" style="left:10600px;"></div>
            <div class="mush1" style="left:10700px;"></div>
            <div class="mush1" style="left:10800px;"></div>
            <div class="mush1" style="left:10900px;"></div>
            <div class="mush1" style="left:11000px;"></div>
            <div class="mush1" style="left:11100px;"></div>
            <div class="mush2" style="left:11200px;"></div>
            <div class="mush1" style="left:11300px;"></div>
            <div class="mush2" style="left:11400px;"></div>
            <div class="mush2" style="left:11500px;"></div>
            <div class="mush2" style="left:11600px;"></div>
            <div class="mush1" style="left:11700px;"></div>
            <div class="mush2" style="left:11800px;"></div>
            <div class="mush2" style="left:11900px;"></div>
            <div class="mush2" style="left:12000px;"></div>
            <div class="mush2" style="left:12100px;"></div>
            <div class="mush1" style="left:12200px;"></div>
            <div class="mush1" style="left:12300px;"></div>
            <div class="mush2" style="left:12400px;"></div>
            <div class="mush2" style="left:12500px;"></div>
            <div class="mush2" style="left:12600px;"></div>
            <div class="mush1" style="left:12700px;"></div>
            <div class="mush2" style="left:12800px;"></div>
            <div class="mush1" style="left:12900px;"></div>
            <div class="mush1" style="left:13000px;"></div>
            <div class="mush1" style="left:13100px;"></div>
            <div class="mush2" style="left:13200px;"></div>
            <div class="mush1" style="left:13300px;"></div>
            <div class="mush1" style="left:13400px;"></div>
            <div class="mush2" style="left:13500px;"></div>
            <div class="mush2" style="left:13600px;"></div>
            <div class="mush1" style="left:13700px;"></div>
            <div class="mush2" style="left:13800px;"></div>
            <div class="mush1" style="left:13900px;"></div>
            <div class="mush1" style="left:14000px;"></div>
            <div class="mush1" style="left:14100px;"></div>
            <div class="mush1" style="left:14200px;"></div>
            <div class="mush2" style="left:14300px;"></div>
            <div class="mush2" style="left:14400px;"></div>
            <div class="mush2" style="left:14500px;"></div>
            <div class="mush2" style="left:14600px;"></div>
            <div class="mush1" style="left:14700px;"></div>
            <div class="mush2" style="left:14800px;"></div>
            <div class="mush1" style="left:14900px;"></div>
            <div class="mush2" style="left:15000px;"></div>
            <div class="mush1" style="left:15100px;"></div>
            <div class="mush2" style="left:15200px;"></div>
            <div class="mush1" style="left:15300px;"></div>
            <div class="mush1" style="left:15400px;"></div>
            <div class="mush2" style="left:15500px;"></div>
            <div class="mush1" style="left:15600px;"></div>
            <div class="mush2" style="left:15700px;"></div>
            <div class="mush2" style="left:15800px;"></div>
            <div class="mush1" style="left:15900px;"></div>
            <div class="mush1" style="left:16000px;"></div>
            <div class="mush1" style="left:16100px;"></div>
            <div class="mush2" style="left:16200px;"></div>
            <div class="mush1" style="left:16300px;"></div>
            <div class="mush1" style="left:16400px;"></div>
            <div class="mush1" style="left:16500px;"></div>
            <div class="mush1" style="left:16600px;"></div>
            <div class="mush2" style="left:16700px;"></div>
            <div class="mush1" style="left:16800px;"></div>
            <div class="mush1" style="left:16900px;"></div>
            <div class="mush1" style="left:17000px;"></div>
            <div class="mush1" style="left:17100px;"></div>
            <div class="mush2" style="left:17200px;"></div>
            <div class="mush2" style="left:17300px;"></div>
            <div class="mush2" style="left:17400px;"></div>
            <div class="mush2" style="left:17500px;"></div>
            <div class="mush1" style="left:17600px;"></div>
            <div class="mush1" style="left:17700px;"></div>
            <div class="mush1" style="left:17800px;"></div>
            <div class="mush1" style="left:17900px;"></div>
            <div class="mush1" style="left:18000px;"></div>
            <div class="mush2" style="left:18100px;"></div>
            <div class="mush1" style="left:18200px;"></div>
            <div class="mush2" style="left:18300px;"></div>
            <div class="mush1" style="left:18400px;"></div>
            <div class="mush1" style="left:18500px;"></div>
            <div class="mush2" style="left:18600px;"></div>
            <div class="mush1" style="left:18700px;"></div>
            <div class="mush1" style="left:18800px;"></div>
            <div class="mush1" style="left:18900px;"></div>
            <div class="mush2" style="left:19000px;"></div>
            <div class="mush2" style="left:19100px;"></div>
            <div class="mush2" style="left:19200px;"></div>
            <div class="mush2" style="left:19300px;"></div>
            <div class="mush2" style="left:19400px;"></div>
            <div class="mush2" style="left:19500px;"></div>
            <div class="mush2" style="left:19600px;"></div>
            <div class="mush1" style="left:19700px;"></div>
            <div class="mush1" style="left:19800px;"></div>
            <div class="mush1" style="left:19900px;"></div>
            <div class="mush1" style="left:20000px;"></div>
            <div class="mush1" style="left:20100px;"></div>
            <div class="mush2" style="left:20200px;"></div>
            <div class="mush2" style="left:20300px;"></div>
            <div class="mush1" style="left:20400px;"></div>
            <div class="mush2" style="left:20500px;"></div>
            <div class="mush1" style="left:20600px;"></div>
            <div class="mush2" style="left:20700px;"></div>
            <div class="mush1" style="left:20800px;"></div>
            <div class="mush2" style="left:20900px;"></div>
            <div class="mush2" style="left:21000px;"></div>
            <div class="mush2" style="left:21100px;"></div>
            <div class="mush2" style="left:21200px;"></div>
            <div class="mush2" style="left:21300px;"></div>
            <div class="mush2" style="left:21400px;"></div>
            <div class="mush1" style="left:21500px;"></div>
            <div class="mush2" style="left:21600px;"></div>
            <div class="mush2" style="left:21700px;"></div>
            <div class="mush2" style="left:21800px;"></div>
            <div class="mush1" style="left:21900px;"></div>
            <div class="mush1" style="left:22000px;"></div>
            <div class="mush2" style="left:22100px;"></div>
            <div class="mush1" style="left:22200px;"></div>
            <div class="mush2" style="left:22300px;"></div>
            <div class="mush1" style="left:22400px;"></div>
            <div class="mush1" style="left:22500px;"></div>
            <div class="mush1" style="left:22600px;"></div>
            <div class="mush2" style="left:22700px;"></div>
            <div class="mush2" style="left:22800px;"></div>
            <div class="mush1" style="left:22900px;"></div>
            <div class="mush1" style="left:23000px;"></div>
            <div class="mush2" style="left:23100px;"></div>
            <div class="mush1" style="left:23200px;"></div>
            <div class="mush1" style="left:23300px;"></div>
            <div class="mush2" style="left:23400px;"></div>
            <div class="mush1" style="left:23500px;"></div>
            <div class="mush1" style="left:23600px;"></div>
            <div class="mush1" style="left:23700px;"></div>
            <div class="mush1" style="left:23800px;"></div>
            <div class="mush1" style="left:23900px;"></div>
            <div class="mush1" style="left:24000px;"></div>
            <div class="mush2" style="left:24100px;"></div>
            <div class="mush2" style="left:24200px;"></div>
            <div class="mush2" style="left:24300px;"></div>
            <div class="mush2" style="left:24400px;"></div>
            <div class="mush2" style="left:24500px;"></div>
            <div class="mush1" style="left:24600px;"></div>
            <div class="mush1" style="left:24700px;"></div>
            <div class="mush1" style="left:24800px;"></div>
            <div class="mush1" style="left:24900px;"></div>
            <div class="mush1" style="left:25000px;"></div>
            <div class="mush2" style="left:25100px;"></div>
            <div class="mush1" style="left:25200px;"></div>
            <div class="mush2" style="left:25300px;"></div>
            <div class="mush1" style="left:25400px;"></div>
            <div class="mush1" style="left:25500px;"></div>
            <div class="mush1" style="left:25600px;"></div>
            <div class="mush2" style="left:25700px;"></div>
            <div class="mush1" style="left:25800px;"></div>
            <div class="mush1" style="left:25900px;"></div>
            <div class="mush1" style="left:26000px;"></div>
            <div class="mush2" style="left:26100px;"></div>
            <div class="mush1" style="left:26200px;"></div>
            <div class="mush2" style="left:26300px;"></div>
            <div class="mush1" style="left:26400px;"></div>
            <div class="mush1" style="left:26500px;"></div>
            <div class="mush2" style="left:26600px;"></div>
            <div class="mush2" style="left:26700px;"></div>
            <div class="mush2" style="left:26800px;"></div>
            <div class="mush2" style="left:26900px;"></div>
            <div class="mush2" style="left:27000px;"></div>
            <div class="mush1" style="left:27100px;"></div>
            <div class="mush2" style="left:27200px;"></div>
            <div class="mush1" style="left:27300px;"></div>
            <div class="mush2" style="left:27400px;"></div>
            <div class="mush1" style="left:27500px;"></div>
            <div class="mush2" style="left:27600px;"></div>
            <div class="mush2" style="left:27700px;"></div>
            <div class="mush2" style="left:27800px;"></div>
            <div class="mush1" style="left:27900px;"></div>
            <div class="mush2" style="left:28000px;"></div>
            <div class="mush2" style="left:28100px;"></div>
            <div class="mush2" style="left:28200px;"></div>
            <div class="mush1" style="left:28300px;"></div>
            <div class="mush2" style="left:28400px;"></div>
            <div class="mush2" style="left:28500px;"></div>
            <div class="mush2" style="left:28600px;"></div>
            <div class="mush2" style="left:28700px;"></div>
            <div class="mush1" style="left:28800px;"></div>
            <div class="mush2" style="left:28900px;"></div>
            <div class="mush1" style="left:29000px;"></div>
            <div class="mush1" style="left:29100px;"></div>
            <div class="mush2" style="left:29200px;"></div>
            <div class="mush1" style="left:29300px;"></div>
            <div class="mush1" style="left:29400px;"></div>
            <div class="mush2" style="left:29500px;"></div>
            <div class="mush1" style="left:29600px;"></div>
            <div class="mush1" style="left:29700px;"></div>
            <div class="mush1" style="left:29800px;"></div>
            <div class="mush2" style="left:29900px;"></div>
            <div class="mush1" style="left:30000px;"></div>
            <div class="mush2" style="left:30100px;"></div>
            <div class="mush2" style="left:30200px;"></div>
            <div class="mush2" style="left:30300px;"></div>
            <div class="mush1" style="left:30400px;"></div>
            <div class="mush2" style="left:30500px;"></div>
            <div class="mush2" style="left:30600px;"></div>
            <div class="mush2" style="left:30700px;"></div>
            <div class="mush1" style="left:30800px;"></div>
            <div class="mush1" style="left:30900px;"></div>
            <div class="mush2" style="left:31000px;"></div>
            <div class="mush2" style="left:31100px;"></div>
            <div class="mush2" style="left:31200px;"></div>
            <div class="mush1" style="left:31300px;"></div>
            <div class="mush1" style="left:31400px;"></div>
            <div class="mush2" style="left:31500px;"></div>
            <div class="mush2" style="left:31600px;"></div>
            <div class="mush2" style="left:31700px;"></div>
            <div class="mush2" style="left:31800px;"></div>
            <div class="mush2" style="left:31900px;"></div>
            <div class="mush2" style="left:32000px;"></div>
            <div class="mush1" style="left:32100px;"></div>
            <div class="mush2" style="left:32200px;"></div>
            <div class="mush2" style="left:32300px;"></div>
            <div class="mush2" style="left:32400px;"></div>
            <div class="mush2" style="left:32500px;"></div>
            <div class="mush1" style="left:32600px;"></div>
            <div class="mush2" style="left:32700px;"></div>
            <div class="mush1" style="left:32800px;"></div>
            <div class="mush1" style="left:32900px;"></div>
            <div class="mush1" style="left:33000px;"></div>
            <div class="mush2" style="left:33100px;"></div>
            <div class="mush1" style="left:33200px;"></div>
            <div class="mush2" style="left:33300px;"></div>
            <div class="mush1" style="left:33400px;"></div>
            <div class="mush1" style="left:33500px;"></div>
            <div class="mush1" style="left:33600px;"></div>
            <div class="mush2" style="left:33700px;"></div>
            <div class="mush1" style="left:33800px;"></div>
            <div class="mush2" style="left:33900px;"></div>
            <div class="mush2" style="left:34000px;"></div>
            <div class="mush2" style="left:34100px;"></div>
            <div class="mush1" style="left:34200px;"></div>
            <div class="mush2" style="left:34300px;"></div>
            <div class="mush1" style="left:34400px;"></div>
            <div class="mush2" style="left:34500px;"></div>
            <div class="mush2" style="left:34600px;"></div>
            <div class="mush1" style="left:34700px;"></div>
            <div class="mush1" style="left:34800px;"></div>
            <div class="mush2" style="left:34900px;"></div>
            <div class="mush1" style="left:35000px;"></div>
            <div class="mush1" style="left:35100px;"></div>
            <div class="mush1" style="left:35200px;"></div>
            <div class="mush1" style="left:35300px;"></div>
            <div class="mush1" style="left:35400px;"></div>
            <div class="mush2" style="left:35500px;"></div>
            <div class="mush2" style="left:35600px;"></div>
            <div class="mush2" style="left:35700px;"></div>
            <div class="mush2" style="left:35800px;"></div>
            <div class="mush2" style="left:35900px;"></div>
            <div class="mush2" style="left:36000px;"></div>
            <div class="mush2" style="left:36100px;"></div>
            <div class="mush2" style="left:36200px;"></div>
            <div class="mush1" style="left:36300px;"></div>
            <div class="mush1" style="left:36400px;"></div>
            <div class="mush2" style="left:36500px;"></div>
            <div class="mush2" style="left:36600px;"></div>
            <div class="mush1" style="left:36700px;"></div>
            <div class="mush1" style="left:36800px;"></div>
            <div class="mush2" style="left:36900px;"></div>
            <div class="mush1" style="left:37000px;"></div>
            <div class="mush2" style="left:37100px;"></div>
            <div class="mush1" style="left:37200px;"></div>
            <div class="mush2" style="left:37300px;"></div>
            <div class="mush2" style="left:37400px;"></div>
            <div class="mush2" style="left:37500px;"></div>
            <div class="mush1" style="left:37600px;"></div>
            <div class="mush2" style="left:37700px;"></div>
            <div class="mush2" style="left:37800px;"></div>
            <div class="mush1" style="left:37900px;"></div>



            <div class="tree1" style="left:800px;"></div>
            <div class="tree1" style="left:1450px;"></div>
            <div class="tree1" style="left:3400px;"></div>
            <div class="tree1" style="left:4700px;"></div>
            <div class="tree1" style="left:5200px;"></div>
            <div class="tree2" style="left:6800px;"></div>
            <div class="tree2" style="left:7300px;"></div>
            <div class="tree2" style="left:8400px;"></div>
            <div class="tree2" style="left:920px;"></div>
            <div class="tree2" style="left:10300px;"></div>
            <div class="tree2" style="left:11700px;"></div>


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

            <div class="stone1" style="left:2000px;"></div>
            <div class="stone1" style="left:2500px;"></div>
            <div class="stone1" style="left:3000px;"></div>
            <div class="stone1" style="left:3500px;"></div>
            <div class="stone1" style="left:4000px;"></div>
            <div class="stone1" style="left:4500px;"></div>
            <div class="stone1" style="left:5000px;"></div>
            <div class="stone1" style="left:5500px;"></div>
            <div class="stone1" style="left:6000px;"></div>
            <div class="stone1" style="left:6500px;"></div>
            <div class="stone1" style="left:7000px;"></div>
            <div class="stone1" style="left:7500px;"></div>
            <div class="stone1" style="left:8000px;"></div>
            <div class="stone1" style="left:8500px;"></div>
            <div class="stone1" style="left:9000px;"></div>
            <div class="stone1" style="left:9500px;"></div>
            <div class="stone1" style="left:10000px;"></div>
            <div class="stone1" style="left:10500px;"></div>
            <div class="stone1" style="left:11000px;"></div>
            <div class="stone1" style="left:11500px;"></div>
            <div class="stone1" style="left:12000px;"></div>
            <div class="stone1" style="left:12500px;"></div>
            <div class="stone1" style="left:13000px;"></div>
            <div class="stone1" style="left:13500px;"></div>
            <div class="stone1" style="left:14000px;"></div>
            <div class="stone1" style="left:14500px;"></div>
            <div class="stone1" style="left:15000px;"></div>
            <div class="stone1" style="left:15500px;"></div>
            <div class="stone1" style="left:16000px;"></div>
            <div class="stone1" style="left:16500px;"></div>
            <div class="stone1" style="left:17000px;"></div>
            <div class="stone1" style="left:17500px;"></div>
            <div class="stone1" style="left:18000px;"></div>
            <div class="stone1" style="left:18500px;"></div>
            <div class="stone1" style="left:19000px;"></div>
            <div class="stone1" style="left:19500px;"></div>
            <div class="stone1" style="left:20000px;"></div>
            <div class="stone1" style="left:20500px;"></div>
            <div class="stone1" style="left:21000px;"></div>
            <div class="stone1" style="left:21500px;"></div>
            <div class="stone1" style="left:22000px;"></div>
            <div class="stone1" style="left:22500px;"></div>
            <div class="stone1" style="left:23000px;"></div>
            <div class="stone1" style="left:23500px;"></div>
            <div class="stone1" style="left:24000px;"></div>
            <div class="stone1" style="left:24500px;"></div>
            <div class="stone1" style="left:25000px;"></div>
            <div class="stone1" style="left:25500px;"></div>
            <div class="stone1" style="left:26000px;"></div>
            <div class="stone1" style="left:26500px;"></div>
            <div class="stone1" style="left:27000px;"></div>
            <div class="stone1" style="left:27500px;"></div>
            <div class="stone1" style="left:28000px;"></div>
            <div class="stone1" style="left:28500px;"></div>
            <div class="stone1" style="left:29000px;"></div>
            <div class="stone1" style="left:29500px;"></div>
            <div class="stone1" style="left:30000px;"></div>
            <div class="stone1" style="left:30500px;"></div>
            <div class="stone1" style="left:31000px;"></div>
            <div class="stone1" style="left:31500px;"></div>
            <div class="stone1" style="left:32000px;"></div>
            <div class="stone1" style="left:32500px;"></div>
            <div class="stone1" style="left:33000px;"></div>
            <div class="stone1" style="left:33500px;"></div>
            <div class="stone1" style="left:34000px;"></div>
            <div class="stone1" style="left:34500px;"></div>
            <div class="stone1" style="left:35000px;"></div>
            <div class="stone1" style="left:35500px;"></div>
            <div class="stone1" style="left:36000px;"></div>
            <div class="stone1" style="left:36500px;"></div>
            <div class="stone1" style="left:37000px;"></div>
            <div class="stone1" style="left:37500px;"></div>
            <div class="stone1" style="left:38000px;"></div>
            <div class="stone1" style="left:38500px;"></div>
            <div class="stone1" style="left:39000px;"></div>
            <div class="stone1" style="left:39500px;"></div>
            <div class="stone1" style="left:40000px;"></div>
            <div class="stone1" style="left:40500px;"></div>
            <div class="stone1" style="left:41000px;"></div>
            <div class="stone1" style="left:41500px;"></div>
            <div class="stone1" style="left:42000px;"></div>
            <div class="stone1" style="left:42500px;"></div>
            <div class="stone1" style="left:43000px;"></div>
            <div class="stone1" style="left:43500px;"></div>
            <div class="stone1" style="left:44000px;"></div>
            <div class="stone1" style="left:44500px;"></div>
            <div class="stone1" style="left:45000px;"></div>
            <div class="stone1" style="left:45500px;"></div>
            <div class="stone1" style="left:46000px;"></div>
            <div class="stone1" style="left:46500px;"></div>
            <div class="stone1" style="left:47000px;"></div>
            <div class="stone1" style="left:47500px;"></div>
            <div class="stone1" style="left:48000px;"></div>
            <div class="stone1" style="left:48500px;"></div>
            <div class="stone1" style="left:49000px;"></div>
            <div class="stone1" style="left:49500px;"></div>
            <div class="stone1" style="left:50000px;"></div>
            <div class="stone1" style="left:50500px;"></div>
            <div class="stone1" style="left:51000px;"></div>
            <div class="stone1" style="left:51500px;"></div>
            <div class="stone1" style="left:52000px;"></div>
            <div class="stone1" style="left:52500px;"></div>
            <div class="stone1" style="left:53000px;"></div>
            <div class="stone1" style="left:53500px;"></div>
            <div class="stone1" style="left:54000px;"></div>
            <div class="stone1" style="left:54500px;"></div>
            <div class="stone1" style="left:55000px;"></div>
            <div class="stone1" style="left:55500px;"></div>
            <div class="stone1" style="left:56000px;"></div>
            <div class="stone1" style="left:56500px;"></div>
            <div class="stone1" style="left:57000px;"></div>
            <div class="stone1" style="left:57500px;"></div>
            <div class="stone1" style="left:58000px;"></div>
            <div class="stone1" style="left:58500px;"></div>
            <div class="stone1" style="left:59000px;"></div>
            <div class="stone1" style="left:59500px;"></div>
            <div class="stone1" style="left:60000px;"></div>
            <div class="stone1" style="left:60500px;"></div>
            <div class="stone1" style="left:61000px;"></div>
            <div class="stone1" style="left:61500px;"></div>
            <div class="stone1" style="left:62000px;"></div>
            <div class="stone1" style="left:62500px;"></div>
            <div class="stone1" style="left:63000px;"></div>
            <div class="stone1" style="left:63500px;"></div>
            <div class="stone1" style="left:64000px;"></div>
            <div class="stone1" style="left:64500px;"></div>
            <div class="stone1" style="left:65000px;"></div>
            <div class="stone1" style="left:65500px;"></div>
            <div class="stone1" style="left:66000px;"></div>
            <div class="stone1" style="left:66500px;"></div>
            <div class="stone1" style="left:67000px;"></div>
            <div class="stone1" style="left:67500px;"></div>
            <div class="stone1" style="left:68000px;"></div>
            <div class="stone1" style="left:68500px;"></div>
            <div class="stone1" style="left:69000px;"></div>
            <div class="stone1" style="left:69500px;"></div>
            <div class="stone1" style="left:70000px;"></div>
            <div class="stone1" style="left:70500px;"></div>
            <div class="stone1" style="left:71000px;"></div>
            <div class="stone1" style="left:71500px;"></div>
            <div class="stone1" style="left:72000px;"></div>
            <div class="stone1" style="left:72500px;"></div>
            <div class="stone1" style="left:73000px;"></div>
            <div class="stone1" style="left:73500px;"></div>
            <div class="stone1" style="left:74000px;"></div>
            <div class="stone1" style="left:74500px;"></div>
            <div class="stone1" style="left:75000px;"></div>
            <div class="stone1" style="left:75500px;"></div>
            <div class="stone1" style="left:76000px;"></div>
            <div class="stone1" style="left:76500px;"></div>
            <div class="stone1" style="left:77000px;"></div>
            <div class="stone1" style="left:77500px;"></div>
            <div class="stone1" style="left:78000px;"></div>
            <div class="stone1" style="left:78500px;"></div>
            <div class="stone1" style="left:79000px;"></div>
            <div class="stone1" style="left:79500px;"></div>
            <div class="stone1" style="left:80000px;"></div>
            <div class="stone1" style="left:80500px;"></div>
            <div class="stone1" style="left:81000px;"></div>
            <div class="stone1" style="left:81500px;"></div>
            <div class="stone1" style="left:82000px;"></div>
            <div class="stone1" style="left:82500px;"></div>
            <div class="stone1" style="left:83000px;"></div>
            <div class="stone1" style="left:83500px;"></div>
            <div class="stone1" style="left:84000px;"></div>
            <div class="stone1" style="left:84500px;"></div>
            <div class="stone1" style="left:85000px;"></div>
            <div class="stone1" style="left:85500px;"></div>
            <div class="stone1" style="left:86000px;"></div>
            <div class="stone1" style="left:86500px;"></div>
            <div class="stone1" style="left:87000px;"></div>
            <div class="stone1" style="left:87500px;"></div>
            <div class="stone1" style="left:88000px;"></div>
            <div class="stone1" style="left:88500px;"></div>
            <div class="stone1" style="left:89000px;"></div>
            <div class="stone1" style="left:89500px;"></div>
            <div class="stone1" style="left:90000px;"></div>
            <div class="stone1" style="left:90500px;"></div>
            <div class="stone1" style="left:91000px;"></div>
            <div class="stone1" style="left:91500px;"></div>
            <div class="stone1" style="left:92000px;"></div>
            <div class="stone1" style="left:92500px;"></div>
            <div class="stone1" style="left:93000px;"></div>
            <div class="stone1" style="left:93500px;"></div>
            <div class="stone1" style="left:94000px;"></div>
            <div class="stone1" style="left:94500px;"></div>
            <div class="stone1" style="left:95000px;"></div>
            <div class="stone1" style="left:95500px;"></div>
            <div class="stone1" style="left:96000px;"></div>
            <div class="stone1" style="left:96500px;"></div>
            <div class="stone1" style="left:97000px;"></div>
            <div class="stone1" style="left:97500px;"></div>
            <div class="stone1" style="left:98000px;"></div>
            <div class="stone1" style="left:98500px;"></div>
            <div class="stone1" style="left:99000px;"></div>
            <div class="stone1" style="left:99500px;"></div>
            <div class="stone1" style="left:100000px;"></div>
            <div class="stone1" style="left:100500px;"></div>
            <div class="stone1" style="left:101000px;"></div>
            <div class="stone1" style="left:101500px;"></div>
            <div class="stone1" style="left:102000px;"></div>
            <div class="stone1" style="left:102500px;"></div>
            <div class="stone1" style="left:103000px;"></div>
            <div class="stone1" style="left:103500px;"></div>
            <div class="stone1" style="left:104000px;"></div>
            <div class="stone1" style="left:104500px;"></div>
            <div class="stone1" style="left:105000px;"></div>
            <div class="stone1" style="left:105500px;"></div>
            <div class="stone1" style="left:106000px;"></div>
            <div class="stone1" style="left:106500px;"></div>
            <div class="stone1" style="left:107000px;"></div>
            <div class="stone1" style="left:107500px;"></div>
            <div class="stone1" style="left:108000px;"></div>
            <div class="stone1" style="left:108500px;"></div>
            <div class="stone1" style="left:109000px;"></div>
            <div class="stone1" style="left:109500px;"></div>
            <div class="stone1" style="left:110000px;"></div>
            <div class="stone1" style="left:110500px;"></div>
            <div class="stone1" style="left:111000px;"></div>
            <div class="stone1" style="left:111500px;"></div>
            <div class="stone1" style="left:112000px;"></div>
            <div class="stone1" style="left:112500px;"></div>
            <div class="stone1" style="left:113000px;"></div>
            <div class="stone1" style="left:113500px;"></div>
            <div class="stone1" style="left:114000px;"></div>
            <div class="stone1" style="left:114500px;"></div>
            <div class="stone1" style="left:115000px;"></div>
            <div class="stone1" style="left:115500px;"></div>
            <div class="stone1" style="left:116000px;"></div>
            <div class="stone1" style="left:116500px;"></div>
            <div class="stone1" style="left:117000px;"></div>
            <div class="stone1" style="left:117500px;"></div>
            <div class="stone1" style="left:118000px;"></div>
            <div class="stone1" style="left:118500px;"></div>
            <div class="stone1" style="left:119000px;"></div>
            <div class="stone1" style="left:119500px;"></div>
            <div class="stone1" style="left:120000px;"></div>
            <div class="stone1" style="left:120500px;"></div>
            <div class="stone1" style="left:121000px;"></div>
            <div class="stone1" style="left:121500px;"></div>
            <div class="stone1" style="left:122000px;"></div>
            <div class="stone1" style="left:122500px;"></div>
            <div class="stone1" style="left:123000px;"></div>
            <div class="stone1" style="left:123500px;"></div>
            <div class="stone1" style="left:124000px;"></div>
            <div class="stone1" style="left:124500px;"></div>
            <div class="stone1" style="left:125000px;"></div>
            <div class="stone1" style="left:125500px;"></div>
            <div class="stone1" style="left:126000px;"></div>
            <div class="stone1" style="left:126500px;"></div>
            <div class="stone1" style="left:127000px;"></div>
            <div class="stone1" style="left:127500px;"></div>
            <div class="stone1" style="left:128000px;"></div>
            <div class="stone1" style="left:128500px;"></div>
            <div class="stone1" style="left:129000px;"></div>
            <div class="stone1" style="left:129500px;"></div>
            <div class="stone1" style="left:130000px;"></div>
            <div class="stone1" style="left:130500px;"></div>
            <div class="stone1" style="left:131000px;"></div>
            <div class="stone1" style="left:131500px;"></div>
            <div class="stone1" style="left:132000px;"></div>
            <div class="stone1" style="left:132500px;"></div>
            <div class="stone1" style="left:133000px;"></div>
            <div class="stone1" style="left:133500px;"></div>
            <div class="stone1" style="left:134000px;"></div>
            <div class="stone1" style="left:134500px;"></div>
            <div class="stone1" style="left:135000px;"></div>
            <div class="stone1" style="left:135500px;"></div>
            <div class="stone1" style="left:136000px;"></div>
            <div class="stone1" style="left:136500px;"></div>
            <div class="stone1" style="left:137000px;"></div>
            <div class="stone1" style="left:137500px;"></div>
            <div class="stone1" style="left:138000px;"></div>
            <div class="stone1" style="left:138500px;"></div>
            <div class="stone1" style="left:139000px;"></div>
            <div class="stone1" style="left:139500px;"></div>
            <div class="stone1" style="left:140000px;"></div>
            <div class="stone1" style="left:140500px;"></div>
            <div class="stone1" style="left:141000px;"></div>
            <div class="stone1" style="left:141500px;"></div>
            <div class="stone1" style="left:142000px;"></div>
            <div class="stone1" style="left:142500px;"></div>
            <div class="stone1" style="left:143000px;"></div>
            <div class="stone1" style="left:143500px;"></div>
            <div class="stone1" style="left:144000px;"></div>
            <div class="stone1" style="left:144500px;"></div>
            <div class="stone1" style="left:145000px;"></div>
            <div class="stone1" style="left:145500px;"></div>
            <div class="stone1" style="left:146000px;"></div>
            <div class="stone1" style="left:146500px;"></div>
            <div class="stone1" style="left:147000px;"></div>
            <div class="stone1" style="left:147500px;"></div>
            <div class="stone1" style="left:148000px;"></div>
            <div class="stone1" style="left:148500px;"></div>
            <div class="stone1" style="left:149000px;"></div>
            <div class="stone1" style="left:149500px;"></div>
            <div class="stone1" style="left:150000px;"></div>
            <div class="stone1" style="left:150500px;"></div>
            <div class="stone1" style="left:151000px;"></div>
            <div class="stone1" style="left:151500px;"></div>
            <div class="stone1" style="left:152000px;"></div>
            <div class="stone1" style="left:152500px;"></div>
            <div class="stone1" style="left:153000px;"></div>
            <div class="stone1" style="left:153500px;"></div>
            <div class="stone1" style="left:154000px;"></div>
            <div class="stone1" style="left:154500px;"></div>
            <div class="stone1" style="left:155000px;"></div>
            <div class="stone1" style="left:155500px;"></div>
            <div class="stone1" style="left:156000px;"></div>
            <div class="stone1" style="left:156500px;"></div>
            <div class="stone1" style="left:157000px;"></div>
            <div class="stone1" style="left:157500px;"></div>
            <div class="stone1" style="left:158000px;"></div>
            <div class="stone1" style="left:158500px;"></div>
            <div class="stone1" style="left:159000px;"></div>
            <div class="stone1" style="left:159500px;"></div>
            <div class="stone1" style="left:160000px;"></div>
            <div class="stone1" style="left:160500px;"></div>
            <div class="stone1" style="left:161000px;"></div>
            <div class="stone1" style="left:161500px;"></div>
            <div class="stone1" style="left:162000px;"></div>
            <div class="stone1" style="left:162500px;"></div>
            <div class="stone1" style="left:163000px;"></div>
            <div class="stone1" style="left:163500px;"></div>
            <div class="stone1" style="left:164000px;"></div>
            <div class="stone1" style="left:164500px;"></div>
            <div class="stone1" style="left:165000px;"></div>
            <div class="stone1" style="left:165500px;"></div>
            <div class="stone1" style="left:166000px;"></div>
            <div class="stone1" style="left:166500px;"></div>
            <div class="stone1" style="left:167000px;"></div>
            <div class="stone1" style="left:167500px;"></div>
            <div class="stone1" style="left:168000px;"></div>
            <div class="stone1" style="left:168500px;"></div>
            <div class="stone1" style="left:169000px;"></div>
            <div class="stone1" style="left:169500px;"></div>
            <div class="stone1" style="left:170000px;"></div>
            <div class="stone1" style="left:170500px;"></div>
            <div class="stone1" style="left:171000px;"></div>
            <div class="stone1" style="left:171500px;"></div>
            <div class="stone1" style="left:172000px;"></div>
            <div class="stone1" style="left:172500px;"></div>
            <div class="stone1" style="left:173000px;"></div>
            <div class="stone1" style="left:173500px;"></div>
            <div class="stone1" style="left:174000px;"></div>
            <div class="stone1" style="left:174500px;"></div>
            <div class="stone1" style="left:175000px;"></div>
            <div class="stone1" style="left:175500px;"></div>
            <div class="stone1" style="left:176000px;"></div>
            <div class="stone1" style="left:176500px;"></div>
            <div class="stone1" style="left:177000px;"></div>
            <div class="stone1" style="left:177500px;"></div>
            <div class="stone1" style="left:178000px;"></div>
            <div class="stone1" style="left:178500px;"></div>
            <div class="stone1" style="left:179000px;"></div>
            <div class="stone1" style="left:179500px;"></div>
            <div class="stone1" style="left:180000px;"></div>
            <div class="stone1" style="left:180500px;"></div>
            <div class="stone1" style="left:181000px;"></div>
            <div class="stone1" style="left:181500px;"></div>
            <div class="stone1" style="left:182000px;"></div>
            <div class="stone1" style="left:182500px;"></div>
            <div class="stone1" style="left:183000px;"></div>
            <div class="stone1" style="left:183500px;"></div>
            <div class="stone1" style="left:184000px;"></div>
            <div class="stone1" style="left:184500px;"></div>
            <div class="stone1" style="left:185000px;"></div>
            <div class="stone1" style="left:185500px;"></div>
            <div class="stone1" style="left:186000px;"></div>
            <div class="stone1" style="left:186500px;"></div>
            <div class="stone1" style="left:187000px;"></div>
            <div class="stone1" style="left:187500px;"></div>
            <div class="stone1" style="left:188000px;"></div>
            <div class="stone1" style="left:188500px;"></div>
            <div class="stone1" style="left:189000px;"></div>
            <div class="stone1" style="left:189500px;"></div>
            <div class="stone1" style="left:190000px;"></div>
            <div class="stone1" style="left:190500px;"></div>
            <div class="stone1" style="left:191000px;"></div>
            <div class="stone1" style="left:191500px;"></div>
            <div class="stone1" style="left:192000px;"></div>
            <div class="stone1" style="left:192500px;"></div>
            <div class="stone1" style="left:193000px;"></div>
            <div class="stone1" style="left:193500px;"></div>
            <div class="stone1" style="left:194000px;"></div>
            <div class="stone1" style="left:194500px;"></div>
            <div class="stone1" style="left:195000px;"></div>
            <div class="stone1" style="left:195500px;"></div>
            <div class="stone1" style="left:196000px;"></div>
            <div class="stone1" style="left:196500px;"></div>
            <div class="stone1" style="left:197000px;"></div>
            <div class="stone1" style="left:197500px;"></div>
            <div class="stone1" style="left:198000px;"></div>
            <div class="stone1" style="left:198500px;"></div>
            <div class="stone1" style="left:199000px;"></div>
            <div class="stone1" style="left:199500px;"></div>
            <div class="stone1" style="left:200000px;"></div>
            <div class="stone1" style="left:200500px;"></div>
            <div class="stone1" style="left:201000px;"></div>
            <div class="stone1" style="left:201500px;"></div>
            <div class="stone1" style="left:202000px;"></div>
            <div class="stone1" style="left:202500px;"></div>
            <div class="stone1" style="left:203000px;"></div>
            <div class="stone1" style="left:203500px;"></div>
            <div class="stone1" style="left:204000px;"></div>
            <div class="stone1" style="left:204500px;"></div>
            <div class="stone1" style="left:205000px;"></div>
            <div class="stone1" style="left:205500px;"></div>
            <div class="stone1" style="left:206000px;"></div>
            <div class="stone1" style="left:206500px;"></div>
            <div class="stone1" style="left:207000px;"></div>
            <div class="stone1" style="left:207500px;"></div>
            <div class="stone1" style="left:208000px;"></div>
            <div class="stone1" style="left:208500px;"></div>
            <div class="stone1" style="left:209000px;"></div>
            <div class="stone1" style="left:209500px;"></div>
            <div class="stone1" style="left:210000px;"></div>
            <div class="stone1" style="left:210500px;"></div>
            <div class="stone1" style="left:211000px;"></div>
            <div class="stone1" style="left:211500px;"></div>
            <div class="stone1" style="left:212000px;"></div>
            <div class="stone1" style="left:212500px;"></div>
            <div class="stone1" style="left:213000px;"></div>
            <div class="stone1" style="left:213500px;"></div>
            <div class="stone1" style="left:214000px;"></div>
            <div class="stone1" style="left:214500px;"></div>
            <div class="stone1" style="left:215000px;"></div>
            <div class="stone1" style="left:215500px;"></div>
            <div class="stone1" style="left:216000px;"></div>
            <div class="stone1" style="left:216500px;"></div>
            <div class="stone1" style="left:217000px;"></div>
            <div class="stone1" style="left:217500px;"></div>
            <div class="stone1" style="left:218000px;"></div>
            <div class="stone1" style="left:218500px;"></div>
            <div class="stone1" style="left:219000px;"></div>
            <div class="stone1" style="left:219500px;"></div>
            <div class="stone1" style="left:220000px;"></div>
            <div class="stone1" style="left:220500px;"></div>
            <div class="stone1" style="left:221000px;"></div>
            <div class="stone1" style="left:221500px;"></div>
            <div class="stone1" style="left:222000px;"></div>
            <div class="stone1" style="left:222500px;"></div>
            <div class="stone1" style="left:223000px;"></div>
            <div class="stone1" style="left:223500px;"></div>
            <div class="stone1" style="left:224000px;"></div>
            <div class="stone1" style="left:224500px;"></div>
            <div class="stone1" style="left:225000px;"></div>
            <div class="stone1" style="left:225500px;"></div>
            <div class="stone1" style="left:226000px;"></div>
            <div class="stone1" style="left:226500px;"></div>
            <div class="stone1" style="left:227000px;"></div>
            <div class="stone1" style="left:227500px;"></div>
            <div class="stone1" style="left:228000px;"></div>
            <div class="stone1" style="left:228500px;"></div>
            <div class="stone1" style="left:229000px;"></div>
            <div class="stone1" style="left:229500px;"></div>
            <div class="stone1" style="left:230000px;"></div>
            <div class="stone1" style="left:230500px;"></div>
            <div class="stone1" style="left:231000px;"></div>
            <div class="stone1" style="left:231500px;"></div>
            <div class="stone1" style="left:232000px;"></div>
            <div class="stone1" style="left:232500px;"></div>
            <div class="stone1" style="left:233000px;"></div>
            <div class="stone1" style="left:233500px;"></div>
            <div class="stone1" style="left:234000px;"></div>
            <div class="stone1" style="left:234500px;"></div>
            <div class="stone1" style="left:235000px;"></div>
            <div class="stone1" style="left:235500px;"></div>
            <div class="stone1" style="left:236000px;"></div>
            <div class="stone1" style="left:236500px;"></div>
            <div class="stone1" style="left:237000px;"></div>
            <div class="stone1" style="left:237500px;"></div>
            <div class="stone1" style="left:238000px;"></div>
            <div class="stone1" style="left:238500px;"></div>
            <div class="stone1" style="left:239000px;"></div>
            <div class="stone1" style="left:239500px;"></div>
            <div class="stone1" style="left:240000px;"></div>
            <div class="stone1" style="left:240500px;"></div>
            <div class="stone1" style="left:241000px;"></div>
            <div class="stone1" style="left:241500px;"></div>
            <div class="stone1" style="left:242000px;"></div>
            <div class="stone1" style="left:242500px;"></div>
            <div class="stone1" style="left:243000px;"></div>
            <div class="stone1" style="left:243500px;"></div>
            <div class="stone1" style="left:244000px;"></div>
            <div class="stone1" style="left:244500px;"></div>
            <div class="stone1" style="left:245000px;"></div>
            <div class="stone1" style="left:245500px;"></div>
            <div class="stone1" style="left:246000px;"></div>
            <div class="stone1" style="left:246500px;"></div>
            <div class="stone1" style="left:247000px;"></div>
            <div class="stone1" style="left:247500px;"></div>
            <div class="stone1" style="left:248000px;"></div>
            <div class="stone1" style="left:248500px;"></div>
            <div class="stone1" style="left:249000px;"></div>
            <div class="stone1" style="left:249500px;"></div>
            <div class="stone1" style="left:250000px;"></div>
            <div class="stone1" style="left:250500px;"></div>
            <div class="stone1" style="left:251000px;"></div>
            <div class="stone1" style="left:251500px;"></div>
            <div class="stone1" style="left:252000px;"></div>
            <div class="stone1" style="left:252500px;"></div>
            <div class="stone1" style="left:253000px;"></div>
            <div class="stone1" style="left:253500px;"></div>
            <div class="stone1" style="left:254000px;"></div>
            <div class="stone1" style="left:254500px;"></div>
            <div class="stone1" style="left:255000px;"></div>
            <div class="stone1" style="left:255500px;"></div>
            <div class="stone1" style="left:256000px;"></div>
            <div class="stone1" style="left:256500px;"></div>
            <div class="stone1" style="left:257000px;"></div>
            <div class="stone1" style="left:257500px;"></div>
            <div class="stone1" style="left:258000px;"></div>
            <div class="stone1" style="left:258500px;"></div>
            <div class="stone1" style="left:259000px;"></div>
            <div class="stone1" style="left:259500px;"></div>
            <div class="stone1" style="left:260000px;"></div>
            <div class="stone1" style="left:260500px;"></div>
            <div class="stone1" style="left:261000px;"></div>
            <div class="stone1" style="left:261500px;"></div>
            <div class="stone1" style="left:262000px;"></div>
            <div class="stone1" style="left:262500px;"></div>
            <div class="stone1" style="left:263000px;"></div>
            <div class="stone1" style="left:263500px;"></div>
            <div class="stone1" style="left:264000px;"></div>
            <div class="stone1" style="left:264500px;"></div>
            <div class="stone1" style="left:265000px;"></div>
            <div class="stone1" style="left:265500px;"></div>
            <div class="stone1" style="left:266000px;"></div>
            <div class="stone1" style="left:266500px;"></div>
            <div class="stone1" style="left:267000px;"></div>
            <div class="stone1" style="left:267500px;"></div>
            <div class="stone1" style="left:268000px;"></div>
            <div class="stone1" style="left:268500px;"></div>
            <div class="stone1" style="left:269000px;"></div>
            <div class="stone1" style="left:269500px;"></div>
            <div class="stone1" style="left:270000px;"></div>
            <div class="stone1" style="left:270500px;"></div>
            <div class="stone1" style="left:271000px;"></div>
            <div class="stone1" style="left:271500px;"></div>
            <div class="stone1" style="left:272000px;"></div>
            <div class="stone1" style="left:272500px;"></div>
            <div class="stone1" style="left:273000px;"></div>
            <div class="stone1" style="left:273500px;"></div>
            <div class="stone1" style="left:274000px;"></div>
            <div class="stone1" style="left:274500px;"></div>
            <div class="stone1" style="left:275000px;"></div>
            <div class="stone1" style="left:275500px;"></div>
            <div class="stone1" style="left:276000px;"></div>
            <div class="stone1" style="left:276500px;"></div>
            <div class="stone1" style="left:277000px;"></div>
            <div class="stone1" style="left:277500px;"></div>
            <div class="stone1" style="left:278000px;"></div>
            <div class="stone1" style="left:278500px;"></div>
            <div class="stone1" style="left:279000px;"></div>
            <div class="stone1" style="left:279500px;"></div>
            <div class="stone1" style="left:280000px;"></div>
            <div class="stone1" style="left:280500px;"></div>
            <div class="stone1" style="left:281000px;"></div>
            <div class="stone1" style="left:281500px;"></div>
            <div class="stone1" style="left:282000px;"></div>
            <div class="stone1" style="left:282500px;"></div>
            <div class="stone1" style="left:283000px;"></div>
            <div class="stone1" style="left:283500px;"></div>
            <div class="stone1" style="left:284000px;"></div>
            <div class="stone1" style="left:284500px;"></div>
            <div class="stone1" style="left:285000px;"></div>
            <div class="stone1" style="left:285500px;"></div>
            <div class="stone1" style="left:286000px;"></div>
            <div class="stone1" style="left:286500px;"></div>
            <div class="stone1" style="left:287000px;"></div>
            <div class="stone1" style="left:287500px;"></div>
            <div class="stone1" style="left:288000px;"></div>
            <div class="stone1" style="left:288500px;"></div>
            <div class="stone1" style="left:289000px;"></div>
            <div class="stone1" style="left:289500px;"></div>
            <div class="stone1" style="left:290000px;"></div>
            <div class="stone1" style="left:290500px;"></div>
            <div class="stone1" style="left:291000px;"></div>
            <div class="stone1" style="left:291500px;"></div>
            <div class="stone1" style="left:292000px;"></div>
            <div class="stone1" style="left:292500px;"></div>
            <div class="stone1" style="left:293000px;"></div>
            <div class="stone1" style="left:293500px;"></div>
            <div class="stone1" style="left:294000px;"></div>
            <div class="stone1" style="left:294500px;"></div>
            <div class="stone1" style="left:295000px;"></div>
            <div class="stone1" style="left:295500px;"></div>
            <div class="stone1" style="left:296000px;"></div>
            <div class="stone1" style="left:296500px;"></div>
            <div class="stone1" style="left:297000px;"></div>
            <div class="stone1" style="left:297500px;"></div>
            <div class="stone1" style="left:298000px;"></div>
            <div class="stone1" style="left:298500px;"></div>
            <div class="stone1" style="left:299000px;"></div>
            <div class="stone1" style="left:299500px;"></div>
            <div class="stone1" style="left:300000px;"></div>
            <div class="stone1" style="left:300500px;"></div>
            <div class="stone1" style="left:301000px;"></div>
            <div class="stone1" style="left:301500px;"></div>
            <div class="stone1" style="left:302000px;"></div>
            <div class="stone1" style="left:302500px;"></div>
            <div class="stone1" style="left:303000px;"></div>
            <div class="stone1" style="left:303500px;"></div>
            <div class="stone1" style="left:304000px;"></div>
            <div class="stone1" style="left:304500px;"></div>
            <div class="stone1" style="left:305000px;"></div>
            <div class="stone1" style="left:305500px;"></div>
            <div class="stone1" style="left:306000px;"></div>
            <div class="stone1" style="left:306500px;"></div>
            <div class="stone1" style="left:307000px;"></div>
            <div class="stone1" style="left:307500px;"></div>
            <div class="stone1" style="left:308000px;"></div>
            <div class="stone1" style="left:308500px;"></div>
            <div class="stone1" style="left:309000px;"></div>
            <div class="stone1" style="left:309500px;"></div>
            <div class="stone1" style="left:310000px;"></div>
            <div class="stone1" style="left:310500px;"></div>
            <div class="stone1" style="left:311000px;"></div>
            <div class="stone1" style="left:311500px;"></div>
            <div class="stone1" style="left:312000px;"></div>
            <div class="stone1" style="left:312500px;"></div>
            <div class="stone1" style="left:313000px;"></div>
            <div class="stone1" style="left:313500px;"></div>
            <div class="stone1" style="left:314000px;"></div>
            <div class="stone1" style="left:314500px;"></div>
            <div class="stone1" style="left:315000px;"></div>
            <div class="stone1" style="left:315500px;"></div>
            <div class="stone1" style="left:316000px;"></div>
            <div class="stone1" style="left:316500px;"></div>
            <div class="stone1" style="left:317000px;"></div>
            <div class="stone1" style="left:317500px;"></div>
            <div class="stone1" style="left:318000px;"></div>
            <div class="stone1" style="left:318500px;"></div>
            <div class="stone1" style="left:319000px;"></div>
            <div class="stone1" style="left:319500px;"></div>
            <div class="stone1" style="left:320000px;"></div>
            <div class="stone1" style="left:320500px;"></div>
            <div class="stone1" style="left:321000px;"></div>
            <div class="stone1" style="left:321500px;"></div>
            <div class="stone1" style="left:322000px;"></div>
            <div class="stone1" style="left:322500px;"></div>
            <div class="stone1" style="left:323000px;"></div>
            <div class="stone1" style="left:323500px;"></div>
            <div class="stone1" style="left:324000px;"></div>
            <div class="stone1" style="left:324500px;"></div>
            <div class="stone1" style="left:325000px;"></div>
            <div class="stone1" style="left:325500px;"></div>
            <div class="stone1" style="left:326000px;"></div>
            <div class="stone1" style="left:326500px;"></div>
            <div class="stone1" style="left:327000px;"></div>
            <div class="stone1" style="left:327500px;"></div>
            <div class="stone1" style="left:328000px;"></div>
            <div class="stone1" style="left:328500px;"></div>
            <div class="stone1" style="left:329000px;"></div>
            <div class="stone1" style="left:329500px;"></div>
            <div class="stone1" style="left:330000px;"></div>
            <div class="stone1" style="left:330500px;"></div>
            <div class="stone1" style="left:331000px;"></div>
            <div class="stone1" style="left:331500px;"></div>
            <div class="stone1" style="left:332000px;"></div>
            <div class="stone1" style="left:332500px;"></div>
            <div class="stone1" style="left:333000px;"></div>
            <div class="stone1" style="left:333500px;"></div>
            <div class="stone1" style="left:334000px;"></div>
            <div class="stone1" style="left:334500px;"></div>
            <div class="stone1" style="left:335000px;"></div>
            <div class="stone1" style="left:335500px;"></div>
            <div class="stone1" style="left:336000px;"></div>
            <div class="stone1" style="left:336500px;"></div>
            <div class="stone1" style="left:337000px;"></div>
            <div class="stone1" style="left:337500px;"></div>
            <div class="stone1" style="left:338000px;"></div>
            <div class="stone1" style="left:338500px;"></div>
            <div class="stone1" style="left:339000px;"></div>
            <div class="stone1" style="left:339500px;"></div>
            <div class="stone1" style="left:340000px;"></div>
            <div class="stone1" style="left:340500px;"></div>
            <div class="stone1" style="left:341000px;"></div>
            <div class="stone1" style="left:341500px;"></div>
            <div class="stone1" style="left:342000px;"></div>
            <div class="stone1" style="left:342500px;"></div>
            <div class="stone1" style="left:343000px;"></div>
            <div class="stone1" style="left:343500px;"></div>
            <div class="stone1" style="left:344000px;"></div>
            <div class="stone1" style="left:344500px;"></div>
            <div class="stone1" style="left:345000px;"></div>
            <div class="stone1" style="left:345500px;"></div>
            <div class="stone1" style="left:346000px;"></div>
            <div class="stone1" style="left:346500px;"></div>
            <div class="stone1" style="left:347000px;"></div>
            <div class="stone1" style="left:347500px;"></div>
            <div class="stone1" style="left:348000px;"></div>
            <div class="stone1" style="left:348500px;"></div>
            <div class="stone1" style="left:349000px;"></div>
            <div class="stone1" style="left:349500px;"></div>
            <div class="stone1" style="left:350000px;"></div>
            <div class="stone1" style="left:350500px;"></div>
            <div class="stone1" style="left:351000px;"></div>
            <div class="stone1" style="left:351500px;"></div>



            <div class="bush3" style="left:2000px;"></div>
            <div class="bush4" style="left:2050px;"></div>
            <div class="bush2" style="left:2100px;"></div>
            <div class="bush1" style="left:2150px;"></div>
            <div class="bush1" style="left:2200px;"></div>
            <div class="bush4" style="left:2250px;"></div>
            <div class="bush4" style="left:2300px;"></div>
            <div class="bush1" style="left:2350px;"></div>
            <div class="bush3" style="left:2400px;"></div>
            <div class="bush3" style="left:2450px;"></div>
            <div class="bush3" style="left:2500px;"></div>
            <div class="bush2" style="left:2550px;"></div>
            <div class="bush2" style="left:2600px;"></div>
            <div class="bush2" style="left:2650px;"></div>
            <div class="bush3" style="left:2700px;"></div>
            <div class="bush3" style="left:2750px;"></div>
            <div class="bush1" style="left:2800px;"></div>
            <div class="bush1" style="left:2850px;"></div>
            <div class="bush3" style="left:2900px;"></div>
            <div class="bush1" style="left:2950px;"></div>
            <div class="bush3" style="left:3000px;"></div>
            <div class="bush2" style="left:3050px;"></div>
            <div class="bush4" style="left:3100px;"></div>
            <div class="bush1" style="left:3150px;"></div>
            <div class="bush1" style="left:3200px;"></div>
            <div class="bush3" style="left:3250px;"></div>
            <div class="bush2" style="left:3300px;"></div>
            <div class="bush1" style="left:3350px;"></div>
            <div class="bush3" style="left:3400px;"></div>
            <div class="bush2" style="left:3450px;"></div>
            <div class="bush4" style="left:3500px;"></div>
            <div class="bush3" style="left:3550px;"></div>
            <div class="bush3" style="left:3600px;"></div>
            <div class="bush1" style="left:3650px;"></div>
            <div class="bush1" style="left:3700px;"></div>
            <div class="bush4" style="left:3750px;"></div>
            <div class="bush4" style="left:3800px;"></div>
            <div class="bush3" style="left:3850px;"></div>
            <div class="bush1" style="left:3900px;"></div>
            <div class="bush4" style="left:3950px;"></div>
            <div class="bush1" style="left:4000px;"></div>
            <div class="bush4" style="left:4050px;"></div>
            <div class="bush4" style="left:4100px;"></div>
            <div class="bush2" style="left:4150px;"></div>
            <div class="bush4" style="left:4200px;"></div>
            <div class="bush3" style="left:4250px;"></div>
            <div class="bush3" style="left:4300px;"></div>
            <div class="bush3" style="left:4350px;"></div>
            <div class="bush2" style="left:4400px;"></div>
            <div class="bush2" style="left:4450px;"></div>
            <div class="bush3" style="left:4500px;"></div>
            <div class="bush1" style="left:4550px;"></div>
            <div class="bush3" style="left:4600px;"></div>
            <div class="bush1" style="left:4650px;"></div>
            <div class="bush1" style="left:4700px;"></div>
            <div class="bush2" style="left:4750px;"></div>
            <div class="bush1" style="left:4800px;"></div>
            <div class="bush3" style="left:4850px;"></div>
            <div class="bush1" style="left:4900px;"></div>
            <div class="bush1" style="left:4950px;"></div>
            <div class="bush3" style="left:5000px;"></div>
            <div class="bush4" style="left:5050px;"></div>
            <div class="bush2" style="left:5100px;"></div>
            <div class="bush1" style="left:5150px;"></div>
            <div class="bush4" style="left:5200px;"></div>
            <div class="bush1" style="left:5250px;"></div>
            <div class="bush4" style="left:5300px;"></div>
            <div class="bush4" style="left:5350px;"></div>
            <div class="bush2" style="left:5400px;"></div>
            <div class="bush4" style="left:5450px;"></div>
            <div class="bush4" style="left:5500px;"></div>
            <div class="bush3" style="left:5550px;"></div>
            <div class="bush1" style="left:5600px;"></div>
            <div class="bush3" style="left:5650px;"></div>
            <div class="bush3" style="left:5700px;"></div>
            <div class="bush2" style="left:5750px;"></div>
            <div class="bush4" style="left:5800px;"></div>
            <div class="bush4" style="left:5850px;"></div>
            <div class="bush2" style="left:5900px;"></div>
            <div class="bush3" style="left:5950px;"></div>
            <div class="bush1" style="left:6000px;"></div>
            <div class="bush4" style="left:6050px;"></div>
            <div class="bush3" style="left:6100px;"></div>
            <div class="bush1" style="left:6150px;"></div>
            <div class="bush1" style="left:6200px;"></div>
            <div class="bush4" style="left:6250px;"></div>
            <div class="bush1" style="left:6300px;"></div>
            <div class="bush1" style="left:6350px;"></div>
            <div class="bush1" style="left:6400px;"></div>
            <div class="bush4" style="left:6450px;"></div>
            <div class="bush2" style="left:6500px;"></div>
            <div class="bush4" style="left:6550px;"></div>
            <div class="bush3" style="left:6600px;"></div>
            <div class="bush1" style="left:6650px;"></div>
            <div class="bush3" style="left:6700px;"></div>
            <div class="bush1" style="left:6750px;"></div>
            <div class="bush2" style="left:6800px;"></div>
            <div class="bush1" style="left:6850px;"></div>
            <div class="bush4" style="left:6900px;"></div>
            <div class="bush2" style="left:6950px;"></div>
            <div class="bush4" style="left:7000px;"></div>
            <div class="bush3" style="left:7050px;"></div>
            <div class="bush1" style="left:7100px;"></div>
            <div class="bush4" style="left:7150px;"></div>
            <div class="bush2" style="left:7200px;"></div>
            <div class="bush4" style="left:7250px;"></div>
            <div class="bush3" style="left:7300px;"></div>
            <div class="bush4" style="left:7350px;"></div>
            <div class="bush1" style="left:7400px;"></div>
            <div class="bush3" style="left:7450px;"></div>
            <div class="bush3" style="left:7500px;"></div>
            <div class="bush3" style="left:7550px;"></div>
            <div class="bush4" style="left:7600px;"></div>
            <div class="bush3" style="left:7650px;"></div>
            <div class="bush1" style="left:7700px;"></div>
            <div class="bush4" style="left:7750px;"></div>
            <div class="bush1" style="left:7800px;"></div>
            <div class="bush1" style="left:7850px;"></div>
            <div class="bush3" style="left:7900px;"></div>
            <div class="bush1" style="left:7950px;"></div>
            <div class="bush1" style="left:8000px;"></div>
            <div class="bush3" style="left:8050px;"></div>
            <div class="bush3" style="left:8100px;"></div>
            <div class="bush4" style="left:8150px;"></div>
            <div class="bush4" style="left:8200px;"></div>
            <div class="bush4" style="left:8250px;"></div>
            <div class="bush1" style="left:8300px;"></div>
            <div class="bush3" style="left:8350px;"></div>
            <div class="bush1" style="left:8400px;"></div>
            <div class="bush2" style="left:8450px;"></div>
            <div class="bush2" style="left:8500px;"></div>
            <div class="bush2" style="left:8550px;"></div>
            <div class="bush3" style="left:8600px;"></div>
            <div class="bush1" style="left:8650px;"></div>
            <div class="bush2" style="left:8700px;"></div>
            <div class="bush2" style="left:8750px;"></div>
            <div class="bush4" style="left:8800px;"></div>
            <div class="bush2" style="left:8850px;"></div>
            <div class="bush2" style="left:8900px;"></div>
            <div class="bush3" style="left:8950px;"></div>
            <div class="bush2" style="left:9000px;"></div>
            <div class="bush3" style="left:9050px;"></div>
            <div class="bush2" style="left:9100px;"></div>
            <div class="bush1" style="left:9150px;"></div>
            <div class="bush4" style="left:9200px;"></div>
            <div class="bush4" style="left:9250px;"></div>
            <div class="bush1" style="left:9300px;"></div>
            <div class="bush4" style="left:9350px;"></div>
            <div class="bush3" style="left:9400px;"></div>
            <div class="bush2" style="left:9450px;"></div>
            <div class="bush1" style="left:9500px;"></div>
            <div class="bush2" style="left:9550px;"></div>
            <div class="bush1" style="left:9600px;"></div>
            <div class="bush4" style="left:9650px;"></div>
            <div class="bush3" style="left:9700px;"></div>
            <div class="bush2" style="left:9750px;"></div>
            <div class="bush3" style="left:9800px;"></div>
            <div class="bush2" style="left:9850px;"></div>
            <div class="bush3" style="left:9900px;"></div>
            <div class="bush1" style="left:9950px;"></div>
            <div class="bush2" style="left:10000px;"></div>
            <div class="bush4" style="left:10050px;"></div>
            <div class="bush3" style="left:10100px;"></div>
            <div class="bush1" style="left:10150px;"></div>
            <div class="bush3" style="left:10200px;"></div>
            <div class="bush4" style="left:10250px;"></div>
            <div class="bush2" style="left:10300px;"></div>
            <div class="bush2" style="left:10350px;"></div>
            <div class="bush3" style="left:10400px;"></div>
            <div class="bush1" style="left:10450px;"></div>
            <div class="bush1" style="left:10500px;"></div>
            <div class="bush4" style="left:10550px;"></div>
            <div class="bush3" style="left:10600px;"></div>
            <div class="bush3" style="left:10650px;"></div>
            <div class="bush1" style="left:10700px;"></div>
            <div class="bush2" style="left:10750px;"></div>
            <div class="bush1" style="left:10800px;"></div>
            <div class="bush2" style="left:10850px;"></div>
            <div class="bush3" style="left:10900px;"></div>
            <div class="bush3" style="left:10950px;"></div>
            <div class="bush3" style="left:11000px;"></div>
            <div class="bush4" style="left:11050px;"></div>
            <div class="bush4" style="left:11100px;"></div>
            <div class="bush3" style="left:11150px;"></div>
            <div class="bush1" style="left:11200px;"></div>
            <div class="bush2" style="left:11250px;"></div>
            <div class="bush1" style="left:11300px;"></div>
            <div class="bush4" style="left:11350px;"></div>
            <div class="bush4" style="left:11400px;"></div>
            <div class="bush4" style="left:11450px;"></div>
            <div class="bush1" style="left:11500px;"></div>
            <div class="bush3" style="left:11550px;"></div>
            <div class="bush3" style="left:11600px;"></div>
            <div class="bush2" style="left:11650px;"></div>
            <div class="bush2" style="left:11700px;"></div>
            <div class="bush4" style="left:11750px;"></div>
            <div class="bush4" style="left:11800px;"></div>
            <div class="bush2" style="left:11850px;"></div>
            <div class="bush3" style="left:11900px;"></div>
            <div class="bush4" style="left:11950px;"></div>
            <div class="bush1" style="left:12000px;"></div>
            <div class="bush3" style="left:12050px;"></div>
            <div class="bush4" style="left:12100px;"></div>
            <div class="bush4" style="left:12150px;"></div>
            <div class="bush3" style="left:12200px;"></div>
            <div class="bush1" style="left:12250px;"></div>
            <div class="bush2" style="left:12300px;"></div>
            <div class="bush2" style="left:12350px;"></div>
            <div class="bush4" style="left:12400px;"></div>
            <div class="bush2" style="left:12450px;"></div>
            <div class="bush1" style="left:12500px;"></div>
            <div class="bush3" style="left:12550px;"></div>
            <div class="bush1" style="left:12600px;"></div>
            <div class="bush2" style="left:12650px;"></div>
            <div class="bush4" style="left:12700px;"></div>
            <div class="bush2" style="left:12750px;"></div>
            <div class="bush2" style="left:12800px;"></div>
            <div class="bush3" style="left:12850px;"></div>
            <div class="bush3" style="left:12900px;"></div>
            <div class="bush2" style="left:12950px;"></div>
            <div class="bush4" style="left:13000px;"></div>
            <div class="bush2" style="left:13050px;"></div>
            <div class="bush3" style="left:13100px;"></div>
            <div class="bush4" style="left:13150px;"></div>
            <div class="bush4" style="left:13200px;"></div>
            <div class="bush2" style="left:13250px;"></div>
            <div class="bush4" style="left:13300px;"></div>
            <div class="bush4" style="left:13350px;"></div>
            <div class="bush1" style="left:13400px;"></div>
            <div class="bush3" style="left:13450px;"></div>
            <div class="bush2" style="left:13500px;"></div>
            <div class="bush2" style="left:13550px;"></div>
            <div class="bush3" style="left:13600px;"></div>
            <div class="bush3" style="left:13650px;"></div>
            <div class="bush4" style="left:13700px;"></div>
            <div class="bush4" style="left:13750px;"></div>
            <div class="bush4" style="left:13800px;"></div>
            <div class="bush4" style="left:13850px;"></div>
            <div class="bush4" style="left:13900px;"></div>
            <div class="bush2" style="left:13950px;"></div>
            <div class="bush1" style="left:14000px;"></div>
            <div class="bush4" style="left:14050px;"></div>
            <div class="bush2" style="left:14100px;"></div>
            <div class="bush2" style="left:14150px;"></div>
            <div class="bush2" style="left:14200px;"></div>
            <div class="bush3" style="left:14250px;"></div>
            <div class="bush2" style="left:14300px;"></div>
            <div class="bush1" style="left:14350px;"></div>
            <div class="bush2" style="left:14400px;"></div>
            <div class="bush1" style="left:14450px;"></div>
            <div class="bush1" style="left:14500px;"></div>
            <div class="bush2" style="left:14550px;"></div>
            <div class="bush1" style="left:14600px;"></div>
            <div class="bush3" style="left:14650px;"></div>
            <div class="bush4" style="left:14700px;"></div>
            <div class="bush3" style="left:14750px;"></div>
            <div class="bush2" style="left:14800px;"></div>
            <div class="bush4" style="left:14850px;"></div>
            <div class="bush1" style="left:14900px;"></div>
            <div class="bush2" style="left:14950px;"></div>
            <div class="bush1" style="left:15000px;"></div>
            <div class="bush3" style="left:15050px;"></div>
            <div class="bush3" style="left:15100px;"></div>
            <div class="bush2" style="left:15150px;"></div>
            <div class="bush4" style="left:15200px;"></div>
            <div class="bush4" style="left:15250px;"></div>
            <div class="bush4" style="left:15300px;"></div>
            <div class="bush3" style="left:15350px;"></div>
            <div class="bush2" style="left:15400px;"></div>
            <div class="bush2" style="left:15450px;"></div>
            <div class="bush4" style="left:15500px;"></div>
            <div class="bush3" style="left:15550px;"></div>
            <div class="bush3" style="left:15600px;"></div>
            <div class="bush1" style="left:15650px;"></div>
            <div class="bush4" style="left:15700px;"></div>
            <div class="bush4" style="left:15750px;"></div>
            <div class="bush4" style="left:15800px;"></div>
            <div class="bush4" style="left:15850px;"></div>
            <div class="bush4" style="left:15900px;"></div>
            <div class="bush1" style="left:15950px;"></div>
            <div class="bush4" style="left:16000px;"></div>
            <div class="bush2" style="left:16050px;"></div>
            <div class="bush3" style="left:16100px;"></div>
            <div class="bush2" style="left:16150px;"></div>
            <div class="bush4" style="left:16200px;"></div>
            <div class="bush1" style="left:16250px;"></div>
            <div class="bush2" style="left:16300px;"></div>
            <div class="bush2" style="left:16350px;"></div>
            <div class="bush4" style="left:16400px;"></div>
            <div class="bush4" style="left:16450px;"></div>
            <div class="bush2" style="left:16500px;"></div>
            <div class="bush4" style="left:16550px;"></div>
            <div class="bush2" style="left:16600px;"></div>
            <div class="bush4" style="left:16650px;"></div>
            <div class="bush3" style="left:16700px;"></div>
            <div class="bush3" style="left:16750px;"></div>
            <div class="bush1" style="left:16800px;"></div>
            <div class="bush3" style="left:16850px;"></div>
            <div class="bush1" style="left:16900px;"></div>
            <div class="bush4" style="left:16950px;"></div>
            <div class="bush1" style="left:17000px;"></div>
            <div class="bush1" style="left:17050px;"></div>
            <div class="bush1" style="left:17100px;"></div>
            <div class="bush3" style="left:17150px;"></div>
            <div class="bush2" style="left:17200px;"></div>
            <div class="bush2" style="left:17250px;"></div>
            <div class="bush4" style="left:17300px;"></div>
            <div class="bush3" style="left:17350px;"></div>
            <div class="bush2" style="left:17400px;"></div>
            <div class="bush3" style="left:17450px;"></div>
            <div class="bush1" style="left:17500px;"></div>
            <div class="bush2" style="left:17550px;"></div>
            <div class="bush4" style="left:17600px;"></div>
            <div class="bush2" style="left:17650px;"></div>
            <div class="bush2" style="left:17700px;"></div>
            <div class="bush1" style="left:17750px;"></div>
            <div class="bush2" style="left:17800px;"></div>
            <div class="bush4" style="left:17850px;"></div>
            <div class="bush1" style="left:17900px;"></div>
            <div class="bush1" style="left:17950px;"></div>
            <div class="bush4" style="left:18000px;"></div>
            <div class="bush4" style="left:18050px;"></div>
            <div class="bush2" style="left:18100px;"></div>
            <div class="bush2" style="left:18150px;"></div>
            <div class="bush3" style="left:18200px;"></div>
            <div class="bush2" style="left:18250px;"></div>
            <div class="bush1" style="left:18300px;"></div>
            <div class="bush2" style="left:18350px;"></div>
            <div class="bush3" style="left:18400px;"></div>
            <div class="bush2" style="left:18450px;"></div>
            <div class="bush4" style="left:18500px;"></div>
            <div class="bush3" style="left:18550px;"></div>
            <div class="bush3" style="left:18600px;"></div>
            <div class="bush3" style="left:18650px;"></div>
            <div class="bush3" style="left:18700px;"></div>
            <div class="bush2" style="left:18750px;"></div>
            <div class="bush2" style="left:18800px;"></div>
            <div class="bush3" style="left:18850px;"></div>
            <div class="bush3" style="left:18900px;"></div>
            <div class="bush2" style="left:18950px;"></div>
            <div class="bush4" style="left:19000px;"></div>
            <div class="bush3" style="left:19050px;"></div>
            <div class="bush4" style="left:19100px;"></div>
            <div class="bush2" style="left:19150px;"></div>
            <div class="bush1" style="left:19200px;"></div>
            <div class="bush1" style="left:19250px;"></div>
            <div class="bush4" style="left:19300px;"></div>
            <div class="bush1" style="left:19350px;"></div>
            <div class="bush1" style="left:19400px;"></div>
            <div class="bush1" style="left:19450px;"></div>
            <div class="bush2" style="left:19500px;"></div>
            <div class="bush1" style="left:19550px;"></div>
            <div class="bush1" style="left:19600px;"></div>
            <div class="bush4" style="left:19650px;"></div>
            <div class="bush2" style="left:19700px;"></div>
            <div class="bush2" style="left:19750px;"></div>
            <div class="bush4" style="left:19800px;"></div>
            <div class="bush3" style="left:19850px;"></div>
            <div class="bush3" style="left:19900px;"></div>
            <div class="bush3" style="left:19950px;"></div>
            <div class="bush3" style="left:20000px;"></div>
            <div class="bush2" style="left:20050px;"></div>
            <div class="bush2" style="left:20100px;"></div>
            <div class="bush4" style="left:20150px;"></div>
            <div class="bush2" style="left:20200px;"></div>
            <div class="bush2" style="left:20250px;"></div>
            <div class="bush2" style="left:20300px;"></div>
            <div class="bush2" style="left:20350px;"></div>
            <div class="bush4" style="left:20400px;"></div>
            <div class="bush2" style="left:20450px;"></div>
            <div class="bush3" style="left:20500px;"></div>
            <div class="bush3" style="left:20550px;"></div>
            <div class="bush4" style="left:20600px;"></div>
            <div class="bush1" style="left:20650px;"></div>
            <div class="bush2" style="left:20700px;"></div>
            <div class="bush2" style="left:20750px;"></div>
            <div class="bush4" style="left:20800px;"></div>
            <div class="bush4" style="left:20850px;"></div>
            <div class="bush1" style="left:20900px;"></div>
            <div class="bush4" style="left:20950px;"></div>
            <div class="bush2" style="left:21000px;"></div>
            <div class="bush2" style="left:21050px;"></div>
            <div class="bush1" style="left:21100px;"></div>
            <div class="bush1" style="left:21150px;"></div>
            <div class="bush1" style="left:21200px;"></div>
            <div class="bush2" style="left:21250px;"></div>
            <div class="bush2" style="left:21300px;"></div>
            <div class="bush4" style="left:21350px;"></div>
            <div class="bush2" style="left:21400px;"></div>
            <div class="bush3" style="left:21450px;"></div>
            <div class="bush1" style="left:21500px;"></div>
            <div class="bush2" style="left:21550px;"></div>
            <div class="bush2" style="left:21600px;"></div>
            <div class="bush4" style="left:21650px;"></div>
            <div class="bush3" style="left:21700px;"></div>
            <div class="bush1" style="left:21750px;"></div>
            <div class="bush3" style="left:21800px;"></div>
            <div class="bush1" style="left:21850px;"></div>
            <div class="bush1" style="left:21900px;"></div>
            <div class="bush4" style="left:21950px;"></div>
            <div class="bush3" style="left:22000px;"></div>
            <div class="bush1" style="left:22050px;"></div>
            <div class="bush2" style="left:22100px;"></div>
            <div class="bush3" style="left:22150px;"></div>
            <div class="bush1" style="left:22200px;"></div>
            <div class="bush3" style="left:22250px;"></div>
            <div class="bush4" style="left:22300px;"></div>
            <div class="bush3" style="left:22350px;"></div>
            <div class="bush3" style="left:22400px;"></div>
            <div class="bush1" style="left:22450px;"></div>
            <div class="bush3" style="left:22500px;"></div>
            <div class="bush3" style="left:22550px;"></div>
            <div class="bush3" style="left:22600px;"></div>
            <div class="bush3" style="left:22650px;"></div>
            <div class="bush4" style="left:22700px;"></div>
            <div class="bush1" style="left:22750px;"></div>
            <div class="bush2" style="left:22800px;"></div>
            <div class="bush1" style="left:22850px;"></div>
            <div class="bush3" style="left:22900px;"></div>
            <div class="bush4" style="left:22950px;"></div>
            <div class="bush1" style="left:23000px;"></div>
            <div class="bush3" style="left:23050px;"></div>
            <div class="bush2" style="left:23100px;"></div>
            <div class="bush1" style="left:23150px;"></div>
            <div class="bush1" style="left:23200px;"></div>
            <div class="bush3" style="left:23250px;"></div>
            <div class="bush2" style="left:23300px;"></div>
            <div class="bush2" style="left:23350px;"></div>
            <div class="bush3" style="left:23400px;"></div>
            <div class="bush2" style="left:23450px;"></div>
            <div class="bush1" style="left:23500px;"></div>
            <div class="bush1" style="left:23550px;"></div>
            <div class="bush4" style="left:23600px;"></div>
            <div class="bush2" style="left:23650px;"></div>
            <div class="bush4" style="left:23700px;"></div>
            <div class="bush3" style="left:23750px;"></div>
            <div class="bush1" style="left:23800px;"></div>
            <div class="bush4" style="left:23850px;"></div>
            <div class="bush2" style="left:23900px;"></div>
            <div class="bush4" style="left:23950px;"></div>
            <div class="bush3" style="left:24000px;"></div>
            <div class="bush2" style="left:24050px;"></div>
            <div class="bush4" style="left:24100px;"></div>
            <div class="bush2" style="left:24150px;"></div>
            <div class="bush3" style="left:24200px;"></div>
            <div class="bush4" style="left:24250px;"></div>
            <div class="bush1" style="left:24300px;"></div>
            <div class="bush4" style="left:24350px;"></div>
            <div class="bush4" style="left:24400px;"></div>
            <div class="bush1" style="left:24450px;"></div>
            <div class="bush3" style="left:24500px;"></div>
            <div class="bush4" style="left:24550px;"></div>
            <div class="bush3" style="left:24600px;"></div>
            <div class="bush1" style="left:24650px;"></div>
            <div class="bush3" style="left:24700px;"></div>
            <div class="bush4" style="left:24750px;"></div>
            <div class="bush4" style="left:24800px;"></div>
            <div class="bush3" style="left:24850px;"></div>
            <div class="bush2" style="left:24900px;"></div>
            <div class="bush2" style="left:24950px;"></div>
            <div class="bush4" style="left:25000px;"></div>
            <div class="bush4" style="left:25050px;"></div>
            <div class="bush3" style="left:25100px;"></div>
            <div class="bush4" style="left:25150px;"></div>
            <div class="bush4" style="left:25200px;"></div>
            <div class="bush4" style="left:25250px;"></div>
            <div class="bush3" style="left:25300px;"></div>
            <div class="bush2" style="left:25350px;"></div>
            <div class="bush3" style="left:25400px;"></div>
            <div class="bush1" style="left:25450px;"></div>
            <div class="bush3" style="left:25500px;"></div>
            <div class="bush3" style="left:25550px;"></div>
            <div class="bush3" style="left:25600px;"></div>
            <div class="bush4" style="left:25650px;"></div>
            <div class="bush3" style="left:25700px;"></div>
            <div class="bush4" style="left:25750px;"></div>
            <div class="bush4" style="left:25800px;"></div>
            <div class="bush1" style="left:25850px;"></div>
            <div class="bush3" style="left:25900px;"></div>
            <div class="bush4" style="left:25950px;"></div>
            <div class="bush4" style="left:26000px;"></div>
            <div class="bush1" style="left:26050px;"></div>
            <div class="bush1" style="left:26100px;"></div>
            <div class="bush3" style="left:26150px;"></div>
            <div class="bush3" style="left:26200px;"></div>
            <div class="bush3" style="left:26250px;"></div>
            <div class="bush3" style="left:26300px;"></div>
            <div class="bush1" style="left:26350px;"></div>
            <div class="bush4" style="left:26400px;"></div>
            <div class="bush2" style="left:26450px;"></div>
            <div class="bush1" style="left:26500px;"></div>
            <div class="bush2" style="left:26550px;"></div>
            <div class="bush4" style="left:26600px;"></div>
            <div class="bush4" style="left:26650px;"></div>
            <div class="bush1" style="left:26700px;"></div>
            <div class="bush4" style="left:26750px;"></div>
            <div class="bush2" style="left:26800px;"></div>
            <div class="bush1" style="left:26850px;"></div>
            <div class="bush4" style="left:26900px;"></div>
            <div class="bush4" style="left:26950px;"></div>
            <div class="bush2" style="left:27000px;"></div>
            <div class="bush3" style="left:27050px;"></div>
            <div class="bush4" style="left:27100px;"></div>
            <div class="bush4" style="left:27150px;"></div>
            <div class="bush4" style="left:27200px;"></div>
            <div class="bush2" style="left:27250px;"></div>
            <div class="bush4" style="left:27300px;"></div>
            <div class="bush4" style="left:27350px;"></div>
            <div class="bush1" style="left:27400px;"></div>
            <div class="bush1" style="left:27450px;"></div>
            <div class="bush3" style="left:27500px;"></div>
            <div class="bush3" style="left:27550px;"></div>
            <div class="bush1" style="left:27600px;"></div>
            <div class="bush1" style="left:27650px;"></div>
            <div class="bush1" style="left:27700px;"></div>
            <div class="bush1" style="left:27750px;"></div>
            <div class="bush2" style="left:27800px;"></div>
            <div class="bush4" style="left:27850px;"></div>
            <div class="bush4" style="left:27900px;"></div>
            <div class="bush4" style="left:27950px;"></div>
            <div class="bush4" style="left:28000px;"></div>
            <div class="bush4" style="left:28050px;"></div>
            <div class="bush4" style="left:28100px;"></div>
            <div class="bush2" style="left:28150px;"></div>
            <div class="bush1" style="left:28200px;"></div>
            <div class="bush3" style="left:28250px;"></div>
            <div class="bush1" style="left:28300px;"></div>
            <div class="bush1" style="left:28350px;"></div>
            <div class="bush1" style="left:28400px;"></div>
            <div class="bush3" style="left:28450px;"></div>
            <div class="bush3" style="left:28500px;"></div>
            <div class="bush1" style="left:28550px;"></div>
            <div class="bush1" style="left:28600px;"></div>
            <div class="bush1" style="left:28650px;"></div>
            <div class="bush2" style="left:28700px;"></div>
            <div class="bush2" style="left:28750px;"></div>
            <div class="bush3" style="left:28800px;"></div>
            <div class="bush2" style="left:28850px;"></div>
            <div class="bush2" style="left:28900px;"></div>
            <div class="bush3" style="left:28950px;"></div>
            <div class="bush1" style="left:29000px;"></div>
            <div class="bush4" style="left:29050px;"></div>
            <div class="bush3" style="left:29100px;"></div>
            <div class="bush2" style="left:29150px;"></div>
            <div class="bush2" style="left:29200px;"></div>
            <div class="bush3" style="left:29250px;"></div>
            <div class="bush3" style="left:29300px;"></div>
            <div class="bush4" style="left:29350px;"></div>
            <div class="bush1" style="left:29400px;"></div>
            <div class="bush4" style="left:29450px;"></div>
            <div class="bush1" style="left:29500px;"></div>
            <div class="bush3" style="left:29550px;"></div>
            <div class="bush4" style="left:29600px;"></div>
            <div class="bush4" style="left:29650px;"></div>
            <div class="bush1" style="left:29700px;"></div>
            <div class="bush3" style="left:29750px;"></div>
            <div class="bush4" style="left:29800px;"></div>
            <div class="bush3" style="left:29850px;"></div>
            <div class="bush2" style="left:29900px;"></div>
            <div class="bush2" style="left:29950px;"></div>
            <div class="bush4" style="left:30000px;"></div>
            <div class="bush3" style="left:30050px;"></div>
            <div class="bush2" style="left:30100px;"></div>
            <div class="bush1" style="left:30150px;"></div>
            <div class="bush3" style="left:30200px;"></div>
            <div class="bush2" style="left:30250px;"></div>
            <div class="bush3" style="left:30300px;"></div>
            <div class="bush2" style="left:30350px;"></div>
            <div class="bush1" style="left:30400px;"></div>
            <div class="bush2" style="left:30450px;"></div>
            <div class="bush2" style="left:30500px;"></div>
            <div class="bush2" style="left:30550px;"></div>
            <div class="bush4" style="left:30600px;"></div>
            <div class="bush4" style="left:30650px;"></div>
            <div class="bush4" style="left:30700px;"></div>
            <div class="bush2" style="left:30750px;"></div>
            <div class="bush2" style="left:30800px;"></div>
            <div class="bush4" style="left:30850px;"></div>
            <div class="bush2" style="left:30900px;"></div>
            <div class="bush3" style="left:30950px;"></div>
            <div class="bush4" style="left:31000px;"></div>
            <div class="bush3" style="left:31050px;"></div>
            <div class="bush1" style="left:31100px;"></div>
            <div class="bush3" style="left:31150px;"></div>
            <div class="bush3" style="left:31200px;"></div>
            <div class="bush1" style="left:31250px;"></div>
            <div class="bush3" style="left:31300px;"></div>
            <div class="bush4" style="left:31350px;"></div>
            <div class="bush2" style="left:31400px;"></div>
            <div class="bush1" style="left:31450px;"></div>
            <div class="bush4" style="left:31500px;"></div>
            <div class="bush3" style="left:31550px;"></div>
            <div class="bush1" style="left:31600px;"></div>
            <div class="bush2" style="left:31650px;"></div>
            <div class="bush4" style="left:31700px;"></div>
            <div class="bush2" style="left:31750px;"></div>
            <div class="bush2" style="left:31800px;"></div>
            <div class="bush3" style="left:31850px;"></div>
            <div class="bush4" style="left:31900px;"></div>
            <div class="bush2" style="left:31950px;"></div>
            <div class="bush4" style="left:32000px;"></div>
            <div class="bush4" style="left:32050px;"></div>
            <div class="bush4" style="left:32100px;"></div>
            <div class="bush1" style="left:32150px;"></div>
            <div class="bush1" style="left:32200px;"></div>
            <div class="bush3" style="left:32250px;"></div>
            <div class="bush1" style="left:32300px;"></div>
            <div class="bush1" style="left:32350px;"></div>
            <div class="bush4" style="left:32400px;"></div>
            <div class="bush1" style="left:32450px;"></div>
            <div class="bush1" style="left:32500px;"></div>
            <div class="bush3" style="left:32550px;"></div>
            <div class="bush4" style="left:32600px;"></div>
            <div class="bush3" style="left:32650px;"></div>
            <div class="bush1" style="left:32700px;"></div>
            <div class="bush3" style="left:32750px;"></div>
            <div class="bush2" style="left:32800px;"></div>
            <div class="bush2" style="left:32850px;"></div>
            <div class="bush4" style="left:32900px;"></div>
            <div class="bush2" style="left:32950px;"></div>
            <div class="bush4" style="left:33000px;"></div>
            <div class="bush3" style="left:33050px;"></div>
            <div class="bush3" style="left:33100px;"></div>
            <div class="bush3" style="left:33150px;"></div>
            <div class="bush1" style="left:33200px;"></div>
            <div class="bush2" style="left:33250px;"></div>
            <div class="bush1" style="left:33300px;"></div>
            <div class="bush1" style="left:33350px;"></div>
            <div class="bush4" style="left:33400px;"></div>
            <div class="bush4" style="left:33450px;"></div>
            <div class="bush1" style="left:33500px;"></div>
            <div class="bush3" style="left:33550px;"></div>
            <div class="bush2" style="left:33600px;"></div>
            <div class="bush4" style="left:33650px;"></div>
            <div class="bush3" style="left:33700px;"></div>
            <div class="bush1" style="left:33750px;"></div>
            <div class="bush2" style="left:33800px;"></div>
            <div class="bush4" style="left:33850px;"></div>
            <div class="bush3" style="left:33900px;"></div>
            <div class="bush3" style="left:33950px;"></div>
            <div class="bush4" style="left:34000px;"></div>
            <div class="bush2" style="left:34050px;"></div>
            <div class="bush2" style="left:34100px;"></div>
            <div class="bush2" style="left:34150px;"></div>
            <div class="bush1" style="left:34200px;"></div>
            <div class="bush4" style="left:34250px;"></div>
            <div class="bush3" style="left:34300px;"></div>
            <div class="bush4" style="left:34350px;"></div>
            <div class="bush2" style="left:34400px;"></div>
            <div class="bush4" style="left:34450px;"></div>
            <div class="bush4" style="left:34500px;"></div>
            <div class="bush3" style="left:34550px;"></div>
            <div class="bush3" style="left:34600px;"></div>
            <div class="bush4" style="left:34650px;"></div>
            <div class="bush3" style="left:34700px;"></div>
            <div class="bush2" style="left:34750px;"></div>
            <div class="bush3" style="left:34800px;"></div>
            <div class="bush2" style="left:34850px;"></div>
            <div class="bush1" style="left:34900px;"></div>
            <div class="bush1" style="left:34950px;"></div>
            <div class="bush1" style="left:35000px;"></div>
            <div class="bush1" style="left:35050px;"></div>
            <div class="bush3" style="left:35100px;"></div>
            <div class="bush1" style="left:35150px;"></div>
            <div class="bush2" style="left:35200px;"></div>
            <div class="bush1" style="left:35250px;"></div>
            <div class="bush3" style="left:35300px;"></div>
            <div class="bush2" style="left:35350px;"></div>
            <div class="bush1" style="left:35400px;"></div>
            <div class="bush1" style="left:35450px;"></div>
            <div class="bush1" style="left:35500px;"></div>
            <div class="bush2" style="left:35550px;"></div>
            <div class="bush1" style="left:35600px;"></div>
            <div class="bush3" style="left:35650px;"></div>
            <div class="bush2" style="left:35700px;"></div>
            <div class="bush2" style="left:35750px;"></div>
            <div class="bush1" style="left:35800px;"></div>
            <div class="bush1" style="left:35850px;"></div>
            <div class="bush2" style="left:35900px;"></div>
            <div class="bush2" style="left:35950px;"></div>
            <div class="bush3" style="left:36000px;"></div>
            <div class="bush4" style="left:36050px;"></div>
            <div class="bush3" style="left:36100px;"></div>
            <div class="bush1" style="left:36150px;"></div>
            <div class="bush2" style="left:36200px;"></div>
            <div class="bush3" style="left:36250px;"></div>
            <div class="bush3" style="left:36300px;"></div>
            <div class="bush4" style="left:36350px;"></div>
            <div class="bush2" style="left:36400px;"></div>
            <div class="bush4" style="left:36450px;"></div>
            <div class="bush3" style="left:36500px;"></div>
            <div class="bush2" style="left:36550px;"></div>
            <div class="bush4" style="left:36600px;"></div>
            <div class="bush1" style="left:36650px;"></div>
            <div class="bush2" style="left:36700px;"></div>
            <div class="bush1" style="left:36750px;"></div>
            <div class="bush1" style="left:36800px;"></div>
            <div class="bush4" style="left:36850px;"></div>
            <div class="bush2" style="left:36900px;"></div>
            <div class="bush2" style="left:36950px;"></div>


            <div class="crystal" style="left:3000px;"></div>
            <div class="crystal" style="left:6000px;"></div>
            <div class="crystal" style="left:9000px;"></div>
            <div class="crystal" style="left:12000px;"></div>
            <div class="crystal" style="left:15000px;"></div>
            <div class="crystal" style="left:18000px;"></div>
            <div class="crystal" style="left:22000px;"></div>
            <div class="crystal" style="left:30000px;"></div>
            <div class="crystal" style="left:32000px;"></div>




            <div class="right-arrow" style="left:2500px;"></div>
            <div class="right-arrow" style="left:4300px;"></div>

            <div class="right-arrow2" style="left:6500px;"></div>
            <div class="right-arrow2" style="left:7300px;"></div>


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
                <a href="level-4.php"
                    style="text-decoration: none; background-color:#CC3300; border-radius:10px; padding:10px; color:#FFFFFF; border:2px solid #000; font-size:18px; font-family:Verdana, Arial, Helvetica, sans-serif;">Start
                    Over</a>
            </form>
        </div>
    </div>

    <a href="game-menu-start-game.php" class="btn btn-danger btn-lg"
        style="color:#FFFFFF;  font-weight:bold; position:fixed; left:10px; top:10px; border:5px #FFFFFF; border-radius:50px;">
        <i class="fa fa-power-off" aria-hidden="true"></i> Exit the Game</a>

    <div id="scoreb"
        style=" padding:10px; background-color:#CC0000; color:#FFFFFF; font-size:25px; font-weight:bold; position:fixed; right:10px; top:10px; border:5px #FFFFFF; border-radius:50px;">
        Score : <span id="doughnuts">0</span></div>
    <!--Score Box-->

</body>

<script type="text/javascript" src="js/level-4/script-2.js"></script>
<script type="text/javascript" src="js/level-4/timer-ticker-script.js"></script>



</html>