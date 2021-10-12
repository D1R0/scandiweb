<?php
    $filedir=realpath(dirname(__FILE__));
    include_once ($filedir."/../config.php");

    
    class Database{
        public $host=DB_HOST;
        public $user=DB_USER;
        public $pass =DB_PASS;
        public $dbname=DB_NAME;

        public $link;
        public $errors;


        public function __construct()
        {
            $this->connectDB();
        }

        public function connectDB(){
            $this->link=new mysqli($this->host,$this->user,$this->pass,$this->dbname);
            
            if(!$this->link){
                $this->error="Connection fail".$this->link->connect_error;
                return false;
            }
        }
        public function get()
        {
            return $this->link;
        }


    }

?>