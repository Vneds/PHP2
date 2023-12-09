<?php
    namespace app\admin\controllers;
    require '../admin/controllers/BaseAdminController.php';
    require '../admin/models/BillModel.php';

    use app\admin\controllers\BaseController;
    use app\admin\models\BillModel;
    class BillAdminController extends BaseController {
        public function index(){
            $action = $_GET['action'];
            $page = substr($_GET['page'], 1);

            switch($action) {
                case 'list':
                    $bill = new BillModel();
                    $this->view( 'pages/' . $page . '/' . $action , $bill->get_bill_list());
                    break;
                case 'edit':
                    $bill = new BillModel();
                    $this->view( 'pages/' . $page . '/' . $action  ,  [$bill->get_bill_detail($_GET['id']), $bill->get_bill_info($_GET['id'])]);
                    break;
            }
        }

        public function post(){
            $action = $_GET['action'];
            switch($action) {
                case 'edit':
                    $bill = new BillModel();
                    $bill->update_bill_status($_POST['status'], $_GET['id']);
                    header('Location: ?page=/bill&action=list');
                    break;
            }
        }

    }

?>