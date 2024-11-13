<?php
session_start();//Khởi tạo 1 phiên làm việc
//Session là lưu ở server, cookie là lưu ở local
$route = $_GET['route']  ?? '';
require_once('Controller/LoginController.php');
require_once('Controller/HomeController.php');
require_once('Model/Database.php');
switch($route){
    case 'login':
        $login_controller = new LoginController(); 
        $login_controller->login();
        break;
    default:
        // echo 'Hiện tại đây là trang  mặc định';
        // print_r($_SESSION);
        $home = new HomeController();
        $home->home();
        break;
    case 'logout':
        //Xóa từng session
        unset($_SESSION['array_user_login']);
        unset($_SESSION['logged']);
        //Nếu xóa toàn bộ session thì dùng session_destroy();
        header("Location: index.php?route=login");
        break;
}
