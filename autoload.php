<?php
//définition de l'autoloading
function myAutoloader(string $className):void
{
    $className = str_replace("\\", '/', $className);
    require $className . '.php';
}

//Enregistrement de la fonction d'autoloading
spl_autoload_register('myAutoloader');
