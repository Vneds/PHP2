<?php 
    namespace app\models;
    use app\core\Database;
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }
    class CartModel extends Database {
        
        public function get_book_with_ID($id){
            $query = 'SELECT book.ID, catergory_name, book_name, book_price, stock,  book.thumnail , pages, book_author , publisher, book_cover FROM book JOIN book_detail ON book.ID = book_detail.ID JOIN book_catergory ON book_catergory.ID = book.catergory_id WHERE book.ID = ?';
            // return $this->fetch_with_ID($query, $id);
        }

        function add_book_to_cart(){
            $book = $this->get_book_with_ID($_GET['id']);
            if (empty($_SESSION['cart'])) {
                $_SESSION['cart'] = [];
            }

            $card = [
                'book_name' => $book['book_name'],
                'book_price' => $book['book_price'],
                'thumbnail' => $book['thumnail'],
                'quantity' => $_GET['quantity'],
                'book_id' => $book[0],
                'stock' => $book['stock'],
                'catergory_name' => $book['catergory_name'],
            ];
            array_push($_SESSION['cart'], $card);
        }

        function remove_book_from_cart(){
            unset($_SESSION["cart"][$_GET["index"]]);
            $_SESSION["cart"] = array_values($_SESSION["cart"]);
        }
    }

?>