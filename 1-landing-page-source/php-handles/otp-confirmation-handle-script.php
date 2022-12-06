<?php

include '../php-classes/php-curd-class.php';
include '../php-classes/php-email-class.php';
include '../php-classes/php-other-classes.php';

$dataObj = new DatabaseCURD();

$otpnumberFromUser = $_POST['otpnumber'];
$emailaddressFromUser = $_POST['emailbox'];

$otpnumberFromServer = "";
$activatedStatusFromServer = "";


$data = $dataObj->SelectQuery("SELECT otp_number,activated_status FROM user_accounts WHERE email = '$emailaddressFromUser'");

if ($data->num_rows > 0) {

    while($row = $data->fetch_assoc()) {

        $otpnumberFromServer = $row["otp_number"];
        $activatedStatusFromServer = $row["activated_status"];
    }

    if($activatedStatusFromServer == '[FALSE]'){

        if($otpnumberFromServer == $otpnumberFromUser){

            $Query2 = "UPDATE user_accounts SET activated_status='[TRUE]', otp_number='[VERIFIED]' WHERE email='$emailaddressFromUser'";
            $returnData = $dataObj->UpdateQuery($Query2);

            $Query3 = "INSERT INTO game_data VALUES('','$emailaddressFromUser','1','0')";
            $returnData = $dataObj->InsertQuery($Query3);

            $sessionObj = new OtherClasses();
            $sessionObj->createSessionForLogin($emailaddressFromUser);
            
            header("Location: ../../2-game-source/index.php");
        
        }else{
            header("Location: ../activate-page.php?emailid=$emailaddressFromUser&ServerMessage=OTPWrong");
        }

    }else{

        header("Location: ../login-register.php?pagetype=signin&ServerMessage=RestrictedAccess");
    }

   
    
}else{

    header("Location: ../login-register.php?pagetype=signin&ServerMessage=RestrictedAccess");
    
}



?>