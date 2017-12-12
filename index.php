<?php

use app\controllers\LoginController;
use app\core\Router;

include __DIR__."/vendor/autoload.php";

session_start();

$router = new Router();
$route =$router->route();

//echo "</br> rote = ";
//print_r($route);
//echo "</br>";
$include_file = __DIR__."/".str_replace("\\", "/", $route['controller'].".php");
//echo $route['controller'];

include $include_file;
$controller = new $route['controller']();

if(isset($_SESSION['user'])){

//echo $route['action'];
        if(isset($_GET['action'])){
             echo "</Br> GET (action) = ". $_GET['action']."</Br>";
            $action = "action".ucfirst($_GET['action']);
            $controller->$action();
        }else{
            $controller->{$route['action']}();
            $body =$_SESSION['body'];
        }

}else{

     $controller->{$route['action']}();
    $body =$_SESSION['body'];
}
$controller->render($_SESSION['layouts'],$body);
