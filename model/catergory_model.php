<?php 
    namespace app\model;
    include './core/Database.php';
    use app\Core\Database;
    class catergoryModel extends Database{
        function get_catergory_list(){
            $query = 'SELECT * FROM catergory';
            return $this->fetchAll($query);
        }
    
        function get_catergory_with_ID($catergory_id){
            global $conn;
            $stmt = $conn->prepare('SELECT * FROM catergory WHERE id = ? ');
            $stmt->execute([$catergory_id]);
            return $stmt->fetch();
        }
    
        function get_product_quantity_in_each_catergory($catergory_id){
            $query = 'select count(*) as quantity from product WHERE catergory_id =  ' . $catergory_id . ' GROUP BY catergory_id' ;
            return $this->fetch($query);
        } 
    
        function get_catergory_name($catergory_id){
            global $conn;
            $sql = 'SELECT * FROM catergory WHERE id = ' . $catergory_id;
            $catergory =  $conn->query($sql)->fetch();
            return $catergory['catergory_name']; 
        }    
    }

?>