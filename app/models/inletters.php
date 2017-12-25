<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 18.12.2017
 * Time: 22:33
 */

namespace app\models;


use app\core\Model;

class inletters extends Model
{
    public function loadFile(){
        echo "Функция load";
        print_r($_FILES);
    }
}