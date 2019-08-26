<?php 
class Database{
    private $host = 'localhost';
    private $db_name = 'intern_manager';
    private $username = 'root';
    private $password = 'toor';
    public $conn ;
    public function getConnection(){
        $this->conn = null;
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");

        }catch(PDOException $e){
            echo "Connection Error : " . $e->getMessage();
         }
         return $this->conn;
    }
}