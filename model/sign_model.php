<?php
    namespace app\model;
    session_start();
    include './core/Database.php';
    use app\Core\Database;
    class signModel extends Database{
        public function add_user($user, $email, $pass){
            $query = "INSERT INTO user(user_name, email, pass_word) VALUES (?,?,?)";
            $this->query($query,[$user, $email, $pass]);
        }

        public function login(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $kq = $this->getuser($email,$pass);
                if (!$kq){
                    header('location: ?page=/index');
                }
        
                $_SESSION['user'] = [
                    'role' => $kq['role'],
                    'iduser' => $kq['ID'],
                    'user_name' => $kq['user_name'],
                    'email' => $kq['email'],
                    'img' => $kq['avatar']
                ];
        
                if( $_SESSION['user']['role'] == 1){
                    header('location: http://localhost/php2/viet/admin?page=/');
                    die();
                }
                header('location: ?page=/index');
                
                die();
            }
        }

        function getuser($email,$pass){
            $query = "SELECT * FROM user WHERE email='{$email}'";
            $kq = $this->fetch($query);
            if(password_verify($pass,$kq['pass_word'])){ 
                return $kq;
            }
        }

        public function logout() {
            session_unset();
            session_destroy();
            header("location: ?page=/index");
        }
    }

?>