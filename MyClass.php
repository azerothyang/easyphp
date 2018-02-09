<?php
/**
 * Created by PhpStorm.
 * User: nick
 * Date: 2018/2/8
 * Time: 18:01
 */

class MyClass
{
    static function sum(int $n) :float {
        $sum = 0;
        for ($i=0; $i<$n; $i++){
            $sum += $i;
        }
        return $sum;
    }
}
//print microtime(true) . "\n";
//print MyClass::sum(100000000) . "\n";
//print microtime(true) . "\n";

$swch = 1;
switch ($swch) {
    case 1:
        print 1111 . "\n";
        break;
    case 2:
        print 2222 . "\n";
        break;
    default: print 0;
}