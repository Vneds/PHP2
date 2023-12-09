<?php 
namespace app\controller;

use app\model\signModel;

class HomeController extends Controller{
    // view
    public function index(){
        $this->view('index');
    }

    public function shop(){
        $this->view('shop');
    }

    public function details(){
        $this->view('details');
    }

    public function cart(){
        $this->view('cart');
    }

    public function checkout(){
        $this->view('checkout');
    }

    public function contact(){
        $this->view('contact');
    }

    public function blog(){
        $this->view('blog');
    }

    public function blog_details(){
        $this->view('blog_details');
    }

    public function login(){
        $this->view('login');
    }

    public function sign(){
        $this->view('sign');
    }

    // model
    
    


}
?>