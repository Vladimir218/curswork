<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 18.11.2017
 * Time: 13:14
 */

namespace app\core;


use PDO;
use PDOException;


abstract class Model
{
    protected $tablename;
    protected $connection;
    protected $id;

    /**
     * Model constructor.
     */
    public function __construct()
    {
        $conf =include "config/db.php";
        try{
            $this->connection = new PDO('mysql:host='.$conf['host'].";dbname=".$conf['dbname']
                , $conf['user'], $conf['password']);
            $fields = $this->get();
            foreach ($fields as $field){
                $this->$field;

            }

        }catch (PDOException $e){

            echo $e->getMessage();
        }


    }

    public function getTable(){
        if(empty($this->tablename)){
            $tablename = strtolower(array_pop(explode("\\",get_class($this))));
            return $tablename;
        } else{
            return $this->tablename;
        }

    }

    public function getOne($id){

        $sql = "select * from ".$this->getTable()." where `id` =$id";

        $res=  $this->connection->query($sql)->fetch(PDO::FETCH_ASSOC);
        return $res;
    }

    public function getAll($arr=null){
        //print_r($arr);
        if(!empty($arr)){
            $sql = "select * from " . $this->getTable()." ORDER BY BINARY(". $arr['fild'].") " .$arr['direction'];
            //echo $sql;
        }
        else {
            $sql = "select * from " . $this->getTable();
        }
        $res = $this->connection->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $res;

    }

    public function find($arr=null){

        $sql = "select * from ".$this->getTable(). " Where ";
        if(!empty($arr)){
            foreach ($arr as $key=>$value){
                $sql.="`$key`='$value'  and ";
            }
          $sql = substr($sql, 0, -4).";";
        }else{
            $sql.= "1";
        }
      return $this->connection->query($sql)->fetchAll(PDO::FETCH_ASSOC);

    }

    public function load($params){
    if(!empty($params)){
        foreach ($params as $key=>$value)  {
            $this->$key = $value;
        }
    }
}
/*
 * Получаем список полей таблицы
 * они же свойства класса
 */
public function get(){
        $tmp =$this->connection->query("DESC ".$this->getTable())->fetchAll();
        $fields= [];

        foreach ($tmp as $item) {
            $fields[] = $item['Field'];
        }

        return $fields;
          //  $this->connection->query("DESC ".$this->getTable())->fetchAll();

    }
public function save(){
   // if($this->beforSave()){
        $fields = $this->get();
        unset($fields[0]);
        //print_r($this->id);
        if($this->id){
            $sql= "UPDATE ".$this->getTable()." SET ";
            foreach ($fields as $field){
                $values[] = " `$field` = '{$this->$field}'";
            }

            $str = implode($values,',');
            $sql .=   $str. "WHERE id = '{$this->id}'";
            echo "</br>".$sql;
            $this->connection->query($sql);

        }else{
            $fields_str = implode($fields,',') ;
            foreach ($fields as $field){
                $values[] = "'{$this->$field}'";
            }
            $val_str= implode($values, ',');
            $sql = "INSERT INTO ".$this->getTable()." ($fields_str) VALUES($val_str)";
            $this->connection->query($sql);
        }
    //}else {
      //  return false;
    //}


      //  $this->afterSave();
}

public function beforSave(){
    return true;
}

public function afterSave(){
    return true;
}


}