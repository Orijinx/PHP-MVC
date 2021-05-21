<?php 
namespace vendor\controllers;

use View\View;
use Compact\Compact;


class MainController {

    public static function MainView(){

       return View::view('main.php',compact($den));
    }
}