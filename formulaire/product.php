<?php
//INCLUSION EN TETE + NAVBAR
require "../inc/header.php";
//INCLUSION DU TRAITEMENT DU formulaire
require "handle-product-new.php";
?>
<main class="container">
<h1>Ajout d'un produit</h1>
<form method="post">
    <div class="form-group">
        <label for="name">Nom du produit</label>
        <input type="text" class="form-control <?= (isset($messageName) && !empty($messageName)) ? 'is-invalid' : '' ?>" id="name" name="name" placeholder="Nom" value="<?= $_POST['name'] ?? ''?>">
        <div class="invalid-feedback"><?= $messageName ?? "" ?></div>
        <label for="desc">Description</label>
        <textarea class="form-control <?= (isset($messageDescription) && !empty($messageDescription)) ? 'is-invalid' : '' ?>" id="desc" rows="3" name="desc"  placeholder="Description du produit"><?= $_POST['desc'] ?? ''?></textarea>
        <div class="invalid-feedback"><?= $messageDescription ?? "" ?></div>
        <label for="prix">Prix</label>
        <input type="number" step="0.01" class="form-control <?= (isset($messagePrix) && !empty($messagePrix)) ? 'is-invalid' : '' ?>" id="prix" name="prix" placeholder="Prix" value="<?= $_POST['prix'] ?? ''?>">
        <div class="invalid-feedback"><?= $messagePrix ?? "" ?></div>
    </div>
    <div class="custom-control custom-switch">
        <input type="checkbox" class="custom-control-input" data-toggle="toggle" data-style="ios" id="valid" name="valid">
        <label class="custom-control-label" for="valid">Publier cet article</label>
    </div>
    <div class="form-group">
        <label for="date">Date de création</label>
        <input type="date" class="form-control <?= (isset($messageDate) && !empty($messageDate)) ? 'is-invalid' : '' ?>" id="date" name="date" value="<?= $_POST['date'] ?? ''?>">
        <div class="invalid-feedback"><?= $messageDate ?? "" ?></div>
    </div>
    <div class="form-group">
        <label for="vues">Nombre de vues</label>
        <input type="number" class="form-control <?= (isset($messageVues) && !empty($messageVues)) ? 'is-invalid' : '' ?>" id="vues" aria-describedby="vues" placeholder="Vues" name="vues" value="<?= $_POST['vues'] ?? ''?>">
        <div class="invalid-feedback"><?= $messageVues ?? "" ?></div>
    </div>

    <button type="submit" class="btn btn-primary">Créer le produit</button>
</form>
</main>
<?php
require "../inc/footer.php";
?>
