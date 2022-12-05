<?php 

    
    class OtherClasses{

        public function __construct(){
            
        }

        public function createSessionForLogin($emailID){

            session_start();
            $_SESSION["SESSION_EXISTS"]= "[TRUE]";
            $_SESSION["SESSION_VALUE"]= "$emailID";
            
        }

        public function destorySessions(){

            session_destroy();
            unset($_SESSION['SESSION_EXISTS']); 
            unset($_SESSION['SESSION_VALUE']); 
            
        }


    }

?>