<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 03.12.2017
 * Time: 11:16
 */

namespace app\core;


abstract class Controller
{
    public function __construct()
    {

    }
    public $layout = "SiteUser1";
    /*
     *  рендерим страницу
     * $arr is array
     */
    public function render($layouts, $view=null, $arr =null){
       // echo "</br> view= $viev layouts = $this->layout";
        $content = __DIR__."/../views/$view.php";
        // подключаем файл шаблона

        include __DIR__."/../views/layouts/".$layouts.".php";
    }




}