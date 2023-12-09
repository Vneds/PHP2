<?php 
    namespace app\admin\models;
    require '../admin/core/Database.php';
    use app\admin\core\Database;

    class BookModel extends Database {
        
        public function get_all_book() {
            $query = 'SELECT * FROM book';
            return  $this->fetch_all($query);
        }

        public function get_book_with_ID($id){
            $query = 'SELECT book.ID, catergory_name, book_name, book_price, stock,  book.thumnail , pages, book_author , publisher, book_cover FROM book JOIN book_detail ON book.ID = book_detail.ID JOIN book_catergory ON book_catergory.ID = book.catergory_id WHERE book.ID = ?';
            return $this->fetch_with_ID($query, $id);
        }

        public function get_limit_book($limit){
            $query = 'SELECT * FROM book LIMIT ' . $limit;
            return  $this->fetch_all($query);
        }

        public function add_book($book_name, $book_price, $thumnail, $stock, $catergory_id){
            $query = 'INSERT INTO book(book_name,book_price, thumnail,  stock, catergory_id) VALUES (?,?,?,?,?)';
            $this->query($query, [$book_name, $book_price, $thumnail, $stock, $catergory_id]);
        }

        public function add_book_detail($book_author, $pages, $publisher, $book_cover){
            $query = 'INSERT INTO book_detail(book_author, pages, publisher, book_cover) VALUES (?,?,?,?)';
            $this->query($query, [$book_author, $pages, $publisher, $book_cover]);
        }

        public function update_book($book_name, $book_price, $thumnail,  $stock, $id){
            $query = 'UPDATE book SET book_name = ? , book_price = ?  , thumnail = ? , stock = ? WHERE id = ' . $id;
            $this->query($query, [$book_name, $book_price, $thumnail ,$stock]);
        }

        public function update_book_detail($book_author, $pages, $publisher, $book_cover, $id){
            $query = 'UPDATE book_detail SET book_author= ? ,pages= ? , publisher = ? , book_cover = ?  WHERE ID = ' . $id;
            $this->query($query, [$book_author, $pages, $publisher, $book_cover]);
        }

        public function delete_book($id){
            $query = 'DELETE FROM book WHERE ID = ' . $id;
            $this->query($query);
        }

        public function get_file_path($id){
            $query = 'SELECT * FROM book WHERE ID = ' . $id;
            $book = $this->fetch($query);
            return $book['thumnail'];
        }
    }

?>