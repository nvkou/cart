<?php
/**
 * Created by PhpStorm.
 * User: NK
 * Date: 2016/10/16
 * Time: 15:50
 */

namespace root\model;

interface db
{
    function connect($host,$user,$password,$db);
    function query($str);
    function  close();
}
class Database implements  db //using PDO
{
    private $pdo;

    function __construct($host='localhost', $user='root', $password='10086', $db='shop')
    {
        try {
            $this->pdo = new \PDO("mysql:host=$host;dbname=$db", $user, $password);
            echo 'db connect ok';
        }catch (\PDOException $e){
            die($e->getMessage());
        }
    }
    function  __destruct()
    {
        $this->pdo=null;
    }
    function connect($host='localhost', $user='root', $password='10086', $db='shop')
    {
        if (!$this->pdo==null) {
            try {
                $this->pdo = new \PDO("mysql:host=$host;dbname=$db", $user, $password);
                echo 'db connect ok';
            } catch (\PDOException $e) {
                die($e->getMessage());
            }
        }
    }

    function query($str)
    {
        if(!$this->pdo==null){
            return $this->pdo->query($str);
        }else{
            return'db not set';
        }

    }
    function close()
    {
        $this->pdo=null;
    }
}