<?php
//On inclue la classe pour pouvoir l'utiliser
//require_once 'classes/Produit.php';
//On crée un autoloader pour eviter d'avoir à inclure toutes les classes
//définition de l'autoloading
function myAutoloader(string $className):void
{
    require 'classes/'.$className.'.php';
}

//Enregistrement de la fonction d'autoloading
spl_autoload_register('myAutoloader');
