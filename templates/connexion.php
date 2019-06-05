<?php
//INCLUSION EN TETE + NAVBAR
require 'inc/header.php';

//INCLUSION TRAITEMENT formulaire
require dirname(__DIR__) . '/src/Controller/connexionController.php';
?>
<main class="text-center container w-25">
    <?php
    if (!isset($_SESSION['username'])) {
        ?>
        <form method="post">

                <h1 class="h3 mb-3 font-weight-normal">Se connecter</h1>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email"
                           class="form-control <?= (isset($errorMessageEmail) && !empty($errorMessageEmail)) ? 'is-invalid' : '' ?>"
                           id="email" name="email" value="<?= $_POST['email']  ?? '' ?>">
                    <div class="invalid-feedback"><?= $errorMessageEmail ?? "" ?></div>
                </div>

            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password"
                       class="form-control <?= (isset($errorMessagePassword) && !empty($errorMessagePassword)) ? 'is-invalid' : '' ?>"
                       id="password" name="password" value="<?= $_POST['password']  ?? '' ?>">
                <div class="invalid-feedback"><?= $errorMessagePassword ?? "" ?></div>
            </div>



            <input type="submit" value="Se connecter" class="btn btn-outline-success">
        </form>
        <?php
    } else {
        echo "Hello ".$_SESSION['username'];
        echo "<br><a href='?exit=yes'>Se déconnecter</a>";
    }
    ?>
</main>
