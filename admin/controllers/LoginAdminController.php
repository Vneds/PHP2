<?php 
    namespace app\admin\controllers;
    require '../admin/controllers/BaseAdminController.php';
    session_start();
    use app\admin\models\UserModel;
    class LoginAdminController extends BaseController{

        public function index(){
            include_once ROOT. "/views/Login_v15/index.php";
        }

        public function show_register(){
            include_once ROOT. "/views/Login_v15/register.php";
        }

        public function login(){
            $this->model('UserModel');
            $login_modal = new UserModel();
            $user = $login_modal->get_user($_POST['email']);


            if (!$user) {
                header('Location: ?page=/login&error=Tên đăng nhập hoặc mật khẩu sai');
                return;
            }

            if (!password_verify($_POST['password'], $user['pass_word'])){
                header('Location: ?page=/login&error=Tên đăng nhập hoặc mật khẩu sai');
            }

            $this->save_user_in_session($user);
            
            if ($user['role'] == '0') {
                header('Location: ?page=/');
                return;
            }
            header('Location: http://localhost:8012/bookstore/admin?page=/');
        }
      
        public function save_user_in_session($user){
            $_SESSION['user']['user_name'] = $user['user_name']; 
            $_SESSION['user']['avatar'] = $user['avatar']; 
            $_SESSION['user']['id'] = $user['ID']; 
        }

        public function log_out(){
            session_destroy();
            header('Location: http://localhost/php2/viet/?page=/index');
        }

    }

?>