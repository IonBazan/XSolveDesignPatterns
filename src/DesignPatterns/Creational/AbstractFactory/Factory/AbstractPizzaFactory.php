<?php

namespace DesignPatterns\Creational\AbstractFactory\Factory;

use DesignPatterns\Creational\AbstractFactory\Model\Pizza;


/**
 * Class AbstractPizzaFactory
 *
 * Delivers a nice way of creating Pizzas
 *
 * @package DesignPatterns\Creational\AbstractFactory\Factory
 */
abstract class AbstractPizzaFactory
{
    /**
     * @param string $size
     * @return Pizza
     */
    abstract public function getPizza($size);
}
