<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 03.12.2017
 * Time: 11:23
 */

namespace app\controllers;

use app\core\Controller;
use app\models\User;

class LoginController extends Controller
{
    public $LoginOuy = "loginform";
    public function actionLogin(){
        //echo "Да";
        $_SESSION['layouts']="Login";
        if($_SERVER['REQUEST_METHOD']=='POST'){
            if(count($_POST)==2){
                $login = $_POST['login'];
                $pasword = $_POST['password'];
                $user = new User();
                $res= $user->find(['login'=>$login, 'password'=>$pasword]);
                if(!empty($res)){
                    $_SESSION['user']=$res[0]['surname']." ".mb_substr($res[0]['name'], 0, 1,"UTF-8").".".mb_substr($res[0]['patronymic'], 0, 1,"UTF-8").".";
                    if ($res[0]['access']==1) {
                        $_SESSION['layouts']="SiteAdmin";
                        $_SESSION['body']="banner";
                        return "true";
                    }elseif($res[0]['access']==2){
                        $_SESSION['layouts']="SiteUser";
                        $_SESSION['body']="banner";
                        return "true";
                    }else{
                        $_SESSION['layouts']="SiteUser1";
                        $_SESSION['body']="banner";
                        return "true";
                    }
                }else{
                    $_SESSION['body']="loginform";
                    return "true";
                };
            }elseif(count($_POST)==7){
                $login = $_POST['login'];
                $user = new User();
                $res= $user->find(['login'=>$login]);
                //print_r($res);
                if(empty($res)) {
                    if ($_POST['password']===$_POST['password1']){
                        $user->load($_POST);
                        $user->save();
                        return "true";
                    }else{
                        $_SESSION['body']="WrongPass";
                        return "true";
                    }
                }else{
                    $_SESSION['body']="existUser";
                    return "true";
                };
            };
        }else{
            $_SESSION['body']="loginform";
            return "true";
        };
    }
    public function actionLogout(){
        //echo "logout";
        unset($_SESSION['user']);
        $_SESSION['layouts']="Login";
        $_SESSION['body']="loginform";
        return "true";
        //header("Location: ". $_SERVER["HTTP_REFERER"]);

    }
}