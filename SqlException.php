<?php
/**
 * Created by PhpStorm.
 * User: 111
 * Date: 2018/2/9
 * Time: 11:17
 */

class SqlException extends Exception
{
    public $problem;
    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}

try {
    throw new SqlException("wrong!!");
}
catch (SqlException $e){
    print $e->getMessage();
}


