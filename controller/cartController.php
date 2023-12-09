<?php 
namespace app\controller;
use app\model\cartModel;
session_start();
class cartController extends Controller{
    public function cart_add(){
        $this->model("cart_model");
        $cart = new cartModel();
        $cart->add_product_to_cart();
    }

    public function cart_delete(){
        $this->model("cart_model");
        $cart = new cartModel();
        $cart->remove_product_from_cart(); 
    }


}
?>