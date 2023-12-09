<?php
    namespace app\admin\controllers;
    require '../admin/controllers/BaseAdminController.php';
    require '../admin/models/UserModel.php';

    use app\admin\controllers\BaseController;
    use app\admin\models\UserModel;
    class UserAdminController extends BaseController {
        public function index(){
            $action = $_GET['action'];
            $page = substr($_GET['page'], 1);

            switch($action) {
                case 'list':
                    $user = new UserModel();
                    $this->view( 'pages/' . $page . '/' . $action  ,  $user->get_all_user());
                    break;
                case 'add':
                    $user = new UserModel();
                    $this->view( 'pages/' . $page . '/' . $action );
                    break;
                case 'edit':
                    $user = new UserModel();
                    $this->view( 'pages/' . $page . '/' . $action  , $user ->get_user_with_ID($_GET['id']));
                    break;
                case 'delete':
                    $user = new UserModel();
                    $user->delete_user($_GET['id']);
                    header('Location: ?page=/user&action=list');
                    break;
            }
        }


        public function post(){
            $action = $_GET['action'];
            switch($action) {
                case 'add':
                    $user = new UserModel();
                    $user->add_user($_POST['user_name'], $_POST['email'], $_POST['password'], $_POST['role']);
                    header('Location: ?page=/user&action=list');
                    break;
                case 'edit':
                    $user = new UserModel();
                    $user->update_user($_POST['user_name'], $_POST['email'], $_POST['role'] , $_GET['id'] );
                    header('Location: ?page=/user&action=list');
                    break;
            }
        }

    }

?>