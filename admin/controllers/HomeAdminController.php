<?php
    namespace app\admin\controllers;
    require '../admin/controllers/BaseAdminController.php';
    use app\admin\controllers\BaseController;
    class HomeAdminController extends BaseController {
        public function index(){
            $this->view('index');
        }

    }

?>