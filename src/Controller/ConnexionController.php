<?php
namespace src\Controller;

use src\Utilities\FormValidator;
use src\Utilities\Database;
use src\Entity\User;

class ConnexionController {

    public function connectUser(){
            $errorMessageEmail = FormValidator::checkPostEmail('email', 255);
            $errorMessagePassword = FormValidator::checkPostText('password', 128);
            if (empty($errorMessageUsername) && empty($errorMessageEmail) && empty($errorMessagePassword))
            {
                // Il n'y a pas d'erreur, on passe à l'inscription
                $database = new Database();
                $database->connect();
                // On crée un utilisateur en local
                $user = new User('',$_POST['email'],$_POST['password']);

                $queryVerif = "SELECT * FROM app_user WHERE email ='".$_POST['email']."'";
                $userConnect = $database->queryUnique($queryVerif, 'User');
                if(password_verify($_POST['password'], $userConnect['password'])){
                    $username = $userConnect['username'];
                    $success = 1;
                }else{
                    $username = '';
                    $success = 0;

                }
                return compact('username','success');
            }

    }
}
