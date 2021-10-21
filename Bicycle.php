<?php

class Bicycle
{
    private string $color;

    private int $currentSpeed;

    private int $nbSeats;

    private int $nbWheels;

    public function forward(): string
    {
        $this->currentSpeed = 15;

        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    
    public function getCurrentSpeed()
    {
        return $this->currentSpeed;
    }

    
    public function setCurrentSpeed($currentSpeed)
    {
        $this->currentSpeed = $currentSpeed;

    }

    public function getNbSeats()
    {
        return $this->nbSeats;
    }

  
    public function setNbSeats($nbSeats)
    {
        $this->nbSeats = $nbSeats;

        return $this;
    }

    public function getNbWheels()
    {
        return $this->nbWheels;
    }

    public function setNbWheels($nbWheels)
    {
        $this->nbWheels = $nbWheels;

        return $this;
    }
}