<?php

require dirname(__DIR__).'/autoload.php';
//Appel du routeur
use src\Utilities\Router;

$router = new Router();
$router->addRoute('/','index.php');
$router->addRoute('/inscription','register.php');
$template = $router->match();
if ($template != null) {
    require dirname(__DIR__) . "/templates/" . $template;
}else{
    throw new \Exception('Page Introuvable');
}