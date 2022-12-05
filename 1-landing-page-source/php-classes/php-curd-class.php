<?php 
    
    class DatabaseCURD{
        
        private $servername = "localhost";
        private $username = "root";
        private $password = "";
        private $dbname = "escape-the-village";

        public function __construct(){
            $this->DatabaseConnection = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        }

        public function SelectQuery($query){
            
            $result = $this->DatabaseConnection->query($query);

            return $result;
            
        }

        public function InsertQuery($query){

            if ($this->DatabaseConnection->query($query) === TRUE) {
            
                return "[SUCCESS]";
            
            } else {

                return "[FAILED]";
           
            } 
        }

        

       
    }
    
?>