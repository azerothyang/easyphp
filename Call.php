<?php

/**
 * Created by PhpStorm.
 * User: chengyang
 * Date: 2018/2/15
 * Time: 下午9:00
 */
class Person
{
   public function say($info){
      echo $info;
   }
}

class Call
{
    public $perObj;

    function __construct()
    {
        $this->perObj = new Person();
    }

    function __call($method, $arguments)
    {
        var_dump($method);
        var_dump($arguments);
        call_user_func_array(array($this->perObj, $method), $arguments);
        // TODO: Implement __call() method.
    }
}

$call = new Call();
$call->say(222);