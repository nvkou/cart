<?php
/**
 * Created by PhpStorm.
 * User: NK
 * Date: 2016/10/16
 * Time: 13:50
 */

namespace model;


class loder
{

    static function autoload($class){
        $path=BASE.'\\'.'.php';
        require $path;

    }
    function __toString()
    {
       return __CLASS__;
    }
}