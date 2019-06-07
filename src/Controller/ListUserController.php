<?php
namespace src\Controller;
use src\Utilities\Database;
use src\Entity\User;

class ListUserController{
    public function listUser():array
    {
        $database = new Database();
        $database->connect();
        $SQL = "SELECT * FROM app_user ORDER BY username";
        $users = $database->queryUser($SQL, User::class);
        return compact('users');
    }
    public function removeUser($id):void
    {
        $database = new Database();
        $database->connect();
        $sqldelete = 'DELETE FROM app_user WHERE ID =' . $id;
        $database->exec($sqldelete);
    }
}

