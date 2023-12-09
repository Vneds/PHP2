<?php 
namespace app\controller;
session_start();
use app\model\productModel;
// use app\model\catergoryModel;
class productController extends Controller{
    public function product_model(){
        // $this->model('catergory_model');
        $this->model('product_model');
        // $catergory_list = new catergoryModel();
        $product_list = new productModel(); 
        $this->view('shop',[$product_list->get_product_list(),$product_list->get_catergory_list()]);
    }

    public function product_index(){
        $this->model('product_model');
        $product_index = new productModel(); 
        $this->view('details',$product_index->get_product_with_ID($_GET['id']));
    }
}
?>