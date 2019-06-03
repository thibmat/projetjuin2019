<?php
require 'autoload.php';

$ballon = new Produit ();
$ballon->name = "ballon";
$copieBallon = $ballon;
$ballon->name = 'Ballon de volley';
var_dump($copieBallon);