<?php
require dirname(__DIR__) . '/functions/form-functions.php';
require dirname(__DIR__,2) . '/autoload.php';
//Verification formulaire + inscription de l'utilisateur en bdd
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $errorMessageUsername = checkPostText('username', 128);
    $errorMessageEmail = checkPostText('email', 255);
    $errorMessagePassword = checkPostText('password', 100);

    if (empty($errorMessageUsername) && empty($errorMessagePassword) && empty($errorMessageEmail)){

        //var_dump("On peut inscrire l'utilisateur");
        $database = new Database();
        $database->connect();

        // On crée un utilisateur en local
        $user = new User();
        $user->setUsername($_POST['username']);
        $user->setEmail($_POST['email']);
        $user->setPassword($_POST['password']);
        $newUser = [$user->getUsername(),$user->getEmail(),$user->getPassword()];
        $query = "INSERT INTO app_user (username, email, password) VALUES (".$user->getStrParamsSQL().")";
        $success = $database->exec($query);
    }else{
        var_dump("erreur");
    }
}

