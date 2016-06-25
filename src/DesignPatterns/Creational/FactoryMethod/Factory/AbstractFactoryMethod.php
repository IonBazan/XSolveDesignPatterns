<?php

namespace DesignPatterns\Creational\FactoryMethod\Factory;

use DesignPatterns\Creational\FactoryMethod\Model\Product;

abstract class AbstractFactoryMethod
{
    /**
     * @param string $type
     * @param int $price
     * @return Product
     * @throws \Exception when product type is not valid
     */
    abstract public function getProduct($type, $price);
}
