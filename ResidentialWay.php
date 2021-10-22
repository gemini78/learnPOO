<?php 
require_once 'HighWay.php';
require_once 'Vehicle.php';

final class ResidentialWay extends HighWay
{
    const NB_LANE = 2;
    const MAX_SPEED = 50;

    public function __construct()
    {
        parent::__construct(self::NB_LANE, self::MAX_SPEED);
    }

    public function addVehicle(Vehicle $vehicle)
    {
        // Because the parameter is typed Vehicle
        $this->currentVehicles[] = $vehicle;
    }   
}