<?php

namespace DesignPatterns\Creational\Builder\Builder;

use DesignPatterns\Creational\Builder\Model\Car;

class CarBuilder extends AbstractVehicleBuilder
{
    /** @var Car */
    protected $car;

    public function __construct()
    {
        $this->car = new Car();
    }

    public function mountWheels()
    {
        $this->car->setWheels(4);
    }

    public function mountDoors()
    {
        $this->car->setDoors(4);
    }

    public function mountEngine()
    {
        $this->car->setEngine(200);
    }

    /**
     * @return Car
     */
    public function getVehicle()
    {
        return $this->car;
    }
}
