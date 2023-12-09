<?php 
namespace app\controller;
use app\model\signModel;
class signController extends Controller{
    public function sign_model(){
        $this->model('sign_model');
        $login_modal = new signModel();
        $password = password_hash($_POST['pass'], PASSWORD_BCRYPT);
        $login_modal->add_user($_POST['user'], $_POST['email'], $password);
        header('Location: ?page=/login');
    }


    public function login_model(){
        $this->model('sign_model');
        $login = new signModel();
        $login->login($_POST['email'], $_POST['pass']);
    }

    public function logout_model(){
        $this->model('sign_model');
        $logout = new signModel();
        $logout->logout();
    }


}
?>