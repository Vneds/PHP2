<?php
namespace app\core; 
use PDO;
use PDOException;
class Database {
    private $conn = "";
    private $sql ="";
    public function __construct(){
        $host= 'localhost';
        $dbName = 'php2';
        $userName = 'root';
        $password = '123456';
        

        try {
            // Kết nối
            $this->conn = new PDO("mysql:host=$host;dbname=$dbName", $userName, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Kết nối thành công ";
        } 
        catch (PDOException $e) {
            echo "Kết nối thất bại: " . $e->getMessage();
        }
        return $this->conn;
    }


    function setQuery($sql_input){
        $this->sql =$sql_input;
    }

    function query($sql, $args = null){
        $stmt = $this->conn->prepare($sql);
        if(isset($args)){
            $stmt->execute($args);
            return;
        }
        $stmt->execute();
    }

    function fetch($sql, $argc = null){
        $stmt = $this->conn->prepare($sql);
        if(isset($args)){
            $stmt->execute($args);
            return;
        }
        $stmt->execute();
        return  $stmt->fetch();
    }

    function fetchAll($sql){
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    function insertData(){
        $statement = $this->conn->prepare($this->sql);
        $statement->execute();
        // $sql_args = array_slice(func_get_args(), 1);
        // try{
        //     $stmt = $this->conn->prepare($this->sql);
        //     $stmt->execute($sql_args);     
        // }
        // catch(\Exception $e){
        //     throw $e;
        // }
        // finally{
        //     unset($conn);
        // }
    }
    function updateData(){
        $statement = $this->conn->prepare($this->sql);
        $statement->execute();

    }
    function deleteData(){
        $statement = $this->conn->prepare($this->sql);
        $statement->execute();

    }
    // function lastInsertID(){
    //     return $this->conn->insert_id;
    // }
}
?>