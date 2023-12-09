<?php 
    session_start();
    include_once './core/Database.php';
    if (isset($_GET['action'])){
        $action = $_GET['action'];
    }
    switch($action){
        case 'filter_catergory':
            filter_catergory($conn, $_GET['catergory_id']);
            break;
    }
function filter_catergory($conn, $catergory_id){
    $sql = 'SELECT * FROM product WHERE catergory_id = ' . $catergory_id;
    $product_list = $conn->query($sql)->fetchAll();
    echo json_encode($product_list);
}
?>