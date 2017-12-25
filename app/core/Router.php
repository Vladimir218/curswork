<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 18.11.2017
 * Time: 14:12
 */

namespace app\core;


class Router
{
    public $urls=[
        '/'=>['controller'=>'LoginController', 'action'=>'actionLogin'],
        '/?'=>['controller'=>'LoginController', 'action'=>'actionLogin'],
        '/Login/?'=>['controller'=>'LoginController', 'action'=>'actionLogin'],
        '/Login/'=>['controller'=>'LoginController', 'action'=>'actionLogin'],
        '/logout/'=>['controller'=>'LoginController', 'action'=>'actionLogout'],
        '/InLettersReg/'=>['controller'=>'SiteController', 'action'=>'actionRegistration'],
        '/InLettersReg/Reset/'=>['controller'=>'SiteController', 'action'=>'actionFormReset'],
        '/InLettersFind/'=>['controller'=>'SiteController', 'action'=>'actionInFind'],
        '/about'=>['controller'=>'SiteController', 'action'=>'about'],
        '/contact'=>['controller'=>'SiteController', 'action'=>'contact'],
        '/calc'=>['controller'=>'SiteController', 'action'=>'calc'],
        ];
    public $patterns=[
        '~/(?P<name>[a-z]+)/(?P<page_number>[0-9]+)/~'=>['controller'=>'SiteController',
            'action'=>'actionCategory'],
        '~/(?P<name>[a-z]+)/(?P<name_page>[a-z]+).html~'=>['controller'=>'SiteController',
            'action'=>'actionPage']
    ];

    public function route(){
     $url = $_SERVER['REQUEST_URI'];

     //echo $_SERVER['REQUEST_URI'];
     foreach ($this->urls as $key=>$value){
         if($url == $key){
             $value['controller'] =
                 "app\\controllers\\".$value['controller'];
             return $value;
         }
     }

     foreach ($this->patterns as $pattern =>$value){


         preg_match($pattern, $url, $match);
         if(!empty($match)){
             foreach ($match as $key=>$value2){
                // print_r($key);
                 //print_r($value2);
                 //echo "</br>";

                 //$value['controller'] = "app\\controllers\\".$value['controller'];
                 if(is_int($key)){
                     unset($match[$key]);
                 }
             }
             $_GET['params'] = $match;
            return $value;
         }
     }


    }
}