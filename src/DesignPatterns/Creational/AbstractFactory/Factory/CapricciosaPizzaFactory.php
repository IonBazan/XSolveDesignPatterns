<?php

namespace DesignPatterns\Creational\AbstractFactory\Factory;

use DesignPatterns\Creational\AbstractFactory\Model\CapricciosaPizza;

class CapricciosaPizzaFactory extends AbstractPizzaFactory
{
    /**
     * @inheritDoc
     */
    public function getPizza($size)
    {
        return new CapricciosaPizza($size);
    }
}
