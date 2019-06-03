<?php
require 'autoload.php';
$pdo = new PDO('mysql:host=localhost;dbname=catalogue', 'root',null,[PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8mb4"]);
$query = 'SELECT * FROM produit WHERE etat_publication = 1';
//Execution de la requete
$result = $pdo->query($query);
$products = $result->fetchAll(PDO::FETCH_CLASS,'Produit');

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

require 'inc/header.php';

echo "<h1 style=\"margin-left:60px;\">L'exterieur</h1>";
echo "<main class='container'>";
echo "<div class=\"row justify-content-around\">";
foreach ($products as $product):?>
    <div class="card" style="width: 30%;margin:5px;">
        <figure style="width:100%;height:400px;padding:10px">
            <img src="img/<?php echo $product->getImageName()?>" class="card-img-top img-fluid mw-100 mh-100 rounded-circle" alt="Image de <?php echo $product->getName() ?>">
        </figure>
        <div class="card-body">
        <h5 class="card-title w-100 text-center"><?php echo $product->getName()." - ".$product->getPrice()."€";?></h5>
        <p class="card-text"><?php echo $product->getShortDescription();?></p>
        <a href="#" class="btn btn-dark btn-block">Acheter!</a>
    </div>
    </div>
<?php
endforeach;
echo "</div></main>";
require 'inc/footer.php'; ?>

