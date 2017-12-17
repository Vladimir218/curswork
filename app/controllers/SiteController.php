<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 18.11.2017
 * Time: 12:56
 */

namespace app\controllers;




use app\core\Controller;
use app\models\Article;
use app\models\Category;

class SiteController extends Controller


{

    public function actionRegistration(){
        $_SESSION['body']="inletterReg";
        return "true";
    }

    public function actionInFind(){
        $_SESSION['body']="inletterFind";
        return "true";
    }

    public function hello(){

        return "hello";
    }
    public function actionIndex(){
        $pages = new Article();
        $list = $pages->getAll();
        $category = new Category();
        $cat_list = $category->getAll();
        $this->render('index', ['pages'=>$list, 'categories'=>$cat_list]);
    }

    public function actionCategory(){

    }

}