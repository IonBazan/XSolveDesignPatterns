<?php

namespace DesignPatterns\Creational\Builder\Director;

use DesignPatterns\Creational\Builder\Builder\CarBuilder;
use DesignPatterns\Creational\Builder\Model\Car;

class CarDirector implements VehicleDirector
{
    /** @var CarBuilder */
    protected $builder;

    /**
     * @param CarBuilder $builder
     */
    public function __construct(CarBuilder $builder)
    {
        $this->builder = $builder;
    }

    public function buildVehicle()
    {
        $this->builder->mountDoors();
        $this->builder->mountWheels();
        $this->builder->mountEngine();
    }

    /**
     * @return Car
     */
    public function getVehicle()
    {
        return $this->builder->getVehicle();
    }
}
