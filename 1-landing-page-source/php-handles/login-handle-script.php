<?php

include '../php-classes/php-curd-class.php';
include '../php-classes/php-email-class.php';
include '../php-classes/php-other-classes.php';

$email = $_POST['email'];
$password = $_POST['password'];


$dataObj = new DatabaseCURD();
$emailObj = new EmailClass();

$data = $dataObj->SelectQuery("SELECT * FROM user_accounts WHERE email = '$email'");


if ($data->num_rows > 0) {
    
    $passwordFromServer = "";
    $activatedStatus = "";

    while($row = $data->fetch_assoc()) {
      
        $passwordFromServer = $row["password"];
        $activatedStatus = $row["activated_status"];
    }

   
    if($passwordFromServer == $password){

        if($activatedStatus == "[FALSE]"){

            $OTP_Number = rand(11111,99999);

            $emailStatus = $emailObj->registerationOTPSender($email, $OTP_Number);
    
            if($emailStatus == "[EMAIL_SENT]"){

                $Query2 = "UPDATE user_accounts SET otp_number='$OTP_Number' WHERE email='$email'";
                $returnData = $dataObj->UpdateQuery($Query2);

                header("Location: ../activate-page.php?emailid=$email");

                
            }else if ($emailStatus == "[EMAIL_FAILED]"){

                header("Location: ../login-register.php?pagetype=signin&ServerMessage=EmailFaliled");
            }
            
        }else if($activatedStatus == "[TRUE]"){ 
              
            $sessionObj = new OtherClasses();
            $sessionObj->createSessionForLogin($email);
            header("Location: ../../2-game-source/index.php");
        }
        
    }else{
        header("Location: ../login-register.php?pagetype=signin&ServerMessage=EmailDoesNotExist");
        
    }

}else{

    header("Location: ../login-register.php?pagetype=signin&ServerMessage=EmailDoesNotExist");
}

?>