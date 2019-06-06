<?php

use src\Utilities\Database;
use src\Entity\User;
require dirname(__DIR__,2) . '/autoload.php';


$database = new Database();
$database->connect();
if (isset($_GET['action']))
{

    $deletId = $database->getStrParamsGlobalSQL($_GET["id"]);
    $sqldelete = 'DELETE FROM app_user WHERE ID =' . $deletId ;
    $database->exec($sqldelete);
}

//Recuperation User en BDD

//$user = new User('','','');
$SQL = "SELECT * FROM app_user ORDER BY username";
$users = $database->query($SQL,'\src\Entity\User');

