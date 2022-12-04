<?php 
    
    class DatabaseCURD{
        
        private $servername = "localhost";
        private $username = "root";
        private $password = "";
        private $dbname = "escape-the-village";

        public function __construct(){
            $this->DatabaseConnection = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        }

        

       
    }
    
?>