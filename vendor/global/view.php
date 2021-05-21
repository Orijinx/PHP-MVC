<?php
namespace View;
use Compact\Compact;
class View{
    //Отрисовка страниц
   public static function view(string $file_name,Compact $compact=null){
        return readfile($file_name);//Возвращаем страничку
    }
}