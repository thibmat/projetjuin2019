<?php
include "functions_formulaire.php";
// TEST DU NOM
if ($_SERVER['REQUEST_METHOD'] === "POST"){
    $messageName = checkPostText('name',255);
    $messageDescription = checkPostText('desc', 65535);
    $messagePrix = checkPostNumber('prix','float',0,5000);
    sanitizeCheckBox('valid');
    $messageDate = checkPostDate('date',[2019,01,01],[2019,12,31]);
    $messageVues = checkPostNumber('vues','int',0,10000);
}
