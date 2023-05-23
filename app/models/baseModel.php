<?php
namespace app\BaseModels;
require_once __DIR__ . '\..\database\connection.php';
use app\database\Connection;

class baseModel{
    public $connection;

    public function __construct(){

        $db = new Connection();
        $this->connection = $db->getConnection();

    }


    public function find($table_name, $search){
        $query = "SELECT * FROM " . $table_name . " WHERE name LIKE '%$search%' OR email LIKE '%$search%'";
        $result = $this->connection->query($query);
        return $result;
    }

     public function delet($table_name, $id){
        $query = "DELETE FROM " . $table_name . " WHERE id = '$id'";
        $result = $this->connection->query($query);
        return $result;
     }
}