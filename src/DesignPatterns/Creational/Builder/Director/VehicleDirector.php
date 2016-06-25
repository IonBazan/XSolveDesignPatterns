<?php

namespace DesignPatterns\Creational\Builder\Director;

use DesignPatterns\Creational\Builder\Model\Vehicle;

interface VehicleDirector
{
    public function buildVehicle();

    /**
     * @return Vehicle
     */
    public function getVehicle();
}
