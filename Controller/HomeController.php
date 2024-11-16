<?php
class HomeController{
    public function home(){
        //Khởi tạo class
        $model = new Database();
        $arr_products = $model->getListProduct();
        // echo '<pre>';
        // print_r($arr_products);
        include('Views/vi_home.php');
    }
    public function cart(){
        $id = $_GET['id'] ?? 0;
        $id = (int) $id;
        //Khởi tạo 1 mảng $array_cart nếu nó tồn tại trong SESSION, còn nếu không thì gán bằng null
        $array_cart = isset($_SESSION['arr_cart']) ? $_SESSION['arr_cart'] : null ;
        $model = new Database();
        $arr_current_product = $model->getProductById($id);
        //Xử lý giỏ hàng
       
        if(isset($_POST['submit'])){
            $soluong = $_POST['soluong'];
            if($soluong > 0){
                $row_cart = $arr_current_product;   
                $row_cart['soluong'] = $soluong;           
                $array_cart[] = $row_cart;               
                
                //Lưu $array_cart vào session
                $_SESSION['arr_cart'] = $array_cart;
            }
            // print_r($row_cart);
            header("Location: index.php?route=list_cart");
        }
        // print_r($arr_product);
        include('Views/vi_cart.php');
    }
    public function listCart(){
        // unset($_SESSION['arr_cart']);   
        $array_cart = isset($_SESSION['arr_cart']) ? $_SESSION['arr_cart'] : null ;
        include('Views/vi_list_cart.php');
    }
}