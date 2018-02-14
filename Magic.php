<?php

/**
 * Created by PhpStorm.
 * User: chengyang
 * Date: 2018/2/14
 * Time: 下午9:52
 */
class Magic
{
    function __get($name)
    {
        // TODO: Implement __get() method.
        var_dump($name);
    }

    function __set($name, $value)
    {
        // TODO: Implement __set() method.
//        echo $name . "\n";
//        echo $value . "\n";
    }
}
$magic = new Magic();
$magic->x = 1;
echo $magic->x;


