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
print microtime(true) . "\n";
print MyClass::sum(10000000) . "\n";
print microtime(true) . "\n";

function func(){
   $GLOBALS['var'] = 2;
}
$var =1;
func();
var_dump($GLOBALS);


