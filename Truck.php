<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    private int $capacity;
    private int $loading = 0;
    private string $energy;
    
    public function __construct(int $capacity, string $color,int $nbSeats,string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->setCapacity($capacity);
    }

    public function getCapacity()
    {
        return $this->capacity;
    }

    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;

        return $this;
    }

    public function getEnergy()
    {
        return $this->energy;
    }

    public function setEnergy($energy)
    {
        $this->energy = $energy;

        return $this;
    }

    public function isFull(): string 
    {
        if($this->capacity == $this->loading) {
            return 'full';
        }
        return 'in filling';
    }
}