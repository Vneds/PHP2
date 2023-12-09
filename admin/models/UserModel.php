<?php 
    namespace app\admin\models;
    require '../admin/core/Database.php';
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }
    use app\admin\core\Database;
    class UserModel extends Database{
        public function get_user_with_ID(){
            $query = 'SELECT * FROM user WHERE ID = ?';
            return $this->fetch_with_ID($query, $_GET['id']);
        }

        public function update_user($user_name, $email, $role, $id){
            $query = 'UPDATE user SET user_name = ? , email = ?, role = ? WHERE ID = ?';
            $this->query($query , [$user_name , $email, $role, $id]);
        }

        public function get_user($email) {
            $query = 'SELECT * from user WHERE email = ? ';
            return  $this->fetch($query, [$email]);
        }

        public function add_user($user_name, $email, $password, $role){
            $password_hash = password_hash($password, PASSWORD_BCRYPT);
            $query = "INSERT INTO user(user_name, email, pass_word, role) VALUES (?,?,?,?)";
            $this->query($query, [$user_name, $email , $password_hash, $role]);
        }

        public function get_all_user() {
            $query = 'SELECT * from user ';
            return  $this->fetch_all($query);
        }

        public function delete_user($id){
            $query = 'DELETE FROM user WHERE ID = ?';
            $this->query($query, [$id]);
        }
    }
?>