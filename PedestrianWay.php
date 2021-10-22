<?php 
require_once 'HighWay.php';
require_once 'Bike.php';
require_once 'Skateboard.php';

final class PedestrianWay extends HighWay
{
    const NB_LANE = 1;
    const MAX_SPEED = 10;

    public function __construct()
    {
        parent::__construct(self::NB_LANE, self::MAX_SPEED);
    }

    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Bike || $vehicle instanceof Skateboard) {
            $this->currentVehicles[] = $vehicle;
        }
    }   
}