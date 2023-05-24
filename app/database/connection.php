<?php
namespace app\database;

class Connection{
    public $db_params;

    function __construct(){
        
        $this->db_params = require('C:\xampp\htdocs\darrebni\project2\config\database.php');

    }

    function getConnection(){
        $conn = mysqli_connect($this->db_params['servername'],$this->db_params['username'],$this->db_params['password'],$this->db_params['dbname']);
        if($conn->connect_error){
            die("Connection faild: " . $conn->connect_error);
        }
        return $conn;
    }

}