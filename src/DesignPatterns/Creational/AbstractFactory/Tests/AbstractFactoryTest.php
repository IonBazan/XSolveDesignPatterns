<?php

namespace DesignPatterns\Creational\AbstractFactory\Tests;

use DesignPatterns\Creational\AbstractFactory\Factory\AbstractPizzaFactory;
use DesignPatterns\Creational\AbstractFactory\Factory\CapricciosaPizzaFactory;
use DesignPatterns\Creational\AbstractFactory\Factory\ProsciuttoPizzaFactory;
use DesignPatterns\Creational\AbstractFactory\Model\CapricciosaPizza;
use DesignPatterns\Creational\AbstractFactory\Model\Pizza;
use DesignPatterns\Creational\AbstractFactory\Model\ProsciuttoPizza;

class AbstractFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function factoriesProvider()
    {
        return [
            [new CapricciosaPizzaFactory(), CapricciosaPizza::class],
            [new ProsciuttoPizzaFactory(), ProsciuttoPizza::class],
        ];
    }

    /**
     * @param AbstractPizzaFactory $factory
     * @param string $expectedClassName
     *
     * @dataProvider factoriesProvider
     */
    public function testPizzaFactories(AbstractPizzaFactory $factory, $expectedClassName)
    {
        $pizza = $factory->getPizza('XXL');
        $this->assertInstanceOf(Pizza::class, $pizza);
        $this->assertInstanceOf($expectedClassName, $pizza);
    }
}
