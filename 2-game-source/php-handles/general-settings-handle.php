<?php

include '../../1-landing-page-source/php-classes/php-curd-class.php';

session_start();

if (!isset($_SESSION['SESSION_EXISTS']))
{
    header("Location: ../../1-landing-page-source/index.php");
    die();

}else{

    
    $dataObj = new DatabaseCURD();

    $currentUser = $_SESSION['SESSION_VALUE'];
    $name = $_POST['name'];

    $Query = "UPDATE user_accounts SET name='$name' WHERE email='$currentUser'";
    $returnData = $dataObj->UpdateQuery($Query);

    if($returnData == "[SUCCESS]"){

        header("Location: ../game-menu-settings.php?ServerMessage=NameUpdated");
    
    }else if($returnData == "[FAILED]"){

        header("Location: ../game-menu-settings.php?ServerMessage=DatabaseError");
    }
}

?>