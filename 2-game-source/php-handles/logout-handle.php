<?php

session_start();

if (!isset($_SESSION['SESSION_EXISTS']))
{
    header("Location: ../../1-landing-page-source/index.php");
    die();
}


include '../../1-landing-page-source/php-classes/php-other-classes.php';

if(function_exists($_GET['f'])) {
    $_GET['f']();
}else{

    header("Location: ../../1-landing-page-source/index.php");
 }

function logout(){

    session_start();

    if($_SESSION['SESSION_EXISTS'] == "[TRUE]"){

        $sessionObj = new OtherClasses();
        $sessionObj->destorySessions();
        
        header("Location: ../../1-landing-page-source/index.php");
        
    }else{

        header("Location: ../../1-landing-page-source/index.php");
    }

}

?>