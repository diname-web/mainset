<?php
declare(strict_types=1);

namespace Builder\Parts;

use Builder\Builder;

class Director
{
    public function build(Builder $builder): Vehicle
    {
        $builder->createVehicle();
        $builder->addEngine();
        $builder->addDoors();
        $builder->addWheel();

        return $builder->getVehicle();
    }
}