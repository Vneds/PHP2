<?php
    require 'vendor/autoload.php';
    use app\core\Route as Router;
    define('ROOT',__DIR__);

    
    //bai 3
    $router = new Router();
    $router
    // view
    ->get('/index', [app\controller\HomeController::class, 'index'])
    
    ->get('/shop', [app\controller\productController::class, 'product_model'])

    ->get('/details', [app\controller\productController::class, 'product_index'])

    ->get('/cart', [app\controller\HomeController::class, 'cart'])
    ->get('/cart_add', [app\controller\cartController::class, 'cart_add'])
    ->get('/cart_delete', [app\controller\cartController::class, 'cart_delete'])


    
    ->get('/checkout', [app\controller\HomeController::class, 'checkout'])
    ->post('/bill_model', [app\controller\billController::class, 'bill_model'])

    ->get('/contact', [app\controller\HomeController::class, 'contact'])
    ->get('/blog', [app\controller\HomeController::class, 'blog'])
    ->get('/blog_details', [app\controller\HomeController::class, 'blog_details'])

    ->get('/login', [app\controller\HomeController::class, 'login'])
    ->post('/login_model',[app\controller\signController::class, 'login_model'])
    ->get('/logout', [app\controller\signController::class, 'logout_model'])

    ->get('/sign', [app\controller\HomeController::class, 'sign'])
    ->post('/sign_model',[app\controller\signController::class, 'sign_model']);

    //model
    
    try {
        $router->resolve($_SERVER['REQUEST_URI'], strtolower($_SERVER['REQUEST_METHOD']));
    } catch (Exception $a){
    }

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
    
</body>
</html>