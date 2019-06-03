<?php
//On inclue la classe pour pouvoir l'utiliser
require_once 'classes/Produit.php';
echo 'Projet PHP Objet';
//On crée un nouveau produit
$hamac = new Produit();

$hamac->name = "hamac";
var_dump($hamac);

//On crée un 2eme objet
$parasol = new Produit();
$parasol->name = "Parasol";
var_dump($parasol);
require 'inc/header.php';
?>
<h1>liste des produits</h1>

<?php require 'inc/footer.php'; ?>

