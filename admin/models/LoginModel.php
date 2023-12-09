<?php 
    namespace app\admin\models;
    use app\admin\core\Database;
    class LoginModel extends Database {
        
        public function get_user($email) {
            $query = 'SELECT * from user WHERE email = ? ';
            return  $this->fetch($query, [$email]);
        }

        public function add_user($user_name, $email, $password){
            $query = "INSERT INTO user(user_name, email, pass_word) VALUES (?,?,?)";
            $this->query($query, [$user_name, $email , $password]);
        }

    }

?>