<?php
/**
 * Created by PhpStorm.
 * User: 111
 * Date: 2018/2/11
 * Time: 9:46
 */

interface Action {
    function say();
}

class Person implements Action {
    function say()
    {
        print "hello person\n";
        // TODO: Implement say() method.
    }

}

class Animal implements Action {

    function say()
    {
        print "hello animals\n";
        // TODO: Implement say() method.
    }

}

function dd (&$act){
   if($act instanceof Action){
        $act->say();
   }
   else{
       print "no instance\n";
   }
}

$a = new Person();
$b = new Animal();
dd($a);
dd($b);
