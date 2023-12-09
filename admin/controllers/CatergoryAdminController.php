<?php
    namespace app\admin\controllers;
    require '../admin/controllers/BaseAdminController.php';
    require '../admin/models/CatergoriesModel.php';

    use app\admin\controllers\BaseController;
    use app\admin\models\CatergoriesModel;

    class CatergoryAdminController extends BaseController {
        public function index(){
            $action = $_GET['action'];
            $page = substr($_GET['page'], 1);

            switch($action) {
                case 'list':
                    $catergory = new CatergoriesModel();
                    $this->view( 'pages/' . $page . '/' . $action  ,  $catergory->get_all_catergories());
                    break;
                case 'add':
                    $this->view( 'pages/' . $page . '/' . $action);
                    break;
                case 'edit':
                    // $catergory->get_catergory_with_ID($_GET['id'])
                    $catergory = new CatergoriesModel();
                    $this->view( 'pages/' . $page . '/' . $action  , $catergory->get_catergory_with_ID($_GET['id']));
                    break;
                case 'delete':
                    $catergory = new CatergoriesModel();
                    $catergory->delete_catergory($_GET['id']);
                    header('Location: ?page=/catergory&action=list');
                    break;
            }
        }

        public function add_book(){
            $catergory = new CatergoriesModel();
            $catergory->add_catergory($_POST['catergory_name']);
            header('Location: ?page=/catergory&action=list');
        }


        public function post(){
            $action = $_GET['action'];
            switch($action) {
                case 'add':
                    $catergory = new CatergoriesModel();
                    $catergory->add_catergory($_POST['catergory_name']);
                    header('Location: ?page=/catergory&action=list');
                    break;
                case 'edit':
                    $catergory = new CatergoriesModel();
                    $catergory->update_catergory($_POST['catergory_name'] ,$_GET['id']);
                    header('Location: ?page=/catergory&action=list');
                    break;
                case 'edit':
                    $catergory = new CatergoriesModel();
                    $catergory->delete_catergory($_GET['id']);
                    header('Location: ?page=/book&action=list');
                    break;
            }
        }

    }

?>