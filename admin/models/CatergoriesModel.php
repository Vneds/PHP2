<?php 
    namespace app\admin\models;
    require_once '../admin/core/Database.php';
    use app\admin\core\Database;
    class CatergoriesModel extends Database {
        
        public function get_all_catergories() {
            $query = 'SELECT * FROM book_catergory';
            return  $this->fetch_all($query);
        }

        public function add_catergory($catergory_name){
            $query = "INSERT INTO book_catergory (catergory_name) VALUES (?)";
            $this->query($query, [$catergory_name]);
        }

        public function get_catergory_with_ID($id){
            $query = 'SELECT * from book_catergory WHERE ID = ? ';
            return $this->fetch_with_ID($query, $id);
        }

        public function delete_catergory($id){
            $query = 'DELETE from book_catergory WHERE ID = ? ';
            $this->query($query, [$id]);
        }

        public function update_catergory( $catergory_name , $id){
            $query = 'UPDATE book_catergory SET catergory_name = ? WHERE ID = ' . $id;
            $this->query($query, [$catergory_name]);
        }

        // public function get_book_with_ID($id){
        //     $query = 'SELECT * FROM book JOIN book_detail ON book.ID = book_detail.ID WHERE book.ID = ? ';
        //     return $this->fetch_with_ID($query, $id);
        // }
    }

?>