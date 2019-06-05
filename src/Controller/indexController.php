<?php
require dirname(__DIR__,2) . '/autoload.php';
//Connexion à la BDD
$database = new Database();
$database->connect();
//Requete SQL
$query = 'SELECT * FROM produit WHERE etat_publication = 1';
$products = $database->query($query,'Produit');

//On crée un nouveau produit
//$hamac = new Produit();

//$hamac->setName ("hamac");
//$hamac->setDescription ("Pour se reposer après 5 jours de PHP");
//$hamac->setImageName ("hamac.jpg");
//$hamac->setPrice(100);

//On crée un 2eme objet
//$parasol = new Produit();
//$parasol->setName ("Parasol");
//$parasol->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
//$parasol->setImageName("parasol.jpg");
//$parasol->setPrice(50);

//on crée un tableau pour stocker des objets.
//$products = [$hamac,$parasol];