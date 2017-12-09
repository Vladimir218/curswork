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
        '/'=>['controller'=>'SiteController', 'action'=>'actionIndex'],
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