<?php
    class Connect{
        
        public function connect(){

            $this->host = "localhost:3306";
            $this->username = "topupcom_admin";
            $this->password = "asaoluelijah7@gmail.com";
            $this->dbName = "topupcom_9jatopup";
            $connection = new mysqli($this->host,$this->username,$this->password,$this->dbName);
            return $connection;
            
        }
    }
?>