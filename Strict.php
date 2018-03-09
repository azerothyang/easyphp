<?php
/**
 * Created by PhpStorm.
 * User: 111
 * Date: 2018/3/9
 * Time: 14:25
 */
declare(strict_types=1);
class Strict
{
    static function sum(int $n) :int {
        $sum = 0;
        for ($i=1; $i<$n; $i++){
           $sum += $i;
        }
        return $sum;
    }
}

echo Strict::sum(10000000);

