<?php
namespace app\controller;
class Controller{
    function model($model){
        require_once ROOT ."/model/".$model.".php";
    }
    function view($view, $data=[]){
        require_once ROOT ."/view/".$view.".php";
    }

}


?>