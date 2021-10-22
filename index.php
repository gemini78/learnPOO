<?php 

require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Truck.php';

const FULL = 8;

$car = new Car('red', 4 , 'electric');
$bike = new Bicycle('green',1);
$truck = new Truck(FULL, 'blue',6,'fuel');

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
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();

echo '<br>';
echo '<br>';
// Moving truck
echo $truck->forward();
echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck->brake();
echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck->brake();
echo '<br> Statut du chargement du camion : ' . $truck->isFull() . ' ...';
echo '<br> Le camion fait le plein...';
$truck->setLoading(FULL);
echo '<br> Chargement terminé.';
echo '<br> Statut du chargement du camion : ' . $truck->isFull() . ' ...';
