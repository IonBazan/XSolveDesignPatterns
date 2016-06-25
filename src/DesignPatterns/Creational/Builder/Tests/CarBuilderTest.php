<?php

namespace DesignPatterns\Creational\Builder\Tests;

use DesignPatterns\Creational\Builder\Builder\CarBuilder;
use DesignPatterns\Creational\Builder\Builder\SportCarBuilder;
use DesignPatterns\Creational\Builder\Director\CarDirector;
use DesignPatterns\Creational\Builder\Model\Car;
use PHPUnit_Framework_MockObject_MockObject;

class CarBuilderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @param CarBuilder $builder
     * @param int $expectedEngine
     * @param int $expectedDoors
     *
     * @dataProvider builderProvider
     */
    public function testCarBuilder(CarBuilder $builder, $expectedEngine, $expectedDoors)
    {
        $director = new CarDirector($builder);
        $director->buildVehicle();
        $car = $director->getVehicle();

        $this->assertInstanceOf(Car::class, $car);
        $this->assertEquals($expectedDoors, $car->getDoors());
        $this->assertEquals($expectedEngine, $car->getEngine());
    }

    public function builderProvider()
    {
        return [
            [new CarBuilder(), 200, 4],
            [new SportCarBuilder(), 650, 2]
        ];
    }

}
