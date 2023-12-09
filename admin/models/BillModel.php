<?php 
    namespace app\admin\models;
    require '../admin/core/Database.php';
    use app\admin\core\Database;
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }
    class BillModel extends Database {

        public function add_bill($args){
            $query = 'INSERT INTO bill
                    (user_name , address , phone,  total_money, user_id) 
                    VALUES (?,?,?,?,?)';
            $this->query($query, $args);
        }

        public function add_bill_detail($book_id, $quantity){
            $query = 'INSERT INTO bill_detail
                    (bill_id, book_id, quantity) 
                    VALUES (?,?,?)';

            $id = $this->get_current_bill_ID();
            return $this->query($query, [$id['ID'], $book_id, $quantity]);
        }

        public function get_bill_detail($id){
            $query = 'SELECT * FROM bill JOIN bill_detail ON bill_detail.bill_id = bill.ID WHERE bill.ID = ? ';
            return $this->fetch($query, [$id]);
        }

        public function get_bill_list(){
            $query = 'SELECT * FROM bill';
            return $this->fetch_all($query);
        }

        public function get_bill_info($id){
            $query = 'SELECT * FROM book JOIN bill_detail 
            ON book.ID = bill_detail.book_id JOIN bill 
            ON bill.ID = bill_detail.bill_id WHERE bill_id = ? ';
            return $this->fetch_all($query, [$id]);
        }

        function get_current_bill_ID(){
            $query = 'SELECT ID from bill order by id desc';
            return $this->fetch($query);
        }

        function update_bill_status($status , $id){
            $query = 'UPDATE bill set status = ? WHERE ID = ?';
            $this->query($query, [$status, $id]);
        }

    }

?>