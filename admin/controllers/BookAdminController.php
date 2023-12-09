<?php
    namespace app\admin\controllers;
    require_once '../admin/controllers/BaseAdminController.php';
    require_once '../admin/models/BookModel.php';
    require_once '../admin/models/CatergoriesModel.php';

    use app\admin\controllers\BaseController;
    use app\admin\models\BookModel;
    use app\admin\models\CatergoriesModel;
    class BookAdminController extends BaseController {
        public function index(){
            $action = $_GET['action'];
            $page = substr($_GET['page'], 1);

            switch($action) {
                case 'list':
                    $book = new BookModel();
                    $this->view( 'pages/' . $page . '/' . $action  ,  $book->get_all_book());
                    break;
                case 'add':
                    $catergories = new CatergoriesModel();                    
                    $this->view( 'pages/' . $page . '/' . $action , $catergories->get_all_catergories());
                    break;
                case 'edit':
                    $catergories = new CatergoriesModel();   
                    $book = new BookModel();
                    $this->view( 'pages/' . $page . '/' . $action  ,  [$book->get_book_with_ID($_GET['id']), $catergories->get_all_catergories()]);
                    break;
                case 'delete':
                    $book = new BookModel();
                    $book->delete_book($_GET['id']);
                    header('Location: ?page=/product&action=list');
                    break;
            }
        }



        public function post(){
            $action = $_GET['action'];
            switch($action) {
                case 'add':
                    $book = new BookModel();
                    $file_path = $this->get_file_path();
                    if (!$file_path) {
                        $file_path = $book->get_file_path($_GET['id']);
                    }
                    $book->add_book($_POST['book_name'], $_POST['book_price'], $file_path, $_POST['stock'], $_POST['catergory_id']);
                    header('Location: ?page=/product&action=list');
                    break;
                case 'edit':
                    $book = new BookModel();
                    $file_path = $this->get_file_path();
                    if (!$file_path) {
                        $file_path = $book->get_file_path($_GET['id']);
                    }
                    $book->update_book($_POST['book_name'], $_POST['book_price'], $file_path, $_POST['stock'] , $_GET['id'] );
                    $book->update_book_detail($_POST['book_author'], $_POST['pages'], $_POST['publisher'], $_POST['book_cover'], $_GET['id']);
                    header('Location: ?page=/product&action=list');
                    break;
            }
        }

        public function get_file_path(){
            if (!isset($_FILES['file']['name'])){
                return null;
            }

            $des = dirname(ROOT) . '/img/product/'. $_FILES["file"]['name'];
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $des)){
                return  $_FILES["file"]['name'];
            }
        }

    }

?>