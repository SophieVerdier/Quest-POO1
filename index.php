<?php
require_once 'Car.php';
require_once 'Bicycle.php';

$car = new Car('blue', 5, 'diesel'); 
echo $car->start();
echo $car->forward();
echo $car->brake();
var_dump($car);


$bike = new Bicycle();
$bike->color = 'blue';
$bike->currentSpeed = 0;
var_dump($bike);

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';

echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
