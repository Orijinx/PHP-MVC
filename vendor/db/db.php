<?php
namespace vendor\DataBase;


class DB
{
    /* Переменные для соединения с базой данных */
    private $hostname = "127.0.0.1";
    private $username = "root";
    private $password = "root";
    private $dbName = "auth";

    public $db=null;

   


    public function __construct()
    {
        $this->db = mysqli_connect($this->hostname, $this->username, $this->password, $this->dbName) or die("Не могу создать соединение ");  
    }

    public function GetAll($tableName){
        $result = $this->db->query("SELECT * FROM ".$tableName) or die(mysqli_error());//Создаем query для БД
        return $result;
    }

    // public function Get()
    // {

    //     $list = array();
    //     /* создать соединение */
    //     $mysqli = mysqli_connect($this->hostname, $this->username, $this->password, $this->dbName) or die("Не могу создать соединение ");

    //     $result = mysqli_query($mysqli, 'SELECT * FROM SALES') or die(mysqli_error());//Создаем query для БД

    //     /* Выборка результатов запроса */
    //     while ($row = mysqli_fetch_row($result)) {
    //         $sales = new Sale();//Инициализуем класс Sale
    //         $sales->sConstruct(intval($row[0]), $row[1], $row[2], $row[3]);
    //         array_push($list, $sales);//Добавляем в возвращаемую коллекцию
    //     }
    //     /* Освобождаем используемую память */
    //     mysqli_free_result($result);
    //     return $list;//Возвращаем коллекцию
    // }
    // public function GetOrderByDate($min,$max){
    //     $list = array();
    //     /* создать соединение */
    //     $mysqli = mysqli_connect($this->hostname, $this->username, $this->password, $this->dbName) or die("Не могу создать соединение ");

    //     /* выбрать базу данных. Если произойдет ошибка - вывести ее */
    //     // mysqli_select_db($dbName) or die(mysql_error());  

    //     /* Выполнить запрос. Если произойдет ошибка - вывести ее. */
    //     $result = mysqli_query($mysqli, "SELECT Period, SUM(sum) AS summa FROM sales WHERE(sales.Period >= '$min' AND sales.Period <='$max') GROUP BY Period") or die(mysqli_error());
    //     $i=0;
    //     /* Выборка результатов запроса */
    //     while ($row = mysqli_fetch_row($result)) {
    //         $sales = new Sale();
    //         $sales->sСonstructDate($i,$row[0],$row[1]);
    //         array_push($list, $sales);
    //         $i++;
    //     }
    //     /* Освобождаем используемую память */
    //     mysqli_free_result($result);
    //     return $list;
    // }
}