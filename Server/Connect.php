<?php
class Connect{
    private $conn;
    public function MyConnect(){
        $Servername="localhost";
        $Username="root";
        $Password="az0919086902@";
        $this->conn = new PDO("mysql:host=$Servername;dbname=login", $Username,$Password);
        return $this->conn;
    }
}
?>