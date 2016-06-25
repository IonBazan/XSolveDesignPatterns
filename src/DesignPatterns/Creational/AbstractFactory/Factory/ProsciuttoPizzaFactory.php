<?php

namespace DesignPatterns\Creational\AbstractFactory\Factory;

use DesignPatterns\Creational\AbstractFactory\Model\ProsciuttoPizza;

class ProsciuttoPizzaFactory extends AbstractPizzaFactory
{
    /**
     * @inheritDoc
     */
    public function getPizza($size)
    {
        return new ProsciuttoPizza($size);
    }
}
