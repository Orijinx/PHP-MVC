<?php
namespace Compact;
class Compact{
    public $_GLOBAL = array();

    public function __construct(...$params){
        foreach($params as $param){
            array_push($this->_GLOBAL,$param); 
        }
        var_dump($this->_GLOBAL);
    }
}