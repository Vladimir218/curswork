<?php

use app\controllers\LoginController;

include __DIR__."/vendor/autoload.php";

session_start();
$controller =new LoginController();
if(isset($_SESSION['user'])){
    if(isset($_GET['action'])){
        // echo "</Br> GET (action) = ". $_GET['action']."</Br>";
        $action = "action".ucfirst($_GET['action']);
        $controller->$action();
    }else{
      //print_r($controller->$this->layout);
        $controller->render($_SESSION['layouts'],'banner');
    }

}else{
    $controller->actionLogin();
}
