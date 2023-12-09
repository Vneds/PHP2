<?php
    namespace app\admin\core; 
    use Exception;
    use PDO;
    class Database {
        private $conn = '';
        public function __construct(){
            $host= 'localhost';
            $dbName = 'php2';
            $userName = 'root';
            $password = '123456';

            try {
                // Kết nối
                $this->conn = new PDO("mysql:host=$host;dbname=$dbName", $userName, $password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch (Exception $e) {
                echo "Kết nối thất bại: " . $e->getMessage();
            }
            return $this->conn;
        }

       

        public function fetch_all($sql, $args = null){
            $stmt = $this->conn->prepare($sql);
            $args ?  $stmt->execute($args) :  $stmt->execute();
            return $stmt->fetchAll();
        }

        public function query($sql, $args = null){
            $stmt = $this->conn->prepare($sql);
            
            if (isset($args)) {
                $stmt->execute($args);
                return;
            }
            $stmt->execute();
        }

        public function fetch_with_ID($sql, $ID){
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$ID]);
            return $stmt->fetch();
        }

        public function fetch($sql, $args = null){
            $stmt = $this->conn->prepare($sql);
            $args ?  $stmt->execute($args) :  $stmt->execute();
            return $stmt->fetch();
        }

        public function get_last_insertID(){
            return $this->conn->lastInsertId();
        }
}
?>