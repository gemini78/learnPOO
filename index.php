<?php 

require_once 'Car.php';
require_once 'Bicycle.php';

$car = new Car('red', 4 , 'nuclear');
$bike = new Bicycle();

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br>';
echo '<br>';
// Moving car
echo $car->forward();
echo '<br> Vitesse du de le voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse du de le voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
//var_dump($car);