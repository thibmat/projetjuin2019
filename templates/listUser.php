<?php
session_start();
use src\Controller\ListUserController;

require dirname(__DIR__). '/autoload.php';
$controller = new ListUserController();
if (isset($_GET['action']) && $_GET['action'] == 'delete')
{
    $controller->removeUser($_GET['id']);

}

$users = $controller->listUser();
extract($users);

require 'inc/header.php';
?>
<main class="container">
    <table class="table table-hover table-dark">
        <thead>
        <tr>
            <th scope="col">PSEUDO</th>
            <th scope="col">EMAIL</th>
            <th scope="col">PASSWORD</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user):?>
            <tr>
                <th><?= $user->getUsername() ?></th>
                <td><?= $user->getEmail() ?></td>
                <td><?= $user->getPassword() ?></td>
                <td><a href="?action=delete&id=<?= $user->getId()?>">Supprimer</a></td>
            </tr>
        <?php
        endforeach;
        ?>
        </tbody>
    </table>
</main>