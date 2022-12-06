<?php

include '../../1-landing-page-source/php-classes/php-curd-class.php';

session_start();

if (!isset($_SESSION['SESSION_EXISTS']))
{
    header("Location: ../../1-landing-page-source/index.php");
    die();

}else{

    $dataObj = new DatabaseCURD();
    $SessionValue = $_SESSION['SESSION_VALUE'];

    $Query = "UPDATE game_data SET finished_levels='1', total_scores='0' WHERE email='$SessionValue'";
    $returnData = $dataObj->UpdateQuery($Query);
    header("Location: ../game-menu-settings.php?ServerMessage=GameReset");
    

}