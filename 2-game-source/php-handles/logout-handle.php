<?php

session_start();

if (!isset($_SESSION['SESSION_EXISTS']))
{
    header("Location: ../../1-landing-page-source/login-register.php?pagetype=signin");
    die();
}


include '../../1-landing-page-source/php-classes/php-other-classes.php';

if(function_exists($_GET['f'])) {
    $_GET['f']();
}else{

    header("Location: ../../1-landing-page-source/login-register.php?pagetype=siginin");
 }

function logout(){

    session_start();

    if($_SESSION['SESSION_EXISTS'] == "[TRUE]"){

        $sessionObj = new OtherClasses();
        $sessionObj->destorySessions();
        
        header("Location: ../../1-landing-page-source/login-register.php?pagetype=siginin");
        
    }else{

        echo "no ess";
        header("Location: ../../1-landing-page-source/login-register.php?pagetype=siginin");
    }

}

?>