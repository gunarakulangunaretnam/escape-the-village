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


    if(intval($finishedLevels) >= 6){

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
    <script type="text/javascript" src="js/level-6/main.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/level-6/main.css" rel="stylesheet" type="text/css" />
    <link href="css/level-6/custom.css" rel="stylesheet" type="text/css" />
    <link href="css/level-6/timer-ticker-style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/level-6/script-1.js"></script>
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

            <div class="mudroadtexture1" style="left:0px; width:3200px;"></div>


            <div class="acidWhole" style=" left:3200px;">
                <div style="position:relative;">
                    <div class="waterwarn200" id="whole1"></div>
                </div>
            </div>

            <div class="mudroadtexture2" style="left:3456px; width:3200px;"></div>

            <div class="acidWhole" style=" left:6656px;">
                <div style="position:relative;">
                    <div class="waterwarn200" id="whole2"></div>
                </div>
            </div>

            <div class="mudroadtexture3" style="left:6912px; width:3200px;"></div>

            <div class="acidWhole" style=" left:10112px;">
                <div style="position:relative;">
                    <div class="waterwarn200" id="whole3"></div>
                </div>
            </div>


            <div class="mudroadtexture1" style="left:10368px; width:3200px;"></div>

            <div class="acidWhole" style=" left:13568px;">
                <div style="position:relative;">
                    <div class="waterwarn200" id="whole4"></div>
                </div>
            </div>

            <div class="mudroadtexture2" style="left:13824px; width:3200px;"></div>

            <div class="acidWhole" style=" left:17024px;">
                <div style="position:relative;">
                    <div class="waterwarn200" id="whole5"></div>
                </div>
            </div>

            <div class="mudroadtexture3" style="left:17280px; width:3200px;"></div>

            <div class="acidWhole" style=" left:20480px;">
                <div style="position:relative;">
                    <div class="waterwarn200" id="whole6"></div>
                </div>
            </div>

            <div class="mudroadtexture1" style="left:20736px; width:6400px;"></div>

            <div class="acidWhole" style=" left:27136px;">
                <div style="position:relative;">
                    <div class="waterwarn200" id="whole7"></div>
                </div>
            </div>

            <div class="mudroadtexture2" style="left:27392px; width:1600px;"></div>

            <div class="acidWhole" style=" left:28992px;">
                <div style="position:relative;">
                    <div class="waterwarn200" id="whole8"></div>
                </div>
            </div>

            <div class="mudroadtexture1" style="left:29248px; width:11200px;"></div>


            <img src="images/level-6-assets/Objects/Saw.png" class="antiClockwiseSpin"
                style="position:absolute; left:29616px; top:0px; width: 100px;" id="saw1" />
            <img src="images/level-6-assets/Objects/Saw.png" class="antiClockwiseSpin"
                style="position:absolute; left:13820px; top:0px; width: 100px;" id="saw2" />
            <img src="images/level-6-assets/Objects/Saw.png" class="antiClockwiseSpin"
                style="position:absolute; left:18139px; top:0px; width: 100px;" id="saw3" />
            <img src="images/level-6-assets/Objects/Saw.png" class="antiClockwiseSpin"
                style="position:absolute; left:21144px; top:0px; width: 100px;" id="saw4" />
            <img src="images/level-6-assets/Objects/Saw.png" class="antiClockwiseSpin"
                style="position:absolute; left:31453px; top:0px; width: 100px;" id="saw5" />
            <img src="images/level-6-assets/Objects/Saw.png" class="antiClockwiseSpin"
                style="position:absolute; left:23398px; top:0px; width: 100px;" id="saw6" />
            <img src="images/level-6-assets/Objects/Saw.png" class="antiClockwiseSpin"
                style="position:absolute; left:20751px; top:0px; width: 100px;" id="saw7" />
            <img src="images/level-6-assets/Objects/Saw.png" class="antiClockwiseSpin"
                style="position:absolute; left:13378px; top:0px; width: 100px;" id="saw8" />
            <img src="images/level-6-assets/Objects/Saw.png" class="antiClockwiseSpin"
                style="position:absolute; left:30218px; top:0px; width: 100px;" id="saw9" />
            <img src="images/level-6-assets/Objects/Saw.png" class="antiClockwiseSpin"
                style="position:absolute; left:17363px; top:0px; width: 100px;" id="saw10" />
            <img src="images/level-6-assets/Objects/Saw.png" class="antiClockwiseSpin"
                style="position:absolute; left:5550px; top:0px; width: 100px;" id="saw11" />
            <img src="images/level-6-assets/Objects/Saw.png" class="antiClockwiseSpin"
                style="position:absolute; left:24460px; top:0px; width: 100px;" id="saw12" />
            <img src="images/level-6-assets/Objects/Saw.png" class="antiClockwiseSpin"
                style="position:absolute; left:937px; top:0px; width: 100px;" id="saw13" />
            <img src="images/level-6-assets/Objects/Saw.png" class="antiClockwiseSpin"
                style="position:absolute; left:30827px; top:0px; width: 100px;" id="saw14" />
            <img src="images/level-6-assets/Objects/Saw.png" class="antiClockwiseSpin"
                style="position:absolute; left:1174px; top:0px; width: 100px;" id="saw15" />
            <img src="images/level-6-assets/Objects/Saw.png" class="antiClockwiseSpin"
                style="position:absolute; left:19958px; top:0px; width: 100px;" id="saw16" />
            <img src="images/level-6-assets/Objects/Saw.png" class="antiClockwiseSpin"
                style="position:absolute; left:5746px; top:0px; width: 100px;" id="saw17" />
            <img src="images/level-6-assets/Objects/Saw.png" class="antiClockwiseSpin"
                style="position:absolute; left:8080px; top:0px; width: 100px;" id="saw18" />
            <img src="images/level-6-assets/Objects/Saw.png" class="antiClockwiseSpin"
                style="position:absolute; left:12220px; top:0px; width: 100px;" id="saw19" />
            <img src="images/level-6-assets/Objects/Saw.png" class="antiClockwiseSpin"
                style="position:absolute; left:28022px; top:0px; width: 100px;" id="saw20" />

            <img src="images/level-6-assets/Objects/drone.gif" class="droneAnimation"
                style="position:absolute; left:500px; top:-500px; width: 350px;" id="drone1" />
            <img src="images/level-6-assets/Objects/drone.gif" class="droneAnimation"
                style="position:absolute; left:3000px; top:-500px; width: 350px;" id="drone2" />
            <img src="images/level-6-assets/Objects/drone.gif" class="droneAnimation"
                style="position:absolute; left:5500px; top:-500px; width: 350px;" id="drone3" />
            <img src="images/level-6-assets/Objects/drone.gif" class="droneAnimation"
                style="position:absolute; left:8000px; top:-500px; width: 350px;" id="drone4" />
            <img src="images/level-6-assets/Objects/drone.gif" class="droneAnimation"
                style="position:absolute; left:10500px; top:-500px; width: 350px;" id="drone5" />
            <img src="images/level-6-assets/Objects/drone.gif" class="droneAnimation"
                style="position:absolute; left:13000px; top:-500px; width: 350px;" id="drone6" />
            <img src="images/level-6-assets/Objects/drone.gif" class="droneAnimation"
                style="position:absolute; left:15500px; top:-500px; width: 350px;" id="drone7" />
            <img src="images/level-6-assets/Objects/drone.gif" class="droneAnimation"
                style="position:absolute; left:18000px; top:-500px; width: 350px;" id="drone8" />
            <img src="images/level-6-assets/Objects/drone.gif" class="droneAnimation"
                style="position:absolute; left:20500px; top:-500px; width: 350px;" id="drone9" />
            <img src="images/level-6-assets/Objects/drone.gif" class="droneAnimation"
                style="position:absolute; left:23000px; top:-500px; width: 350px;" id="drone10" />
            <img src="images/level-6-assets/Objects/drone.gif" class="droneAnimation"
                style="position:absolute; left:25500px; top:-500px; width: 350px;" id="drone11" />
            <img src="images/level-6-assets/Objects/drone.gif" class="droneAnimation"
                style="position:absolute; left:28000px; top:-500px; width: 350px;" id="drone12" />
            <img src="images/level-6-assets/Objects/drone.gif" class="droneAnimation"
                style="position:absolute; left:30500px; top:-500px; width: 350px;" id="drone13" />
            <img src="images/level-6-assets/Objects/drone.gif" class="droneAnimation"
                style="position:absolute; left:33000px; top:-500px; width: 350px;" id="drone14" />
            <img src="images/level-6-assets/Objects/drone.gif" class="droneAnimation"
                style="position:absolute; left:35500px; top:-500px; width: 350px;" id="drone15" />

            <div class="enmybox MovingObjects">

                <!-- Finsih line -->

                <!-- Birds Collections -->

                <div style="position:relative; width:100%; overflow:visible;">



                </div>

            </div>
            <div class="score-objects">
                <!-- Coins Collections -->

                <img src="images/doors/9.png" style="position:absolute; left:1900px; top:-280px; height: 500px;"
                    id="door1" />
                <img src="images/doors/9.png" style="position:absolute; left:4200px; top:-280px; height: 500px;"
                    id="door2" />
                <img src="images/doors/9.png" style="position:absolute; left:7200px; top:-280px; height: 500px;"
                    id="door3" />
                <img src="images/doors/9.png" style="position:absolute; left:8800px; top:-280px; height: 500px;"
                    id="door4" />
                <img src="images/doors/9.png" style="position:absolute; left:11400px; top:-280px; height: 500px;"
                    id="door5" />
                <img src="images/doors/9.png" style="position:absolute; left:14300px; top:-280px; height: 500px;"
                    id="door6" />
                <img src="images/doors/9.png" style="position:absolute; left:15500px; top:-280px; height: 500px;"
                    id="door7" />
                <img src="images/doors/9.png" style="position:absolute; left:17600px; top:-280px; height: 500px;"
                    id="door8" />
                <img src="images/doors/9.png" style="position:absolute; left:19350px; top:-280px; height: 500px;"
                    id="door9" />
                <img src="images/doors/9.png" style="position:absolute; left:21800px; top:-280px; height: 500px;"
                    id="door10" />
                <img src="images/doors/9.png" style="position:absolute; left:23900px; top:-280px; height: 500px;"
                    id="door11" />
                <img src="images/doors/9.png" style="position:absolute; left:26200px; top:-280px; height: 500px;"
                    id="door12" />
                <img src="images/doors/9.png" style="position:absolute; left:28300px; top:-280px; height: 500px;"
                    id="door13" />
                <img src="images/doors/9.png" style="position:absolute; left:32000px; top:-280px; height: 500px;"
                    id="door14" />
                <img src="images/doors/9.png" style="position:absolute; left:34800px; top:-280px; height: 500px;"
                    id="door15" />

                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:5444px; top:-73.77053819728887px;" id="coin1" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:2042px; top:-65.60849882226026px;" id="coin2" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:16621px; top:-76.46659167803993px;" id="coin3" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:13501px; top:20.195596639487846px;" id="coin4" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:20784px; top:-35.06324756738978px;" id="coin5" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:36828px; top:-20.902211113603812px;" id="coin6" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:21484px; top:-72.70241914819026px;" id="coin7" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:27216px; top:5.903724564219829px;" id="coin8" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:13426px; top:14.044261014263782px;" id="coin9" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:29421px; top:22.184934018637065px;" id="coin10" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:22151px; top:-5.45906476093991px;" id="coin11" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:25316px; top:19.233095264572142px;" id="coin12" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:9330px; top:-63.63911233298401px;" id="coin13" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:10944px; top:5.481563597689657px;" id="coin14" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:26830px; top:-56.228184425725296px;" id="coin15" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:23444px; top:-18.75971772862451px;" id="coin16" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:10418px; top:-58.795887224680556px;" id="coin17" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:7460px; top:-68.82310831528864px;" id="coin18" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:32983px; top:2.690389801662832px;" id="coin19" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:12125px; top:3.013110014376622px;" id="coin20" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:28018px; top:26.919226336223332px;" id="coin21" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:35153px; top:-21.4145500986631px;" id="coin22" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:9158px; top:21.972562804931897px;" id="coin23" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:36075px; top:-30.368856574287364px;" id="coin24" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:7530px; top:-94.23479350112193px;" id="coin25" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:19239px; top:-61.93759688428175px;" id="coin26" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:16848px; top:14.089064247345206px;" id="coin27" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:13660px; top:31.99857461867282px;" id="coin28" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:25196px; top:18.3071746434223px;" id="coin29" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:14764px; top:-58.292059093947806px;" id="coin30" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:20671px; top:-66.52017363969318px;" id="coin31" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:15308px; top:26.536328235395885px;" id="coin32" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:2597px; top:-59.40224540032121px;" id="coin33" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:26499px; top:-44.91244934590558px;" id="coin34" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:30418px; top:4.893123013713563px;" id="coin35" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:31934px; top:-48.11037427450289px;" id="coin36" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:14285px; top:2.1386698247576135px;" id="coin37" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:20555px; top:14.059743936463732px;" id="coin38" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:32498px; top:-16.575025181070956px;" id="coin39" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:25288px; top:-60.92934546995684px;" id="coin40" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:36034px; top:-82.87738682445517px;" id="coin41" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:9090px; top:-59.839807810544556px;" id="coin42" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:32869px; top:-12.07456767805158px;" id="coin43" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:28615px; top:-33.608043245340355px;" id="coin44" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:27804px; top:-43.46935332027389px;" id="coin45" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:19547px; top:-36.83309610191929px;" id="coin46" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:35399px; top:-74.51714639549914px;" id="coin47" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:22245px; top:-76.04291654958446px;" id="coin48" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:9369px; top:-43.50785765434244px;" id="coin49" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:3226px; top:-42.43531517174767px;" id="coin50" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:30840px; top:16.463366722512035px;" id="coin51" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:6453px; top:-35.16457000363373px;" id="coin52" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:31859px; top:-98.03844865128094px;" id="coin53" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:32086px; top:-86.54621289734703px;" id="coin54" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:22153px; top:-92.56711415085952px;" id="coin55" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:3831px; top:32.8819486956381px;" id="coin56" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:33025px; top:-38.216978016017734px;" id="coin57" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:21480px; top:-97.20548361669512px;" id="coin58" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:3844px; top:-60.8888845162079px;" id="coin59" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:26993px; top:-75.15304809710986px;" id="coin60" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:25943px; top:-45.44809281277734px;" id="coin61" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:10708px; top:31.353176587422467px;" id="coin62" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:9241px; top:26.077464533427758px;" id="coin63" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:5852px; top:-23.491201571770702px;" id="coin64" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:21010px; top:-74.03522344659417px;" id="coin65" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:27784px; top:32.23219470841593px;" id="coin66" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:27275px; top:-97.24124253318325px;" id="coin67" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:37915px; top:-12.517924271682915px;" id="coin68" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:28888px; top:25.00467200374368px;" id="coin69" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:19748px; top:-63.08543397396036px;" id="coin70" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:12773px; top:-16.388114697225163px;" id="coin71" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:19676px; top:-84.79629655484459px;" id="coin72" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:7161px; top:35.806696484561485px;" id="coin73" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:14569px; top:-8.094818864433535px;" id="coin74" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:9870px; top:22.889700761111015px;" id="coin75" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:16242px; top:-97.32143030514118px;" id="coin76" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:36031px; top:-39.02501745718943px;" id="coin77" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:4033px; top:-27.331382647896703px;" id="coin78" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:33641px; top:-95.06189094044367px;" id="coin79" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:27999px; top:12.844468077679707px;" id="coin80" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:31990px; top:-1.8111165875066177px;" id="coin81" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:33122px; top:-89.33617432182858px;" id="coin82" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:3201px; top:-71.65977252271637px;" id="coin83" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:26490px; top:26.599577725445585px;" id="coin84" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:25644px; top:-24.41532144146022px;" id="coin85" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:27184px; top:-38.686585606513816px;" id="coin86" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:10833px; top:-80.4600662196024px;" id="coin87" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:18393px; top:27.517823702879554px;" id="coin88" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:23634px; top:-9.224216892259648px;" id="coin89" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:12542px; top:-81.99475373435527px;" id="coin90" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:12150px; top:22.235760341313437px;" id="coin91" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:12393px; top:35.598527993192306px;" id="coin92" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:31269px; top:-37.364536642762104px;" id="coin93" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:15722px; top:-43.30837214585093px;" id="coin94" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:31122px; top:-18.45172550988886px;" id="coin95" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:17696px; top:-70.57129833838553px;" id="coin96" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:29009px; top:-35.9326232641568px;" id="coin97" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:36153px; top:-60.46814686967366px;" id="coin98" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:7598px; top:17.93510859979078px;" id="coin99" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:6454px; top:-27.301210724015007px;" id="coin100" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:27449px; top:-48.53595060655988px;" id="coin101" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:20869px; top:-94.13491229032253px;" id="coin102" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:8953px; top:-47.54990092029101px;" id="coin103" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:9946px; top:-48.06048761630847px;" id="coin104" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:22459px; top:-37.540995510888344px;" id="coin105" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:14393px; top:-41.207363607419126px;" id="coin106" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:16137px; top:21.859309759859897px;" id="coin107" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:29370px; top:-60.25888525634194px;" id="coin108" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:10392px; top:-14.421935526905358px;" id="coin109" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:19560px; top:32.659234694828655px;" id="coin110" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:21531px; top:-56.012204159995704px;" id="coin111" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:31539px; top:-97.21446817406175px;" id="coin112" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:20358px; top:25.40600568015111px;" id="coin113" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:19772px; top:-46.10302055345008px;" id="coin114" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:20430px; top:-48.92379335314633px;" id="coin115" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:33128px; top:-50.123062178839696px;" id="coin116" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:20371px; top:-25.218470094808296px;" id="coin117" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:15855px; top:32.24154120427443px;" id="coin118" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:36954px; top:-1.1708454505449595px;" id="coin119" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:4993px; top:-69.95862241211474px;" id="coin120" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:5700px; top:12.325790456930605px;" id="coin121" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:32019px; top:2.925592224478393px;" id="coin122" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:22313px; top:-90.7844014012767px;" id="coin123" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:3077px; top:3.7145541822033437px;" id="coin124" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:26942px; top:-96.16541747203613px;" id="coin125" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:11631px; top:-74.55760589397708px;" id="coin126" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:23166px; top:-71.87193664793755px;" id="coin127" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:19267px; top:-74.16017677993464px;" id="coin128" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:11046px; top:-20.3853502594809px;" id="coin129" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:4823px; top:-34.89858403170449px;" id="coin130" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:22064px; top:23.489780659812837px;" id="coin131" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:5919px; top:-92.65434759442147px;" id="coin132" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:36884px; top:39.84069558077974px;" id="coin133" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:13601px; top:35.11500953646012px;" id="coin134" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:8785px; top:-29.74311106078885px;" id="coin135" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:16473px; top:26.022970416505416px;" id="coin136" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:7187px; top:-34.185349636728105px;" id="coin137" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:14228px; top:22.754144616352548px;" id="coin138" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:27540px; top:2.585138026690288px;" id="coin139" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:31422px; top:-71.28799361569483px;" id="coin140" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:3988px; top:-40.784338802762555px;" id="coin141" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:27895px; top:6.296851187445853px;" id="coin142" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:30869px; top:9.91586192850761px;" id="coin143" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:30521px; top:-39.48330945939402px;" id="coin144" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:4685px; top:-7.945340748088725px;" id="coin145" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:6624px; top:-92.59757896378778px;" id="coin146" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:10301px; top:-81.53750677606146px;" id="coin147" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:12298px; top:21.021198659918554px;" id="coin148" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:22173px; top:-63.45225095902382px;" id="coin149" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:7272px; top:-68.03724915011266px;" id="coin150" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:9096px; top:-98.2287024809975px;" id="coin151" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:33781px; top:4.903709164511753px;" id="coin152" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:21112px; top:-94.96714561129438px;" id="coin153" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:11079px; top:-60.94816885748862px;" id="coin154" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:32362px; top:-6.07955307858029px;" id="coin155" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:37452px; top:-27.17690964337642px;" id="coin156" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:21628px; top:-10.498843443412px;" id="coin157" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:17652px; top:-14.744444952964841px;" id="coin158" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:16169px; top:27.06188461499704px;" id="coin159" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:14681px; top:-18.238463507036485px;" id="coin160" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:31521px; top:-4.102029870346627px;" id="coin161" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:6599px; top:-51.99466495751578px;" id="coin162" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:3436px; top:-99.90045102551426px;" id="coin163" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:29663px; top:17.552956548098237px;" id="coin164" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:10642px; top:-84.99459334627285px;" id="coin165" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:34536px; top:-8.384739593783493px;" id="coin166" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:31721px; top:26.735368216919795px;" id="coin167" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:30407px; top:24.844988959524912px;" id="coin168" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:20556px; top:1.0998616205194196px;" id="coin169" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:3381px; top:3.180169784775046px;" id="coin170" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:37812px; top:-28.289901000961592px;" id="coin171" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:20395px; top:11.689190000497007px;" id="coin172" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:20252px; top:-93.39002054509636px;" id="coin173" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:10714px; top:1.2570483355413415px;" id="coin174" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:7424px; top:35.4748095999702px;" id="coin175" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:21088px; top:-66.52065133494526px;" id="coin176" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:29724px; top:-95.10833305664765px;" id="coin177" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:8854px; top:-23.966632819929004px;" id="coin178" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:34557px; top:-26.243808441560574px;" id="coin179" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:34820px; top:-41.13185672085696px;" id="coin180" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:10376px; top:6.978990736899931px;" id="coin181" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:37693px; top:-53.540209574406724px;" id="coin182" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:18451px; top:-41.86694727732318px;" id="coin183" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:28344px; top:20.720094096033108px;" id="coin184" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:28210px; top:26.491388956823513px;" id="coin185" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:17673px; top:-36.62865329065582px;" id="coin186" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:27249px; top:1.34799922918873px;" id="coin187" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:30757px; top:5.236898397009824px;" id="coin188" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:21555px; top:-95.69747360739215px;" id="coin189" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:35170px; top:-74.34018834210764px;" id="coin190" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:20162px; top:-44.98227437324865px;" id="coin191" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:25510px; top:-42.15219080718983px;" id="coin192" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:4965px; top:-78.48825557527282px;" id="coin193" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:23178px; top:22.4765098968291px;" id="coin194" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:35519px; top:-16.940064429026833px;" id="coin195" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:31935px; top:-15.22829438719738px;" id="coin196" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:27971px; top:1.345654780578272px;" id="coin197" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:37874px; top:21.767236440682865px;" id="coin198" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:20852px; top:-94.80554980895633px;" id="coin199" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:35166px; top:13.648144049245104px;" id="coin200" />


                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:36392px; top:-14.934460220214902px;" id="diamond1" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:30826px; top:-4.294682942158886px;" id="diamond2" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:14352px; top:-67.6118515534585px;" id="diamond3" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:16086px; top:-74.00567083603552px;" id="diamond4" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:36390px; top:14.347416793002708px;" id="diamond5" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:32831px; top:-22.19310952113966px;" id="diamond6" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:14117px; top:8.578478611708789px;" id="diamond7" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:23779px; top:-84.07148999981312px;" id="diamond8" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:4229px; top:-71.91677979430783px;" id="diamond9" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:30280px; top:-38.074362925261106px;" id="diamond10" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:37632px; top:-5.895518902978793px;" id="diamond11" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:34823px; top:-24.31535158040215px;" id="diamond12" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:28529px; top:-46.08066835401873px;" id="diamond13" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:7209px; top:-38.82976008941116px;" id="diamond14" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:13963px; top:-38.84196341727864px;" id="diamond15" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:11286px; top:26.169137174995768px;" id="diamond16" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:5786px; top:-2.30715249656231px;"
                    id="diamond17" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:3401px; top:-10.949021791538513px;" id="diamond18" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:15408px; top:-77.51430012821216px;" id="diamond19" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:7376px; top:-11.484990051611263px;" id="diamond20" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:27260px; top:20.544471757672923px;" id="diamond21" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:24807px; top:-80.85089390843243px;" id="diamond22" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:26014px; top:23.158396399687177px;" id="diamond23" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:29000px; top:-71.92448205223504px;" id="diamond24" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:22483px; top:-90.89742696980755px;" id="diamond25" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:9761px; top:-27.58184297408812px;" id="diamond26" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:9317px; top:-96.6506280434617px;"
                    id="diamond27" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:35139px; top:39.33189751334547px;" id="diamond28" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:3511px; top:-75.51743126558223px;" id="diamond29" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:36876px; top:14.347572218544911px;" id="diamond30" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:34829px; top:27.86595646421692px;" id="diamond31" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:17854px; top:-49.13516074207975px;" id="diamond32" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:29832px; top:-17.79290522883862px;" id="diamond33" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:33234px; top:-2.5535831000751728px;" id="diamond34" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:23756px; top:-56.487351590928974px;" id="diamond35" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:36493px; top:-98.40885880259147px;" id="diamond36" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:16547px; top:-2.721503968998192px;" id="diamond37" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:16247px; top:-6.160816906116551px;" id="diamond38" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:27012px; top:-87.88945295058532px;" id="diamond39" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:18805px; top:23.35880829973911px;" id="diamond40" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:14303px; top:-30.075500870781497px;" id="diamond41" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:29871px; top:-67.93558099794421px;" id="diamond42" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:31667px; top:-2.98181889871654px;" id="diamond43" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:8127px; top:24.62642645602449px;"
                    id="diamond44" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:28897px; top:34.12679316305707px;" id="diamond45" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:9625px; top:30.426882465267056px;" id="diamond46" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:31526px; top:-61.832177522198336px;" id="diamond47" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:35534px; top:-52.79053832533693px;" id="diamond48" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:32861px; top:1.261627818625712px;" id="diamond49" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:7365px; top:-50.72674300175747px;" id="diamond50" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:4278px; top:-59.5136464065068px;"
                    id="diamond51" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:37314px; top:32.66261414548754px;" id="diamond52" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:3007px; top:-92.19396647809033px;" id="diamond53" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:16387px; top:-84.20884128658136px;" id="diamond54" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:36356px; top:-1.9425248876072345px;" id="diamond55" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:7481px; top:-15.573419988918204px;" id="diamond56" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:16936px; top:31.622333683980145px;" id="diamond57" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:28259px; top:-5.888704093497225px;" id="diamond58" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:15746px; top:-10.667343501456159px;" id="diamond59" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:33399px; top:-51.03297133650134px;" id="diamond60" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:24250px; top:8.445356565449885px;" id="diamond61" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:21497px; top:38.28578314125846px;" id="diamond62" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:33338px; top:30.59410240800173px;" id="diamond63" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:12341px; top:-60.66215784064079px;" id="diamond64" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:32192px; top:-86.60963251770512px;" id="diamond65" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:12759px; top:15.36411610944954px;" id="diamond66" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:27205px; top:-84.61651168212262px;" id="diamond67" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:31168px; top:-11.090596607774543px;" id="diamond68" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:13273px; top:32.60234651810961px;" id="diamond69" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:22161px; top:-81.52690419152574px;" id="diamond70" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:34275px; top:-1.2934942785970236px;" id="diamond71" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:13129px; top:30.40282131586136px;" id="diamond72" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:19857px; top:-2.700734109999061px;" id="diamond73" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:31714px; top:-79.62924534211054px;" id="diamond74" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:10741px; top:-19.330120506705185px;" id="diamond75" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:7471px; top:-80.85851399087115px;" id="diamond76" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:19832px; top:-1.9306882515803494px;" id="diamond77" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:35223px; top:36.37859679061157px;" id="diamond78" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:15608px; top:-22.22559481374941px;" id="diamond79" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:30509px; top:-3.339777899786583px;" id="diamond80" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:7628px; top:-49.50786730989135px;" id="diamond81" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:29552px; top:-50.78242847237866px;" id="diamond82" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:27494px; top:-31.82648091042583px;" id="diamond83" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:16081px; top:-39.026635539403784px;" id="diamond84" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:7063px; top:-51.856153481587384px;" id="diamond85" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:4296px; top:-61.89108418312625px;" id="diamond86" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:4669px; top:-67.61888544552313px;" id="diamond87" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:31688px; top:18.247935260316808px;" id="diamond88" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:30066px; top:-65.3834741574355px;" id="diamond89" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:22511px; top:-73.78744663598599px;" id="diamond90" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:28954px; top:-80.1597117164376px;" id="diamond91" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:14516px; top:-76.41204972595902px;" id="diamond92" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:33970px; top:-46.3989336794164px;" id="diamond93" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:31808px; top:21.721194396718346px;" id="diamond94" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:23628px; top:-4.81179882695244px;" id="diamond95" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:12211px; top:38.77095303517177px;" id="diamond96" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:18810px; top:13.687369486123686px;" id="diamond97" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:22874px; top:14.11685610422363px;" id="diamond98" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:10609px; top:-66.29888151380531px;" id="diamond99" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:2469px; top:-91.62153038477679px;" id="diamond100" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:10459px; top:-90.95126586580491px;" id="diamond101" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:26043px; top:-7.79496832350172px;" id="diamond102" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:10367px; top:5.4217442008770576px;" id="diamond103" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:19846px; top:-30.113988684144104px;" id="diamond104" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:7574px; top:38.47843694104134px;"
                    id="diamond105" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:19040px; top:-93.02170415945767px;" id="diamond106" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:20746px; top:-2.3148566817895926px;" id="diamond107" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:9762px; top:-2.6063243300908425px;" id="diamond108" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:2073px; top:-59.732558928501035px;" id="diamond109" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:37339px; top:8.851313174157013px;" id="diamond110" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:11840px; top:-98.00608979701154px;" id="diamond111" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:27123px; top:-39.657879283706215px;" id="diamond112" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:35635px; top:-76.44682828317328px;" id="diamond113" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:10897px; top:-92.50448405842697px;" id="diamond114" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:6416px; top:-61.995851823781855px;" id="diamond115" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:16672px; top:-10.34668430525059px;" id="diamond116" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:14732px; top:-59.270980690165224px;" id="diamond117" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:34304px; top:-24.917571894990942px;" id="diamond118" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:27555px; top:-73.60860952239736px;" id="diamond119" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:37918px; top:38.34279302414157px;" id="diamond120" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:33120px; top:-70.17101949289604px;" id="diamond121" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:17371px; top:-6.157013599861514px;" id="diamond122" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:20065px; top:-83.83384843882908px;" id="diamond123" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:37469px; top:39.98141915017305px;" id="diamond124" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:2675px; top:-22.30882751274588px;" id="diamond125" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:17450px; top:16.1244495815871px;"
                    id="diamond126" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:10949px; top:30.50078077916018px;" id="diamond127" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:12173px; top:-23.489095110144703px;" id="diamond128" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:19646px; top:-93.42040510308148px;" id="diamond129" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:5565px; top:33.686379630539534px;" id="diamond130" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:33480px; top:28.801779288381766px;" id="diamond131" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:35915px; top:-11.81602560214985px;" id="diamond132" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:10792px; top:-46.94807353419277px;" id="diamond133" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:32140px; top:-39.67020458659876px;" id="diamond134" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:25950px; top:-90.17969137551962px;" id="diamond135" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:6557px; top:-74.7215527645402px;"
                    id="diamond136" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:25859px; top:-2.9392637985096712px;" id="diamond137" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:11768px; top:-53.45896827447714px;" id="diamond138" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:36914px; top:-16.5767889554445px;" id="diamond139" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:25918px; top:-40.75748584192825px;" id="diamond140" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:12498px; top:-80.64569058647331px;" id="diamond141" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:19294px; top:20.21627165087584px;" id="diamond142" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:12349px; top:-97.4452524832865px;" id="diamond143" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:28015px; top:-21.95700315953121px;" id="diamond144" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:33992px; top:-84.12547027736744px;" id="diamond145" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:7874px; top:-96.36394028996811px;" id="diamond146" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:8088px; top:-10.090701947909352px;" id="diamond147" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:10587px; top:34.706359467347056px;" id="diamond148" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:9938px; top:-21.40646770662535px;" id="diamond149" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:4979px; top:8.510760231612181px;"
                    id="diamond150" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:29570px; top:-57.35557723744093px;" id="diamond151" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:25269px; top:-93.3069051454969px;" id="diamond152" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:35443px; top:-61.20791501966566px;" id="diamond153" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:24042px; top:-26.943031816304682px;" id="diamond154" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:30693px; top:17.492345875824185px;" id="diamond155" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:5165px; top:-54.35552610593904px;" id="diamond156" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:8840px; top:34.793684011144194px;" id="diamond157" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:19861px; top:-20.18909474736276px;" id="diamond158" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:21424px; top:-73.0494951509541px;" id="diamond159" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:37275px; top:-51.63155170961523px;" id="diamond160" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:33530px; top:-20.311449604418925px;" id="diamond161" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:19064px; top:-63.997091483227706px;" id="diamond162" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:19044px; top:-52.04589495683781px;" id="diamond163" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:26760px; top:-17.65739289245107px;" id="diamond164" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:20192px; top:-79.87079872624776px;" id="diamond165" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:20277px; top:-94.16653055747216px;" id="diamond166" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:12475px; top:-0.8433706393794154px;" id="diamond167" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:16082px; top:-12.224403209559895px;" id="diamond168" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:11578px; top:34.310222178645006px;" id="diamond169" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:26889px; top:-85.74434957155708px;" id="diamond170" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:29733px; top:-86.06891700460109px;" id="diamond171" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:30566px; top:27.709495987100453px;" id="diamond172" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:24610px; top:-4.009184442340953px;" id="diamond173" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:7022px; top:-0.5671578971835629px;" id="diamond174" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:33279px; top:-13.512189297018168px;" id="diamond175" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:25302px; top:11.801092853491681px;" id="diamond176" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:32768px; top:-78.37847391402505px;" id="diamond177" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:21948px; top:-69.7810683715338px;" id="diamond178" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:7558px; top:-77.79461060657613px;" id="diamond179" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:19318px; top:-74.56097991854095px;" id="diamond180" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:9162px; top:-59.689906945509335px;" id="diamond181" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:32575px; top:-92.43567509971277px;" id="diamond182" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:29247px; top:-8.241746078434957px;" id="diamond183" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:5981px; top:-97.05618354979089px;" id="diamond184" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:34781px; top:5.621119997592871px;" id="diamond185" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:34177px; top:-62.210207672077345px;" id="diamond186" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:19945px; top:-89.42085092736144px;" id="diamond187" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:12389px; top:-27.549332773098584px;" id="diamond188" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:5221px; top:-38.558401514925784px;" id="diamond189" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:25254px; top:-7.30420086986372px;" id="diamond190" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:23934px; top:-63.56427646787272px;" id="diamond191" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:7094px; top:21.65364708422814px;"
                    id="diamond192" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:10657px; top:6.96714790292161px;"
                    id="diamond193" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:36015px; top:-63.06806708505151px;" id="diamond194" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:6967px; top:28.960777209138143px;" id="diamond195" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:33455px; top:-38.97494931142122px;" id="diamond196" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:17533px; top:-58.118969748029585px;" id="diamond197" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:16286px; top:-21.62245450439734px;" id="diamond198" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:26456px; top:-2.242842974111653px;" id="diamond199" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:17233px; top:-82.46976601837773px;" id="diamond200" />



                <img src="images/flag.gif" id="flag" style="position:absolute; left:37000px; bottom: 100px;" />

            </div>
        </div>
    </div>
    <!--<img src="images/jump.png"  style="position:absolute; z-index:55555; right:11px;  bottom:12px;"  onclick="jumper();" />-->

    <div class="seenlayer">

    </div>
    <div class="maintree">
        <div style="position:relative;">

            <!--Add Objs Here-->

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
                <a href="level-6.php"
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

<script type="text/javascript" src="js/level-6/script-2.js"></script>
<script type="text/javascript" src="js/level-6/timer-ticker-script.js"></script>



</html>