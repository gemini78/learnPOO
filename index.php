<?php 

require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'Car.php';
require_once 'Bike.php';
require_once 'Skateboard.php';
require_once 'Truck.php';
require_once 'Bicycle.php';

const BR = '<br/>';

$motorWay       = new MotorWay;
$pedestrianWay  = new PedestrianWay;
$residentialWay = new ResidentialWay;

$car            = new Car('red', 4, 'fuel');
$skateboard     = new Skateboard("brown", 4);
$bike           = new Bike('pink', 2);
$bicycle        = new Bicycle('orange', 2);
$truck          = new Truck(10, 'black', 6, 'fuel');

echo "AVANT L'AJOUT" . BR;
echo "Nb d'élements pour MotorWay: " . count($motorWay->getCurrentVehicles());
echo BR;
echo "Nb d'élements pour PedestrianWay: " . count($pedestrianWay->getCurrentVehicles());
echo BR ;
echo "Nb d'élements pour ResidentialWay: " . count($residentialWay->getCurrentVehicles()) . BR;

echo BR . "Tentative d'ajout de 5 types de véhicule pour chacun des objets: motorWay, pedestrianWay et residentialWay ..." . BR;
$motorWay->addVehicle($bicycle);
$motorWay->addVehicle($bike);
$motorWay->addVehicle($car);
$motorWay->addVehicle($skateboard);
$motorWay->addVehicle($truck);

$pedestrianWay->addVehicle($bicycle);
$pedestrianWay->addVehicle($bike);
$pedestrianWay->addVehicle($car);
$pedestrianWay->addVehicle($skateboard);
$pedestrianWay->addVehicle($truck);

$residentialWay->addVehicle($bicycle);
$residentialWay->addVehicle($bike);
$residentialWay->addVehicle($car);
$residentialWay->addVehicle($skateboard);
$residentialWay->addVehicle($truck);


echo BR . "APRES L'AJOUT" . BR;
echo "Nb d'élements pour MotorWay: " . count($motorWay->getCurrentVehicles()) . BR;
echo "Nb d'élements pour PedestrianWay: " . count($pedestrianWay->getCurrentVehicles()) . BR;
echo "Nb d'élements pour ResidentialWay: " . count($residentialWay->getCurrentVehicles()) . BR;
