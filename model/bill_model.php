<?php 
    namespace app\model;
    include './core/Database.php';
    use app\Core\Database;
    class billModel extends Database{
        
        function insert_bill($name, $address, $phone, $user_id, $money){
            $query = "INSERT INTO bill(user_name, address, phone, user_id, total_money) VALUES (?,?,?,?,?)";
            $this->query($query,[$name, $address, $phone, $user_id, $money]);
            echo $this->query($query,[$name, $address, $phone, $user_id, $money]);
        }
    
        function insert_bill_detail(){
            $query = 'INSERT INTO bill_detail(bill_id , product_id, quantity ) VALUES (?,?,?)';
            $bill_id = $this->get_current_bill_ID(['id']);
            foreach($_SESSION['cart'] as $product){
                $this->query($query,[$bill_id, $product['product_id'], $product['quantity']]);
            }
        }
    
        function get_current_bill_ID(){
            $query = 'SELECT id from bill order by id desc';
            return $this->fetch($query);
        }
    
        
        function generate_random_string(){
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $randomString = '';
         
            for ($i = 0; $i < 5; $i++) {
                $index = rand(0, strlen($characters) - 1);
                $randomString .= $characters[$index];
            }
         
            return $randomString;
        }
    
        function get_bill_status($bill_id){
            global $conn;
            $sql = 'SELECT * FROM bill WHERE id = ' . $bill_id;
            $bill =  $conn->query($sql)->fetch();
            return $bill['status'];
        }
    
    


    }
?>