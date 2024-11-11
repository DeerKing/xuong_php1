<?php
$route = $_GET['route']  ?? '';
require_once('Controller/LoginController.php');
switch($route){
    case 'login':
        $login_controller = new LoginController(); 
        $login_controller->login();
        break;
    default:
        echo 'Hiện tại đây là trang  mặc định';
        break;
}
