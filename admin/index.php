<?php 
    define('ROOT', __DIR__);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once './core/Route.php';
        // include_once  ROOT  .'/controllers/bookAminController.php';
        use app\admin\core\Route;
        $router = new Route();
        $router
            ->get('/', [app\admin\controllers\HomeAdminController::class, 'index'])
            ->get('/product', [app\admin\controllers\BookAdminController::class, 'index'])
            ->post('/product', [app\admin\controllers\BookAdminController::class, 'post'])

            ->get('/catergory', [app\admin\controllers\CatergoryAdminController::class, 'index'])
            ->post('/catergory', [app\admin\controllers\CatergoryAdminController::class, 'post'])

            ->get('/user', [app\admin\controllers\UserAdminController::class, 'index'])
            ->post('/user', [app\admin\controllers\UserAdminController::class, 'post'])

            ->get('/bill', [app\admin\controllers\BillAdminController::class, 'index'])
            ->get('/logout', [app\admin\controllers\LoginAdminController::class, 'log_out'])

            ->post('/bill', [app\admin\controllers\BillAdminController::class, 'post']);

        try {
            $router->resolve($_SERVER['REQUEST_URI'], strtolower($_SERVER['REQUEST_METHOD']));
        } catch (Exception $a) {
            
        }
    ?>
</body>
</html>
