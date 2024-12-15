<?php


namespace classes;

use PDO; 
use PDOException;
class DBConnector {
   private $host="localhost";
    private $db_name="rating";
    private $db_user="root";
    private $db_pass="";
   
    public function getConnection(){
        
        $dsn="mysql:host=".$this->host.";dbname=".$this->db_name;
        try{
            $con = new PDO($dsn, $this->db_user, $this->db_pass);
            return $con;
        }catch(PDOException $e){
            die('Connection lost: '.$e->getMessage());
        }
    }
}
