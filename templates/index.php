<?php
require dirname(__DIR__) . '/src/Controller/indexController.php';
require 'inc/header.php';

echo "<h1 style=\"margin-left:60px;\">L'exterieur</h1>";
echo "<main class='container'>";
echo "<div class=\"row justify-content-around\">";
foreach ($products as $product):?>
    <div class="card" style="width: 40%;margin:5px;">
        <figure style="width:100%;height:400px;padding:10px">
            <img src="/projetjuin2019/public/img/<?php echo $product->getImageName()?>" class="card-img-top img-fluid mw-100 mh-100 rounded-circle" alt="Image de <?php echo $product->getName() ?>">
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

