<?php
namespace vendor\Model;

use vendor\DataBase\DB as DataBaseDB;

class Users{
    static $tableName ="USERS";
    private $DB = null;
   
    //Поля класса
    public $id=null;
    public $name=NULL;
    public $email=NULL;
    public $password=NULL;
    public $remember_token=NULL;
    
    //Пустой конструктор
    public function __construct($id,$name,$email,$password,$remember_token){
        $this->DB = new DataBaseDB;
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->remember_token = $remember_token;
    }
    
    public static function All(){
        $DB = new DataBaseDB;
        $result = $DB->GetAll(Users::$tableName);
        $collection = array();
       while($obj = $result->fetch_object()){
           array_push($collection, new Users($obj->id,$obj->name,$obj->email,$obj->password,$obj->remember_token));
       }

        return $collection;
    }
}
?>