<?php

interface Car{
    function maxSpeed();
    function fuelConsumption();
}

interface Ship{
    function numberOfEngines();
    function crewCount();
}

class Mercedes implements Car{
    protected $maxSpeed=200;
    protected $fuelConsumption=6;
    
    function maxSpeed() {
        return $this->maxSpeed;
    }
    
    function fuelConsumption() {
        return $this->fuelConsumption;
    }
}

class AmphibiousMercedes extends Mercedes implements Car,Ship{
    private $numberOfEngines;
    private $crewCount;
    
    function maxSpeed() {
        return $this->maxSpeed;
    }
    
    function fuelConsumption() {
        return $this->fuelConsumption;
    }
    
    function numberOfEngines() {
        return $this->numberOfEngines;
    }
    
    function crewCount() {
        return $this->crewCount;
    }
}

$laivas= new AmphibiousMercedes;

echo $laivas->maxSpeed();
