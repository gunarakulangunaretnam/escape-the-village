<?php

include '../php-classes/php-curd-class.php';
include '../php-classes/php-email-class.php';


$dataObj = new DatabaseCURD();
$emailObj = new EmailClass();

$EmailFromUser = $_POST['email'];
$forgotPassword = "";

$data = $dataObj->SelectQuery("SELECT email, password FROM user_accounts WHERE email = '$EmailFromUser' and activated_status = '[TRUE]'");

if ($data->num_rows > 0) {

    while($row = $data->fetch_assoc()) {

        $forgotPassword = $row["password"];
        
    }

    $emailStatus = $emailObj->sendTheForgotPasswordEmail($EmailFromUser, $forgotPassword);
    if($emailStatus == "[EMAIL_SENT]"){

        header("Location: ../forgot-password.php?pagetype=page2&ServerMessage=FOUND");
    
    }else if ($emailStatus == "[EMAIL_FAILED]"){

        header("Location: ../login-register.php?pagetype=signin&ServerMessage=EmailFaliled");
    }
   


}else{

    header("Location: ../forgot-password.php?pagetype=page2&ServerMessage=NOTFOUND");
}

?>