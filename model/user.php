<?php
/**
 * Created by PhpStorm.
 * User: NK
 * Date: 2016/10/18
 * Time: 14:19
 */

namespace root\model;


class user
{
private $sessionid,$uid,$username,$passwd,$cart,$balance;
public $pdo;

    function __construct($arg=null)
    {
        $this->sessionid=0;

        if (!$arg==null){
            $this->init();
        }else{
            $this->load($arg);
        }
    }
    function  __destruct()
    {
        
       $this->pdo=null;
        // TODO: Implement __destruct() method.
    }
    function load($arg){
        $this->pdo=new Database();
        $this->pdo->connect();
        $res=$this->pdo->query("SELECT * FROM user WHERE uid=$arg limit 1");
        $data=$res->fetchAll();
        $this->username=$data['username'];
        $this->passwd=$data['passwd'];
        $this->uid=$data['uid'];
        $this->balance=$data['balance'];
    }
    function  init(){

    }
    function setAttribute($username, $passed, $balance){
        $this->username=$username;
        $this->passwd=$passed;
        $this->balance=$balance;


    }
}