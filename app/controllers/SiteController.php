<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 18.11.2017
 * Time: 12:56
 */

namespace app\controllers;




use app\core\Controller;
use app\models\department;
use app\models\inletters;
use app\models\organization;
use app\models\personnel;

class SiteController extends Controller


{

    public function actionRegistration(){
        //$_POST['WrongNum']=1;
       // unset($_POST);
        if (!empty($_POST)){
            /* Определение Id организации */
            $organization = new organization();
            $res= $organization->find(['name'=>$_POST['Organization']]);
            if (!empty($res)){
                $_POST['IdOrganization']=$res[0]['id'];
            }else{
                echo "Организация не найдена";
            }
            /* Определение Id подразделения */
            $department = new department();
            $res= $department->find(['name'=>$_POST['Department']]);
            if (!empty($res)){
                $_POST['IdDepartment']=$res[0]['id'];
            }else{
                echo "Подразделение не найдено";
            }

            /* Определение Id исполнителя */
            $implementer = new personnel();
            $res= $implementer->find(['name'=>$_POST['Implementer']]);
            if (!empty($res)){
                $_POST['IdImplementer']=$res[0]['id'];
            }else{
                echo "Исполнитель не найден";
            }

            $implementer1 = new personnel();
            $res= $implementer1->find(['name'=>$_POST['Implementer1']]);
            if (!empty($res)){
                $_POST['IdImplementer1']=$res[0]['id'];
            }else{
                echo "Непосредственный исполнитель не найден";
            }

            $arr=array('OrgOutNum'=>$_POST['OrgOutNum'], 'OrgOutDate'=>$_POST['OrgOutDate'],'IdOrganization'=>$_POST['IdOrganization']);
            $inletter = new inletters();
            $res= $inletter->loadFile();
            $inletter->load ($_POST);
            if (empty($res)){
                $inletter->load ($_POST);
                $inletter->save();
            }else{
                echo "Письмо с такими реквизитами в базе существует";
            }

        }
        $_SESSION['body']="inletterReg";
        $organization = new organization();
        $arr=array('fild'=>'name', 'direction'=>'ASC');
        $res= $organization->getAll($arr);
        foreach ( $res as $item) {
            $mas[]=$item['name'];
        }
        $_SESSION['organization']=$mas;

        unset($mas);

        $dep = new department();
        $res= $dep->getAll($arr);

        foreach ( $res as $item) {
            $mas[]=$item['name'];
        }
        $_SESSION['department']=$mas;
        unset($mas);

        $pers = new personnel();
        $res= $pers->getAll($arr);
        foreach ( $res as $item) {
            $mas[]=$item['name'];
        }
        $_SESSION['personnel']=$mas;
        return "true";
    }
    public function actionFormReset(){
        unset($_POST);
    }
    public function actionInFind(){
        $_SESSION['body']="inletterFind";
        return "true";
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