<?php

namespace Builder;

use Builder\Builder;
use Builder\Parts\Truck;
use Builder\Parts\Vehicle;

class TruckBuilder implements Builder
{
    private Truck $truck;

    public function createVehicle(): void
    {
        $this->truck = new Truck();
    }

    public function addWheel(): void
    {
        // TODO: Implement addWheel() method.
    }

    public function addEngine(): void
    {
        // TODO: Implement addEngine() method.
    }

    public function addDoors(): void
    {
        // TODO: Implement addDoors() method.
    }

    public function getVehicle(): Vehicle
    {
        return $this->truck;
    }
}