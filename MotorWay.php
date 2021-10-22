<?php 
require_once 'HighWay.php';
require_once 'Car.php';

final class MotorWay extends HighWay
{
    const NB_LANE = 4;
    const MAX_SPEED = 130;

    public function __construct()
    {
        parent::__construct(self::NB_LANE, self::MAX_SPEED);
    }

    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Car) {
            $this->currentVehicles[] = $vehicle;
        }
    }   
}