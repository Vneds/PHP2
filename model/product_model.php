<?php 
    namespace app\model;
    include './core/Database.php';
    use app\Core\Database;
    class productModel extends Database{
        function get_product_list(){
        $query = 'SELECT * FROM book';
            return $this->fetchAll($query);
        }

        function get_catergory_list(){
            $query = 'SELECT * FROM book_catergory';
            return $this->fetchAll($query);
        }

        function get_product_with_ID($id){
            $query =  "SELECT * FROM book WHERE id = '$id' ";
            return $this->fetch($query,[$id]);
        }
        
        function get_image_path($image_name){
            $image_path = "view/img/shop/" . $image_name;
            return $image_path;
        }
    }

?>