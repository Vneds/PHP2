<?php
    namespace app\admin\controllers;
    class BaseController  {
        function model($model){
            require_once  "../models/". $model .".php";
        }
        function view($view , $data = null){
            require_once ROOT . "/views/" . $view .".php";
        }
    }
?>