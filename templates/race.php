<?php


use src\Vehicles\Car;
use src\Vehicles\Moto;
use src\Vehicles\Plane;
use src\Vehicles\Supercopter;

require dirname(__DIR__) . '/autoload.php';

// Création de motos
$moto = new Moto('Triumph', 'essence');
$moto2 = new Moto('Suzuki', 'essence', 30000);

var_dump($moto);
var_dump($moto2);

// Création de voiture
$car = new Car('207CC', 'essence', 250000);
$car2 = new Car('Mini Cooper', 'essence');

var_dump($car);
var_dump($car2);


/*************************************************************/
/*****      On fait avancer les véhicules roulants      ******/
/*************************************************************/

$moto->move(25);
$moto2->move(1000);

$car->move(30);
$car2->move(555);

$plane = new Plane('Boeing','Kerosene',100);
$helico = new Supercopter('JENSAIRIEN','JENESAISPAS', 0, 0);

var_dump($plane);
var_dump($helico);
$plane->move(5000);
var_dump($plane);
$helico->move(100);
var_dump($helico);




