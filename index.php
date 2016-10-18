<?php
namespace  root;
use root\model\Database;
use root\model\user;
define('BASE',__DIR__);
require BASE.'/model/Database.php';

$sb=new Database();
$res=$sb->query("SELECT * FROM shop WHERE uid=1");
var_dump($res->fetchAll());
