<?php
//On inclue la classe pour pouvoir l'utiliser
//require_once 'Classes/Produit.php';
//On crée un autoloader pour eviter d'avoir à inclure toutes les Classes
//définition de l'autoloading
function myAutoloader(string $className):void
{
    require 'src/Classes/' .$className. '.php';
}

//Enregistrement de la fonction d'autoloading
spl_autoload_register('myAutoloader');
