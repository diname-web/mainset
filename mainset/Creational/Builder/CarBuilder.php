<?php

namespace Builder;

use Builder\Parts\Car;
use Builder\Parts\Door;
use Builder\Parts\Engine;
use Builder\Parts\Wheel;
use Builder\Parts\Vehicle;

class CarBuilder implements Builder
{
    private Car $car;

    public function createVehicle(): void
    {
        $this->car = new Car();
    }

    public function addWheel(): void
    {
       $this->car->setPart('wheelLF', new Wheel());
       $this->car->setPart('wheelRF', new Wheel());
       $this->car->setPart('wheelLR', new Wheel());
       $this->car->setPart('wheelRR', new Wheel());
    }

    public function addEngine(): void
    {
        $this->car->setPart('engine', new Engine());
    }

    public function addDoors(): void
    {
        $this->car->setPart('rightDoor', new Door());
    }

    public function getVehicle(): Vehicle
    {
        return $this->car;
    }
}