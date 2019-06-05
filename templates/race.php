<?php
require dirname(__DIR__) . '/autoload.php';
$vehicle = new Vehicle("renault","Essence", 4);
$vehicle->go(15);
$vehicle->go(17);
var_dump($vehicle);

$vehicle2 = new Vehicle("Dacia","Diesel", 4);
$vehicle2->go(15);
$vehicle2->go(17);
var_dump($vehicle2);

$airbusa380 = new Plane('airbus','kerozène',22);
$airbusa380->setMaxAlt('20000');
var_dump($airbusa380);
echo $airbusa380->getNbWheels().' roues';


$boat = new Boat('bombardier','sp95',0);
$boat->setPorts(['Marseille','Nantes','Boulognes-Sur-Mer','Nice']);
echo "<br/>";
echo "Marque :".$boat->getBrand();
echo "<br/>";
echo "Moteur :".$boat->getMotor();
echo "<br/>";
echo "Nbre de roues :".$boat->getNbWheels()." roues";
echo "<br/>";
echo "Ports autorisés : ".$boat->getPorts();
echo "<br/>";
$boat->go(200);
echo "<br/>";
$boat->addPorts('Cannes');
echo "Ports autorisés : ".$boat->getPorts();
$boat->removePorts('Cannes');
echo "<br/>";
echo "Ports autorisés : ".$boat->getPorts();


