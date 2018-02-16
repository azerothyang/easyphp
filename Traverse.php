<?php

/**
 * Created by PhpStorm.
 * User: chengyang
 * Date: 2018/2/16
 * Time: 下午1:58
 */
class Traverse implements Iterator
{
    private $start, $end, $cur;

    function __construct($start=1, $end=1)
    {
        $this->start = $start;
        $this->end = $end;
    }

    public function current()
    {
        return pow($this->cur, 2);
        // TODO: Implement current() method.
    }

    public function next()
    {
        $this->cur++;
        // TODO: Implement next() method.
    }

    public function key()
    {
        return $this->cur;
        // TODO: Implement key() method.
    }

    public function valid()
    {
        // TODO: Implement valid() method.
        return $this->cur <= $this->end;
    }

    public function rewind()
    {
        // TODO: Implement rewind() method.
        $this->cur = $this->start;
    }

}

$powIter = new Traverse(1, 5);
foreach ($powIter as $k => $v){
    echo $k . "===>" . $v . "\n";
}
