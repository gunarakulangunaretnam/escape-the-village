<?php

include '../php-classes/php-curd-class.php';
include '../php-classes/php-email-class.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];


$dataObj = new DatabaseCURD();

$emailObj = new EmailClass();


if($password == $confirm_password){

    if(strlen($confirm_password) < 8){

        header("Location: ../login-register.php?pagetype=signup&ServerMessage=PasswordLimitFailed");
        
    }else{

        $data = $dataObj->SelectQuery("SELECT email FROM user_accounts WHERE email = '$email'");

        if ($data->num_rows > 0) {

            header("Location: ../login-register.php?pagetype=signup&ServerMessage=AlreadyExistEmail");
        
        }else{

            $OTP_Number = rand(11111,99999);

            $emailStatus = $emailObj->registerationOTPSender($email, $OTP_Number);
    
            if($emailStatus == "[EMAIL_SENT]"){
            
                $Query = "INSERT INTO user_accounts VALUES('','$name','$email','$confirm_password','$OTP_Number','[FALSE]')";
                $returnData = $dataObj->InsertQuery($Query);
        
                if($returnData == "[SUCCESS]"){
        
                    header("Location: ../login-register.php?pagetype=signin&ServerMessage=DataSccuess");
                    
                }else if($returnData == "[FAILED]"){
        
                    header("Location: ../login-register.php?pagetype=signin&ServerMessage=DataFailed");
                }
            
            }else if ($emailStatus == "[EMAIL_FAILED]"){

                header("Location: ../login-register.php?pagetype=signin&ServerMessage=EmailFaliled");
            }
            
        }

    }
}else{
    
    header("Location: ../login-register.php?pagetype=signup&ServerMessage=ConfirmPasswordDoesNotMatch");
    
}




?>