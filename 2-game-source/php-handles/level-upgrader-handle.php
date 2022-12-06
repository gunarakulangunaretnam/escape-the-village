<?php

include '../../1-landing-page-source/php-classes/php-curd-class.php';

session_start();

if (!isset($_SESSION['SESSION_EXISTS']))
{
    header("Location: ../../1-landing-page-source/index.php");
    die();
}else{


    $totalScoreFromServer = "";
    $LevelNoFromServer = "";

    $levelNoFromLevel = $_GET['level'];
    $totalScoreFromLevel = $_GET['total_score'];

    $EmailID = $_SESSION['SESSION_VALUE'];

    $dataObj = new DatabaseCURD();
    $data = $dataObj->SelectQuery("SELECT * FROM game_data WHERE email = '$EmailID'");


    if ($data->num_rows > 0) {

        while($row = $data->fetch_assoc()) {

            $totalScoreFromServer = $row["total_scores"];
            $LevelNoFromServer = $row["finished_levels"];
        }

        $totalScorePlaceHolder = intval($totalScoreFromServer) + intval($totalScoreFromLevel);

        if(intval($LevelNoFromServer) == 6 && intval($LevelNoFromServer) == 7){

            $Query = "UPDATE game_data SET total_scores='$totalScorePlaceHolder' WHERE email='$EmailID'";
            $returnData = $dataObj->UpdateQuery($Query);

            header("Location: ../game-menu-start-game.php");

        }else{

            if(intval($LevelNoFromServer) < intval($LevelNoFromServer)){

                $newlevel = intval($LevelNoFromServer) + 1;

                $Query = "UPDATE game_data SET total_scores='$totalScorePlaceHolder', finished_levels = '$newlevel' WHERE email='$EmailID'";
                $returnData = $dataObj->UpdateQuery($Query);

                header("Location: ../level-$newlevel.php");            

            }else{

                $Query = "UPDATE game_data SET total_scores='$totalScorePlaceHolder' WHERE email='$EmailID'";
                $returnData = $dataObj->UpdateQuery($Query);

                header("Location: ../level-$levelNoFromLevel.php");
                
            }

        }
        
    }else{

        header("Location: ../../1-landing-page-source/index.php");
        die();
        
    }

}




?>