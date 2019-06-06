<?php
require dirname(__DIR__,2) . '/autoload.php';
// Vérification formulaire + inscription de l'utilisateur en BDD
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errorMessageEmail = checkPostText('email', 255);
    $errorMessagePassword = checkPostText('password', 128);
    if (empty($errorMessageUsername) && empty($errorMessageEmail) && empty($errorMessagePassword))
    {
        // Il n'y a pas d'erreur, on passe à l'inscription
        $database = new Database();
        $database->connect();
        // On crée un utilisateur en local
        $user = new User('',$_POST['email'],$_POST['password']);
//        $user->setEmail($_POST['email']);
//        $user->setPassword($_POST['password']);
        $queryCreate = "INSERT INTO app_user (username, email, password) VALUES (" .$database->getStrParamsGlobalSQL($user->getUsername(),$user->getEmail(),$user->getPassword()) .")";
        $queryVerif = "SELECT * FROM app_user WHERE email ='".$_POST['email']."'";
        $userConnect = $database->queryUnique($queryVerif, 'User');
        if(password_verify($_POST['password'], $userConnect['password'])){
            $_SESSION['username'] = $userConnect['username'];
            header('location:connexion.php');
        }else{
            $errorMessageConnexion = "Les informations de connexions ne sont pas correctes";
           }
    } else {
        var_dump("Problème");
    }
}
