<?php
function URLCouranteSansParametres(){
    $urlCourante=$_SERVER["REQUEST_URI"];
    $urlGet = explode("?",$urlCourante);
    return  $urlGet[0];
}
// TEST DU NOM
$mail = false;
$pw = false;
if ($_SERVER['REQUEST_METHOD'] === "POST") {
//L'existence
    if (!array_key_exists('mail', $_POST)) {
        $message = "Merci de rentrer un email";
    } else {
        //La non nullite
        if ($_POST['mail'] === '') {
            $message = "Merci de rentrer un email";
        } else {
            //Le type => pas de verif pour une chaine de caractère
            //Valeur mini (0)
            //Valeur maxi (255)
            if (strlen($_POST['mail']) > 255) {
                $message = "L'e-mail saisi n'est pas valide";
            }
            else {
                $mail = true;
            }
        }
    }
    if (!array_key_exists('pw', $_POST)) {
        $message2 = "Merci de rentrer un mot de passe";
    } else {
        //La non nullite
        if ($_POST['pw'] === '') {
            $message2 = "Merci de rentrer un mot de passe";
        } else {
            //Le type => pas de verif pour une chaine de caractère
            //Valeur mini (0)
            //Valeur maxi (255)
            if (strlen($_POST['pw']) > 255) {
                $message2 = "Le mot de passe saisi n'est pas valide";
            }else {
                $pw = true;
            }
        }
    }
    if ($mail == true && $pw == true && !isset($_GET['action'])){
        $reponse = $bdd->query('SELECT * FROM user WHERE user_name = \''.$_POST['mail'].'\'');
        $donnees = $reponse->fetch();
        $user = $donnees['user_name'];
        $password = $donnees['user_pw'];
        if (password_verify ($_POST['pw'] , $password )){
            $_SESSION['user'] = $donnees['user_name'];
        }else{
            $message = "Les informations de connexions ne sont pas correctes";
        }
    }
    if ($mail == true && $pw == true && isset($_GET['action'])){
        $reponse = $bdd->prepare('INSERT into user(user_name,user_pw) VALUES (:mail,:password)');
        $reponse->execute(array(
            'mail'=>$_POST['mail'],
            'password'=>password_hash($_POST['pw'],PASSWORD_DEFAULT)
        ));
    }
}