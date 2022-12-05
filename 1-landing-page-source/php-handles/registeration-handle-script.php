<?php

include '../php-classes/php-curd-class.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];


$dataObj = new DatabaseCURD();
$data = $dataObj->SelectQuery("SELECT email FROM user_accounts WHERE email = '$email'");

if ($data->num_rows > 0) {

    header("Location: ../login-register.php?pagetype=signup&ServerMessage=AlreadyExistEmail");
    
}else{

    if($password == $confirm_password){

        
        
    }else{
        
        header("Location: ../login-register.php?pagetype=signup&ServerMessage=ConfirmPasswordDoesNotMatch");
        
    }
    
}


?>