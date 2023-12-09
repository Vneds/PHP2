<?php 
    namespace app\admin\controllers;
    class log_out{
        function log_uot(){
            session_start();
            session_destroy();    
            header('location: ../index.php?page=index');
        }
    }
?>