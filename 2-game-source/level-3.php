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


    if(intval($finishedLevels) >= 3){

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
    <script type="text/javascript" src="js/level-3/main.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/level-3/main.css" rel="stylesheet" type="text/css" />
    <link href="css/level-3/custom.css" rel="stylesheet" type="text/css" />
    <link href="css/level-3/timer-ticker-style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/level-3/script-1.js"></script>
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

            <div class="mudroadtexture" style="left:0px; width:5000px;"></div>

            <div class="iceblock" style="left:5000px; width:808px;"></div>

            <div class="mudroadtexture" style="left:5800px; width:1000px;"></div>

            <div class="iceblock" style="left:6800px; width:808px;"></div>

            <div class="mudroadtexture" style="left:7608px; width:2000px;"></div>

            <div class="waterWhole" id="water-whole-1" style="left:9608px; width:250px;"></div>

            <div class="mudroadtexture" style="left:9858px; width:1000px;"></div>

            <div class="waterWhole" id="water-whole-2" style="left:10858px; width:250px;"></div>

            <div class="mudroadtexture" style="left:11108px; width:2000px;"></div>

            <div class="waterWhole" id="water-whole-3" style="left:13108px; width:250px;"></div>

            <div class="mudroadtexture" style="left:13358px; width:10000px;"></div>

            <div class="waterWhole" id="water-whole-4" style="left:23358px; width:350px;"></div>

            <div class="mudroadtexture" style="left:23708px; width:5000px;"></div>

            <div class="waterWhole" id="water-whole-5" style="left:28708px; width:350px;"></div>

            <div class="mudroadtexture" style="left:29058px; width:10000px;"></div>

            <div class="enmybox MovingObjects">

                <!-- Finsih line -->

                <!-- Birds Collections -->
                <div style="position:relative; width:100%; overflow:visible;">



                </div>

            </div>
            <div class="score-objects">
                <!-- Coins Collections -->

                <img src="images/doors/7.png" style="position:absolute; left:2000px; top:-220px; height: 480px;"
                    id="door1" />
                <img src="images/doors/7.png" style="position:absolute; left:4200px; top:-220px; height: 480px;"
                    id="door2" />
                <img src="images/doors/7.png" style="position:absolute; left:6400px; top:-220px; height: 480px;"
                    id="door3" />
                <img src="images/doors/7.png" style="position:absolute; left:8600px; top:-220px; height: 480px;"
                    id="door4" />
                <img src="images/doors/7.png" style="position:absolute; left:11400px; top:-220px; height: 480px;"
                    id="door5" />
                <img src="images/doors/7.png" style="position:absolute; left:13500px; top:-220px; height: 480px;"
                    id="door6" />
                <img src="images/doors/7.png" style="position:absolute; left:15200px; top:-220px; height: 480px;"
                    id="door7" />
                <img src="images/doors/7.png" style="position:absolute; left:17400px; top:-220px; height: 480px;"
                    id="door8" />
                <img src="images/doors/7.png" style="position:absolute; left:19600px; top:-220px; height: 480px;"
                    id="door9" />
                <img src="images/doors/7.png" style="position:absolute; left:21800px; top:-220px; height: 480px;"
                    id="door10" />
                <img src="images/doors/7.png" style="position:absolute; left:24000px; top:-220px; height: 480px;"
                    id="door11" />
                <img src="images/doors/7.png" style="position:absolute; left:26200px; top:-220px; height: 480px;"
                    id="door12" />
                <img src="images/doors/7.png" style="position:absolute; left:28300px; top:-220px; height: 480px;"
                    id="door13" />
                <img src="images/doors/7.png" style="position:absolute; left:30600px; top:-220px; height: 480px;"
                    id="door14" />
                <img src="images/doors/7.png" style="position:absolute; left:32800px; top:-220px; height: 480px;"
                    id="door15" />


                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:17616px; top:-88.12103030674555px;" id="coin1" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:20796px; top:-30.322741585808373px;" id="coin2" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:35511px; top:-65.30713530677441px;" id="coin3" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:37895px; top:-33.12308593828622px;" id="coin4" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:4696px; top:29.597401584901974px;" id="coin5" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:27730px; top:26.89276079088313px;" id="coin6" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:26496px; top:-19.742335823861154px;" id="coin7" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:12775px; top:-63.896393324331356px;" id="coin8" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:32805px; top:-64.79577899459792px;" id="coin9" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:35601px; top:-87.97745960900036px;" id="coin10" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:30736px; top:-65.57825203770122px;" id="coin11" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:30515px; top:-62.726206644682186px;" id="coin12" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:37130px; top:-56.330369893637645px;" id="coin13" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:8040px; top:-74.81568922249404px;" id="coin14" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:8538px; top:-49.05825266456365px;" id="coin15" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:5117px; top:-44.23647879078417px;" id="coin16" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:25334px; top:-81.63593863494694px;" id="coin17" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:15925px; top:-8.190414169502205px;" id="coin18" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:4159px; top:-39.3060141957911px;" id="coin19" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:17867px; top:35.786014107982595px;" id="coin20" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:7597px; top:-36.86754400653986px;" id="coin21" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:26084px; top:-64.72721234643952px;" id="coin22" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:13639px; top:-44.00480562482229px;" id="coin23" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:13152px; top:-76.20107565283016px;" id="coin24" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:21836px; top:15.349213199903673px;" id="coin25" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:26141px; top:-87.6287578839365px;" id="coin26" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:34354px; top:-85.76260549968667px;" id="coin27" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:17025px; top:-47.79964165972824px;" id="coin28" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:14144px; top:-80.0245636606382px;" id="coin29" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:37266px; top:-25.02121325876749px;" id="coin30" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:30774px; top:-7.10210789557226px;" id="coin31" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:24639px; top:-43.23293138339327px;" id="coin32" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:17097px; top:-87.63228763854379px;" id="coin33" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:2606px; top:-55.05257109636682px;" id="coin34" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:22151px; top:38.60839741883751px;" id="coin35" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:4314px; top:-59.758876391724684px;" id="coin36" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:6239px; top:12.178226806384302px;" id="coin37" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:17831px; top:-40.36204473193303px;" id="coin38" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:10168px; top:-85.29474918916121px;" id="coin39" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:36808px; top:31.68868223490972px;" id="coin40" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:26014px; top:-97.02517093362188px;" id="coin41" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:21868px; top:25.73819982029572px;" id="coin42" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:26234px; top:-41.662904933297675px;" id="coin43" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:8463px; top:35.19903940082975px;" id="coin44" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:3572px; top:-78.35841630553159px;" id="coin45" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:30910px; top:-72.29470274807717px;" id="coin46" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:32742px; top:-10.0348816968135px;" id="coin47" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:27080px; top:-42.33629113387005px;" id="coin48" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:18549px; top:-55.754768880252726px;" id="coin49" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:37567px; top:-21.380976238833213px;" id="coin50" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:13322px; top:29.620828237684776px;" id="coin51" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:9448px; top:-42.06665450920295px;" id="coin52" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:22818px; top:-31.33332291224511px;" id="coin53" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:22425px; top:-46.784282804542634px;" id="coin54" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:26714px; top:-6.465760218271072px;" id="coin55" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:25541px; top:-72.21560787399201px;" id="coin56" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:3702px; top:-89.15496847076493px;" id="coin57" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:30682px; top:-81.63572705765418px;" id="coin58" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:2487px; top:21.113797732056653px;" id="coin59" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:20938px; top:15.225301853307755px;" id="coin60" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:7846px; top:-67.59861109790708px;" id="coin61" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:11320px; top:-62.82319980458889px;" id="coin62" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:33368px; top:-38.83639188968602px;" id="coin63" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:11569px; top:-61.021659355699676px;" id="coin64" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:26749px; top:-13.403918351092017px;" id="coin65" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:33643px; top:-64.85715409765501px;" id="coin66" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:31040px; top:11.528722146388915px;" id="coin67" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:33545px; top:-61.65346117935222px;" id="coin68" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:25426px; top:-5.897182790005687px;" id="coin69" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:23164px; top:2.867841295219037px;" id="coin70" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:17834px; top:-59.04046584026656px;" id="coin71" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:6282px; top:-20.502290463845725px;" id="coin72" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:33795px; top:-58.23324237094302px;" id="coin73" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:17406px; top:-43.537019188086546px;" id="coin74" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:20779px; top:-59.54858331199852px;" id="coin75" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:8701px; top:-80.0901881209489px;" id="coin76" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:31789px; top:-99.57322762525489px;" id="coin77" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:36848px; top:-35.67886633784572px;" id="coin78" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:19259px; top:-64.51931940090863px;" id="coin79" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:10737px; top:-78.47670203170719px;" id="coin80" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:32208px; top:-47.95139650984446px;" id="coin81" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:36720px; top:-36.09027663872637px;" id="coin82" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:5099px; top:-30.620912888788695px;" id="coin83" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:5875px; top:-34.20861180415446px;" id="coin84" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:28894px; top:23.704960283092234px;" id="coin85" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:18019px; top:28.096495177623808px;" id="coin86" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:16060px; top:20.723127342617246px;" id="coin87" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:36703px; top:-89.51674864701202px;" id="coin88" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:12242px; top:-89.80776521024244px;" id="coin89" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:10983px; top:-13.080256727257634px;" id="coin90" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:15217px; top:-56.55473748386226px;" id="coin91" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:6915px; top:-13.477582480228222px;" id="coin92" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:28801px; top:19.291046554461815px;" id="coin93" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:8154px; top:-86.84463433000343px;" id="coin94" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:31217px; top:8.591864120283901px;" id="coin95" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:14191px; top:-63.45107901335921px;" id="coin96" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:20322px; top:-56.35970588494602px;" id="coin97" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:11650px; top:23.364057627660657px;" id="coin98" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:36293px; top:25.610001471278622px;" id="coin99" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:5079px; top:-13.340556935820999px;" id="coin100" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:33788px; top:-98.85410248131763px;" id="coin101" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:24911px; top:-11.970728792348666px;" id="coin102" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:26199px; top:35.38544452414584px;" id="coin103" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:16670px; top:-44.105799309901904px;" id="coin104" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:26765px; top:-69.64143919103248px;" id="coin105" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:28962px; top:-49.02812337565476px;" id="coin106" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:8335px; top:29.364464041084716px;" id="coin107" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:20847px; top:-40.843839261502204px;" id="coin108" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:8413px; top:-94.96424402191741px;" id="coin109" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:11481px; top:1.110120787170871px;" id="coin110" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:29978px; top:-94.65936533662551px;" id="coin111" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:27736px; top:-35.375400952797804px;" id="coin112" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:9411px; top:36.37553050070437px;" id="coin113" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:17799px; top:-49.48956198140676px;" id="coin114" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:34794px; top:-45.76341428573122px;" id="coin115" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:8132px; top:-75.09179358250077px;" id="coin116" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:12853px; top:25.166737306486226px;" id="coin117" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:12576px; top:35.75290874405968px;" id="coin118" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:35404px; top:-93.01933798516464px;" id="coin119" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:32681px; top:-68.53865293166848px;" id="coin120" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:6500px; top:-49.33251912743032px;" id="coin121" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:2881px; top:-41.419862860954254px;" id="coin122" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:28842px; top:-76.29938160234157px;" id="coin123" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:23273px; top:14.698992922101581px;" id="coin124" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:25009px; top:33.618647419737385px;" id="coin125" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:21266px; top:-73.42719169994372px;" id="coin126" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:34413px; top:-86.24420379828618px;" id="coin127" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:11964px; top:32.35417231434542px;" id="coin128" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:26055px; top:22.580440772845463px;" id="coin129" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:6541px; top:-51.15189658838231px;" id="coin130" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:31394px; top:-58.52716378460446px;" id="coin131" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:31545px; top:5.013144913441565px;" id="coin132" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:36774px; top:-76.6743465945647px;" id="coin133" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:27932px; top:5.9201426560835415px;" id="coin134" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:27281px; top:-30.393074869981234px;" id="coin135" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:28956px; top:-43.60466866888443px;" id="coin136" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:11397px; top:-31.3268234708256px;" id="coin137" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:2362px; top:-12.144892841471503px;" id="coin138" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:2520px; top:-62.38725802768506px;" id="coin139" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:36000px; top:-33.31237703706134px;" id="coin140" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:4958px; top:-89.94759117344118px;" id="coin141" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:14407px; top:-21.108928345898846px;" id="coin142" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:4224px; top:32.91105279955738px;" id="coin143" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:32970px; top:-91.0951134523752px;" id="coin144" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:2602px; top:14.104339922015768px;" id="coin145" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:26309px; top:-77.27549848160906px;" id="coin146" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:31041px; top:13.914152807556547px;" id="coin147" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:6242px; top:14.986008532067075px;" id="coin148" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:21456px; top:-8.224189699575078px;" id="coin149" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:17167px; top:-3.5212391824944973px;" id="coin150" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:15910px; top:-47.44823964252452px;" id="coin151" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:26536px; top:7.120480131747954px;" id="coin152" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:26147px; top:37.16315405630465px;" id="coin153" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:11831px; top:39.42009100513221px;" id="coin154" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:37456px; top:-80.0314111957571px;" id="coin155" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:33708px; top:-12.430397406021086px;" id="coin156" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:16597px; top:-81.93604349629544px;" id="coin157" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:26537px; top:36.801485024592466px;" id="coin158" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:25717px; top:-1.6929266190203691px;" id="coin159" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:37956px; top:38.8061443072765px;" id="coin160" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:19050px; top:-77.17051899956229px;" id="coin161" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:15446px; top:-13.03747503374683px;" id="coin162" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:26794px; top:-14.986517093368079px;" id="coin163" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:32834px; top:-80.38724794637805px;" id="coin164" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:24800px; top:-42.5238759369385px;" id="coin165" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:14637px; top:-7.365752170163574px;" id="coin166" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:3062px; top:-5.20883136388467px;" id="coin167" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:17950px; top:-29.226863621652456px;" id="coin168" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:23779px; top:-96.53116758793738px;" id="coin169" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:26498px; top:-24.944104113094212px;" id="coin170" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:25456px; top:-57.48730308954098px;" id="coin171" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:11269px; top:-3.078350613252084px;" id="coin172" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:15586px; top:-94.69342856430836px;" id="coin173" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:36452px; top:26.750265875723954px;" id="coin174" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:18982px; top:22.94260153611316px;" id="coin175" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:16741px; top:-85.88372759508268px;" id="coin176" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:35520px; top:-35.90787772698616px;" id="coin177" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:30246px; top:24.757034806412193px;" id="coin178" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:9511px; top:10.474710378936237px;" id="coin179" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:26808px; top:-70.41036895265417px;" id="coin180" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:31963px; top:-28.813469301476133px;" id="coin181" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:15294px; top:-16.538093245876453px;" id="coin182" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:16539px; top:2.149383348074565px;" id="coin183" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:29337px; top:-51.54756742975583px;" id="coin184" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:32565px; top:-19.15325160518249px;" id="coin185" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:25259px; top:-11.312673698041152px;" id="coin186" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:18844px; top:-67.84112625846106px;" id="coin187" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:35207px; top:-7.173978314478703px;" id="coin188" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:22782px; top:-11.308714105503398px;" id="coin189" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:34327px; top:-97.3584992714246px;" id="coin190" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:37965px; top:-21.07559335623813px;" id="coin191" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:13578px; top:-44.10861543576847px;" id="coin192" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:16873px; top:28.442218224374244px;" id="coin193" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:34181px; top:25.677310776173698px;" id="coin194" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:8349px; top:39.871203483205704px;" id="coin195" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:35386px; top:10.505326942854168px;" id="coin196" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:5459px; top:-75.92682224442359px;" id="coin197" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:10504px; top:30.56831310666223px;" id="coin198" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:18009px; top:-62.6573673334381px;" id="coin199" />
                <img src="images/coin/c1.png" class="runcoin"
                    style="position:absolute; left:3711px; top:-78.63251552749867px;" id="coin200" />


                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:12593px; top:-65.85718641392918px;" id="diamond1" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:20054px; top:-65.52637143322036px;" id="diamond2" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:18962px; top:37.08069632380597px;" id="diamond3" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:7362px; top:-54.057641833568454px;" id="diamond4" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:7799px; top:-79.48643543062933px;" id="diamond5" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:15188px; top:11.253758351620704px;" id="diamond6" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:11260px; top:-67.01215256116168px;" id="diamond7" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:27704px; top:37.53397686874976px;" id="diamond8" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:35839px; top:-96.06963007814596px;" id="diamond9" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:15419px; top:-85.35101499968049px;" id="diamond10" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:36804px; top:-4.952343527800764px;" id="diamond11" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:22869px; top:-3.1984091549551152px;" id="diamond12" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:21600px; top:30.528084436905687px;" id="diamond13" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:33268px; top:27.75237088697331px;" id="diamond14" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:18652px; top:-9.978757852746924px;" id="diamond15" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:35123px; top:24.654101968271704px;" id="diamond16" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:23923px; top:-4.766393299242779px;" id="diamond17" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:33723px; top:11.068441981374463px;" id="diamond18" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:17813px; top:-7.387201740719334px;" id="diamond19" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:37894px; top:-94.54461452513257px;" id="diamond20" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:30864px; top:37.40224063756807px;" id="diamond21" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:14402px; top:-89.49351439953426px;" id="diamond22" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:23147px; top:-65.04260874938751px;" id="diamond23" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:23802px; top:-9.5964407172698px;"
                    id="diamond24" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:3767px; top:-22.756135965059798px;" id="diamond25" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:19491px; top:30.391240701447828px;" id="diamond26" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:9819px; top:-6.9839758222659185px;" id="diamond27" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:13537px; top:-27.424513279939788px;" id="diamond28" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:37568px; top:-13.452166804974922px;" id="diamond29" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:22285px; top:10.093066148158613px;" id="diamond30" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:31728px; top:-50.52305991251515px;" id="diamond31" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:31401px; top:-4.6502940394201175px;" id="diamond32" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:23265px; top:-4.789322422352427px;" id="diamond33" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:21190px; top:-88.1542538453341px;" id="diamond34" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:16071px; top:-47.86731480298835px;" id="diamond35" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:37918px; top:-20.216264461868576px;" id="diamond36" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:2064px; top:-14.708884280237385px;" id="diamond37" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:14028px; top:-98.19981334862565px;" id="diamond38" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:35443px; top:4.702738954397972px;" id="diamond39" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:33295px; top:-32.94618689120267px;" id="diamond40" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:3500px; top:7.688439945716766px;"
                    id="diamond41" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:26841px; top:-75.54112086255256px;" id="diamond42" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:12016px; top:31.134965882870745px;" id="diamond43" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:26650px; top:34.89735089600515px;" id="diamond44" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:8690px; top:-78.60104301403551px;" id="diamond45" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:5734px; top:-91.34882131272916px;" id="diamond46" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:27506px; top:-6.074047451488724px;" id="diamond47" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:20034px; top:-39.4353554694155px;" id="diamond48" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:19506px; top:-18.753362798515397px;" id="diamond49" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:27186px; top:38.47570614563284px;" id="diamond50" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:23599px; top:4.785847486505702px;" id="diamond51" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:23746px; top:-7.438730885967232px;" id="diamond52" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:19624px; top:35.23586488476428px;" id="diamond53" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:7985px; top:-97.92891538056443px;" id="diamond54" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:35033px; top:-19.841506276041656px;" id="diamond55" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:13567px; top:4.381338722124298px;" id="diamond56" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:28264px; top:-67.93961607994095px;" id="diamond57" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:3067px; top:-48.43277494916715px;" id="diamond58" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:37492px; top:-24.546571107614895px;" id="diamond59" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:7255px; top:-87.82142831552252px;" id="diamond60" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:32913px; top:-42.70870519937651px;" id="diamond61" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:6381px; top:-0.6348502354900916px;" id="diamond62" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:28958px; top:-1.2926300850493533px;" id="diamond63" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:35127px; top:-25.95337500645286px;" id="diamond64" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:21440px; top:-78.65232592971725px;" id="diamond65" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:10163px; top:-50.19183276581693px;" id="diamond66" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:36504px; top:-88.43959014231935px;" id="diamond67" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:12513px; top:-18.966973869256492px;" id="diamond68" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:15647px; top:-8.626327061906949px;" id="diamond69" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:23123px; top:19.969451191357592px;" id="diamond70" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:14607px; top:30.16779229518454px;" id="diamond71" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:11860px; top:-54.19641279104659px;" id="diamond72" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:37728px; top:9.126057572634124px;" id="diamond73" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:2102px; top:-40.67983735483394px;" id="diamond74" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:29299px; top:-76.58070256749298px;" id="diamond75" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:8075px; top:-49.249424394582554px;" id="diamond76" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:33650px; top:8.946172239845737px;" id="diamond77" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:10522px; top:-98.16040583291648px;" id="diamond78" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:28301px; top:32.14567682797616px;" id="diamond79" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:35476px; top:36.03080598601676px;" id="diamond80" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:5822px; top:-17.159643458167977px;" id="diamond81" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:21344px; top:-20.60250833571949px;" id="diamond82" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:8333px; top:-85.4324449822279px;"
                    id="diamond83" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:9239px; top:-24.785560912248187px;" id="diamond84" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:17341px; top:-70.16813016793354px;" id="diamond85" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:21710px; top:-88.61587913834445px;" id="diamond86" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:29824px; top:-10.145159270143807px;" id="diamond87" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:36635px; top:-18.66213147624505px;" id="diamond88" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:23920px; top:-34.965951700927775px;" id="diamond89" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:36034px; top:22.946799434203427px;" id="diamond90" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:29165px; top:-40.90474790573828px;" id="diamond91" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:14290px; top:-77.16499215481531px;" id="diamond92" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:35479px; top:15.47651484678542px;" id="diamond93" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:22699px; top:-91.50229717328152px;" id="diamond94" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:15149px; top:-64.82127665252803px;" id="diamond95" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:11864px; top:-34.161210733450545px;" id="diamond96" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:5910px; top:-52.721590996389864px;" id="diamond97" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:30774px; top:-25.583251951868704px;" id="diamond98" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:10335px; top:-28.07369049073671px;" id="diamond99" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:30265px; top:17.227568796404924px;" id="diamond100" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:6322px; top:11.543142432785316px;" id="diamond101" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:18952px; top:-48.68646325837604px;" id="diamond102" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:12863px; top:-32.73555964044961px;" id="diamond103" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:29510px; top:26.096731643004517px;" id="diamond104" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:34451px; top:-80.18188952099172px;" id="diamond105" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:13228px; top:-0.4459237444496722px;" id="diamond106" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:26572px; top:-21.408295834729486px;" id="diamond107" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:35701px; top:-74.97227299116119px;" id="diamond108" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:17348px; top:-55.8817265602436px;" id="diamond109" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:31563px; top:-20.53398071516827px;" id="diamond110" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:13318px; top:12.55466911420747px;" id="diamond111" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:20192px; top:-3.9053949588437717px;" id="diamond112" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:6370px; top:39.588686519960135px;" id="diamond113" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:29558px; top:32.339692703777104px;" id="diamond114" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:34871px; top:0.714112275947727px;" id="diamond115" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:10269px; top:-73.22577768491172px;" id="diamond116" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:7070px; top:-45.50922303004145px;" id="diamond117" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:28955px; top:-96.18244537724559px;" id="diamond118" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:9363px; top:-91.31721626071774px;" id="diamond119" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:33860px; top:-88.46467940942061px;" id="diamond120" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:30087px; top:28.71100987378469px;" id="diamond121" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:2759px; top:29.412114964969334px;" id="diamond122" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:34237px; top:-49.187071014432426px;" id="diamond123" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:3988px; top:31.07225920816171px;"
                    id="diamond124" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:25887px; top:-29.65292394437266px;" id="diamond125" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:24891px; top:-98.54521400430016px;" id="diamond126" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:15029px; top:-48.478680981885645px;" id="diamond127" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:10290px; top:27.849866881498357px;" id="diamond128" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:13909px; top:13.264218801538192px;" id="diamond129" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:9251px; top:-41.37498430850863px;" id="diamond130" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:29705px; top:14.964937537384458px;" id="diamond131" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:34265px; top:-26.463008474867564px;" id="diamond132" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:23978px; top:8.969245452212206px;" id="diamond133" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:11968px; top:-29.255090861145092px;" id="diamond134" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:27790px; top:-66.30391917401158px;" id="diamond135" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:36674px; top:-26.33327662341884px;" id="diamond136" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:14946px; top:-27.273051520112034px;" id="diamond137" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:12046px; top:-0.49230599848674217px;" id="diamond138" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:11651px; top:21.442971657753134px;" id="diamond139" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:15691px; top:-21.031368902599738px;" id="diamond140" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:21960px; top:-69.96173844892401px;" id="diamond141" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:15658px; top:-90.26189231161334px;" id="diamond142" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:19504px; top:-36.794507143480985px;" id="diamond143" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:15480px; top:11.851286604726582px;" id="diamond144" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:4800px; top:-28.441461435832807px;" id="diamond145" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:26879px; top:-96.81891421862767px;" id="diamond146" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:29433px; top:-34.44983453301299px;" id="diamond147" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:23776px; top:-12.153358031318874px;" id="diamond148" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:18269px; top:-63.12157103429601px;" id="diamond149" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:5851px; top:-97.53503448154513px;" id="diamond150" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:15713px; top:16.152261780030656px;" id="diamond151" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:5089px; top:-87.6654448678403px;"
                    id="diamond152" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:12257px; top:32.72178588075852px;" id="diamond153" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:26075px; top:-24.780937539724775px;" id="diamond154" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:18831px; top:20.319655402469323px;" id="diamond155" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:24376px; top:-40.960139148356085px;" id="diamond156" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:31429px; top:6.095625561731083px;" id="diamond157" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:35792px; top:-74.43719672341709px;" id="diamond158" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:7289px; top:-55.323085302846px;"
                    id="diamond159" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:4593px; top:36.89638514856239px;"
                    id="diamond160" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:8541px; top:13.218080516466173px;" id="diamond161" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:35416px; top:-62.8956990294074px;" id="diamond162" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:34857px; top:-0.8489785564599686px;" id="diamond163" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:10497px; top:-44.82995481758672px;" id="diamond164" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:12320px; top:15.387133241061818px;" id="diamond165" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:6764px; top:-57.882345285744236px;" id="diamond166" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:9553px; top:-88.9329648947219px;"
                    id="diamond167" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:23503px; top:-82.60276386284956px;" id="diamond168" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:5495px; top:-72.6937447140875px;"
                    id="diamond169" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:2676px; top:16.248604772421217px;" id="diamond170" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:13732px; top:32.17366784379786px;" id="diamond171" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:15098px; top:-23.694722490886875px;" id="diamond172" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:17929px; top:-63.32759524379851px;" id="diamond173" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:27088px; top:-84.62181763667023px;" id="diamond174" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:2905px; top:-39.07525575288578px;" id="diamond175" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:34953px; top:-76.85356153247992px;" id="diamond176" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:6137px; top:-66.94688767566272px;" id="diamond177" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:27003px; top:-59.591057050245105px;" id="diamond178" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:12592px; top:31.02150826216092px;" id="diamond179" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:17056px; top:31.319541880840944px;" id="diamond180" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:37571px; top:29.16934860941376px;" id="diamond181" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:24143px; top:-57.468304086910706px;" id="diamond182" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:18464px; top:31.68850549299583px;" id="diamond183" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:3331px; top:-36.46449444068425px;" id="diamond184" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:22183px; top:-19.540935720388106px;" id="diamond185" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:35762px; top:-16.31297303388459px;" id="diamond186" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:10374px; top:-97.92812313999302px;" id="diamond187" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:12827px; top:14.473815428671344px;" id="diamond188" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:28298px; top:-27.770228833403493px;" id="diamond189" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:35628px; top:39.37474781262583px;" id="diamond190" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:29361px; top:32.38930560503525px;" id="diamond191" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:17377px; top:-81.50988989553963px;" id="diamond192" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:32790px; top:-12.286572195467073px;" id="diamond193" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:29524px; top:-5.510560419136084px;" id="diamond194" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:37006px; top:-9.040228392795981px;" id="diamond195" />
                <img src="images/coin/dim.png" class="" style="position:absolute; left:33684px; top:30.7176136844125px;"
                    id="diamond196" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:10189px; top:-97.08959153557025px;" id="diamond197" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:9294px; top:-83.35889496905097px;" id="diamond198" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:14680px; top:9.712988090165808px;" id="diamond199" />
                <img src="images/coin/dim.png" class=""
                    style="position:absolute; left:9581px; top:-23.948708548299138px;" id="diamond200" />

                <img src="images/flag.gif" id="flag" style="position:absolute; left:3000px; bottom: 100px;" />

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


            <div class="snowman" style="left:1000px;"></div>
            <div class="snowman" style="left:2000px;"></div>
            <div class="snowman" style="left:4000px;"></div>
            <div class="snowman" style="left:6000px;"></div>
            <div class="snowman" style="left:9000px;"></div>
            <div class="snowman" style="left:11000px;"></div>

            <div class="snowman" style="left:13000px;"></div>
            <div class="snowman" style="left:16000px;"></div>
            <div class="snowman" style="left:18000px;"></div>
            <div class="snowman" style="left:22000px;"></div>
            <div class="snowman" style="left:24000px;"></div>
            <div class="snowman" style="left:26000px;"></div>
            <div class="snowman" style="left:28000px;"></div>
            <div class="snowman" style="left:30000px;"></div>
            <div class="snowman" style="left:32000px;"></div>


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
                <a href="level-3.php"
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

<script type="text/javascript" src="js/level-3/script-2.js"></script>
<script type="text/javascript" src="js/level-3/timer-ticker-script.js"></script>



</html>