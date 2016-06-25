<?php

namespace DesignPatterns\Creational\FactoryMethod\Tests;

use DesignPatterns\Creational\FactoryMethod\Factory\ProductFactoryMethod;
use DesignPatterns\Creational\FactoryMethod\Model\Rim;
use DesignPatterns\Creational\FactoryMethod\Model\Tyre;

class ProductFactoryMethodTest extends \PHPUnit_Framework_TestCase
{
    public function testProductFactory()
    {
        $factory = new ProductFactoryMethod();

        $product = $factory->getProduct('tyre', 120);
        $this->assertInstanceOf(Tyre::class, $product);

        $product = $factory->getProduct('rim', 240);
        $this->assertInstanceOf(Rim::class, $product);
    }
}
