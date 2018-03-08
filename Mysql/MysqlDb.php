<?php
/**
 * Created by PhpStorm.
 * User: 111
 * Date: 2018/3/8
 * Time: 14:32
 */

class MysqlDb
{
    private $host;

    private $user;

    private $password;

    private $database;

    private $port;

    /**
     * @var mysqli
     */
    public $conn;

    public function __construct($host, $user, $password, $database, $port=3306)
    {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->database = $database;
        $this->port = $port;
        $this->conn = mysqli_connect($host, $user, $password, $database, $port);
    }

    public function insert(){
        $stmt = $this->conn->prepare("INSERT INTO test(name, age) VALUES (?, ?)");
        $stmt->bind_param("si", $name, $age);
        echo gettype(2.2);
        $age = 3;
        $name = "yangcheng";
        $res = $stmt->execute();
//        var_dump($res);
    }

    public function select(){
        $stmt = $this->conn->prepare("SELECT age FROM test");
        $stmt->execute();
        $stmt->bind_result($age);
        while ($stmt->fetch()){
            echo "{$age} \r\n";
        }
    }
}

$mysql = new MysqlDb("192.168.1.101", "cheng", "db123456", "test");
//$mysql->insert();
$mysql->select();

