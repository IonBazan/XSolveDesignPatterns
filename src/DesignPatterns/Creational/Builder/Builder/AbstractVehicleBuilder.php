<?php

namespace DesignPatterns\Creational\Builder\Builder;

use DesignPatterns\Creational\Builder\Model\Vehicle;

abstract class AbstractVehicleBuilder
{
    /**
     * @return Vehicle
     */
    abstract public function getVehicle();
}
