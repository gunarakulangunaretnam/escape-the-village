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

    $currentPasswordFromUser = $_POST['currentPassword'];
    $newPasswordFromUser = $_POST['newPassword'];
    $confirmPasswordFromUser = $_POST['confirmPassword'];

    $currentPasswordFromServer = "";

    $data = $dataObj->SelectQuery("SELECT * FROM user_accounts WHERE email = '$SessionValue'");

    if ($data->num_rows > 0) {

        while($row = $data->fetch_assoc()) {

            $currentPasswordFromServer = $row["password"];
        }

        if($newPasswordFromUser == $confirmPasswordFromUser){

            if(strlen($newPasswordFromUser) < 8){

                header("Location: ../game-menu-settings.php?ServerMessage=PasswordLimitWrong");

            }else{

                if($currentPasswordFromUser == $currentPasswordFromServer){

                    
                    $Query = "UPDATE user_accounts SET password='$newPasswordFromUser' WHERE email='$SessionValue'";
                    $returnData = $dataObj->UpdateQuery($Query);
                    header("Location: ../game-menu-settings.php?ServerMessage=PasswordChanged");
                    
                }else{
                    
                    header("Location: ../game-menu-settings.php?ServerMessage=CurrentPasswordWrong");
                    
                }

            }
        }else{

            header("Location: ../game-menu-settings.php?ServerMessage=ComfirmPasswordDoesNotMatch");
        }

    }else{
        
        header("Location: ../../1-landing-page-source/index.php");
        die();
        
    }
    

    
   
}

?>