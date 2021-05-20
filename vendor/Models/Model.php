<?php
namespace vendor\Model;

use vendor\DataBase\DB as DataBaseDB;

abstract class Model{
    static $tableName;
    protected $DB = null;
    
    //Пустой конструктор
    public function __construct(){
    }
    
    public static function All(){
    }
}
?>