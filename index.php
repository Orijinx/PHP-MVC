<?php

namespace Index;
require_once __DIR__ . './vendor/autoload.php';

use vendor\controllers\MainController;
use vendor\Model\users;

// ПРостенький рутинг для приведения образа работы приложения к MVC

switch ($_SERVER['REQUEST_METHOD']) { //Проверяем тип запроса
    case 'GET': {
            if ($_SERVER['REQUEST_URI'] == '/') {//Проверяем точку вхождения в приложение
               MainController::MainView();
            } elseif ($_SERVER['REQUEST_URI'] == '/getinfo') {
                header('Content-Type: application/json');
                echo json_encode(Users::All());
            } 
            elseif ($_SERVER['REQUEST_URI'] = '/getorderbydate') {
                header('Content-Type: application/json');
               echo "Not method Post";
            }
            break;
        }




    case 'POST': {
            if ($_SERVER['REQUEST_URI'] = '/getorderbydate') {
                header('Content-Type: application/json');
               
                echo $result;
            }
            break;
        }
}