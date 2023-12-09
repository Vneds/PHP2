<?php 
namespace app\controller;
use app\model\billModel;
session_start();
class billController extends Controller{
    public function bill_model(){
        $this->model('bill_model');
        $bill = new billModel();
        $bill->insert_bill($_POST['user_name'], $_POST['address'], $_POST['phone'] ,1, $_SESSION['total_money']);
        unset($_SESSION['cart']);
        header('Location: ?page=/index');

    }
}
?>