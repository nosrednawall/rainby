<?php
    //https://www.codeofaninja.com/2014/06/php-object-oriented-crud-example-oop.html
    class Database{
     
        // specify your own database credentials
        private $host = "localhost";
        private $db_name = "aksvi562_hackton";
        private $username = "aksvi562_hackton";
        private $password = "123456";
        public $conn;
     
        // get the database connection
        public function getConnection(){
     
            $this->conn = null;
     
            try{
                $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            }catch(PDOException $exception){
                echo "Connection error: " . $exception->getMessage();
            }
     
            return $this->conn;
        }
    }
       
 
?>