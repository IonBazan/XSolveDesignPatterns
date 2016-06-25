<?php

namespace DesignPatterns\Creational\Builder\Tests;

use DesignPatterns\Creational\Builder\Builder\CarBuilder;
use DesignPatterns\Creational\Builder\Director\CarDirector;
use DesignPatterns\Creational\Builder\Model\Car;

class CarDirectorTest extends \PHPUnit_Framework_TestCase
{
    public function testCarDirector()
    {
        $builder = $this->getCarBuilderMock();
        $builder->expects($this->once())->method('mountDoors');
        $builder->expects($this->once())->method('mountWheels');
        $builder->expects($this->once())->method('mountEngine');
        $builder->expects($this->once())->method('getVehicle')->willReturn(new Car());

        $director = new CarDirector($builder);
        $director->buildVehicle();
        $car = $director->getVehicle();
        $this->assertInstanceOf(Car::class, $car);
    }

    /**
     * @return CarBuilder|\PHPUnit_Framework_MockObject_MockObject
     */
    protected function getCarBuilderMock()
    {
        return $this->getMockBuilder(CarBuilder::class)->getMock();
    }
}
