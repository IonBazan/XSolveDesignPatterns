<?php

namespace DesignPatterns\Creational\Builder\Builder;

class SportCarBuilder extends CarBuilder
{
    public function mountDoors()
    {
        $this->car->setDoors(2);
    }

    public function mountEngine()
    {
        $this->car->setEngine(650);
    }
}
