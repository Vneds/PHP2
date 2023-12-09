<?php 
    namespace app\model;
    include './core/Database.php';
    use app\Core\Database;
    class cartModel extends Database{
        function add_product_to_cart(){
            $product = $this->get_ID($_GET['id']);
            if (empty($_SESSION['cart'])) {
                $_SESSION['cart'] = [];
            }

            if ($this->is_exist_in_cart($product['ID'])){
                $this->increase_product_quantity($product['ID'], $_GET['quantity'], $product['quantity']);
                header('location: ?page=/cart');
                return;
            }
        
            $card = [
                'book_name' => $product['book_name'],
                'book_price' => $product['book_price'],
                'thumnail' => $product['thumnail'],
                'quantity' => $_GET['quantity'],
                'book_id' => $product['ID'],
                'stocks' => $product['stock'],
            ];
            array_push($_SESSION['cart'], $card); 
            header ('location: ?page=/cart');
        }
        function get_ID($id){
            $query =  "SELECT * FROM book WHERE id = '$id' ";
            return $this->fetch($query,[$id]);
        }

        function remove_product_from_cart(){
            unset($_SESSION["cart"][$_GET["index"]]);
            $_SESSION["cart"]= array_values($_SESSION["cart"]);
            header ('location: ?page=/cart');
        }

        function increase_product_quantity($product_id, $quantity, $stocks){
            foreach($_SESSION['cart'] as $product){
                if ($product['book_id'] == $product_id){
                    $key = array_search($product, $_SESSION['cart']);
                    $total_quantity = (int)$quantity  + (int)$product['quantity'];
                    $product['quantity'] = $total_quantity;
                    $_SESSION['cart'][$key] = $product;
                    break;
                }
            }
        }
    
    
        function is_exist_in_cart($product_id){
            foreach($_SESSION['cart'] as $product){
                if ($product['book_id'] == $product_id){
                    return true;
                }
            }
            return false;
        }
}
?>