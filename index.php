<?php
require_once 'Car.php';
require_once 'Bicycle.php';

$car = new Car('blue', 5, 'diesel'); 
echo $car->start();
echo $car->forward();
echo $car->brake();
var_dump($car);


$bike = new Bicycle();
echo $bike->forward();
echo $bike->brake();
var_dump($bike);

require_once 'Truck.php';
$truck = new Truck('green', 4, 'electric', 20);
$truck->setLoad(20);
echo $truck->forward();
echo $truck->getFilling();
var_dump($truck);
