<?php
namespace src\Controller;

use src\Utilities\Database;
use src\Entity\Produit;


class IndexController
{
    /**
     * Liste les différents produits de la table produit
     */
    public function index(){

        //Connexion à la BDD
        $database = new Database();

        //Requete SQL
        $query = 'SELECT * FROM produit WHERE etat_publication = 1';
        $products = $database->query($query,Produit::class);
        return compact('products');
    }
}



