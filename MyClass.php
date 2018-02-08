<?php
/**
 * Created by PhpStorm.
 * User: 111
 * Date: 2018/2/8
 * Time: 18:01
 */

class MyClass
{
    static function sum(int $n) :int{
        $sum = 0;
        for ($i=0; $i<$n; $i++){
            $sum += $i;
        }
        return $sum;
    }
}

print MyClass::sum(100000000);