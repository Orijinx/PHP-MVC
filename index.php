<?php

namespace Index;
require_once __DIR__ . './vendor/autoload.php';

// ПРостенький рутинг для приведения образа работы приложения к MVC

switch ($_SERVER['REQUEST_METHOD']) { //Проверяем тип запроса
    case 'GET': {
            if ($_SERVER['REQUEST_URI'] == '/') {//Проверяем точку вхождения в приложение
                return readfile('main.php');//Возвращаем страничку
            } 
            break;
        }




    case 'POST': {
            if ($_SERVER['REQUEST_URI'] = '/') {
            }
            break;
        }
}