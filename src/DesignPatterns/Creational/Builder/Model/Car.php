<?php

namespace DesignPatterns\Creational\Builder\Model;

class Car implements Vehicle
{
    /** @var int */
    protected $doors;
    
    /** @var int */
    protected $wheels;

    /** @var int */
    protected $engine;

    /**
     * @return int
     */
    public function getDoors()
    {
        return $this->doors;
    }

    /**
     * @param int $doors
     * @return Car
     */
    public function setDoors($doors)
    {
        $this->doors = $doors;

        return $this;
    }

    /**
     * @return int
     */
    public function getWheels()
    {
        return $this->wheels;
    }

    /**
     * @param int $wheels
     * @return Car
     */
    public function setWheels($wheels)
    {
        $this->wheels = $wheels;

        return $this;
    }

    /**
     * @return int
     */
    public function getEngine()
    {
        return $this->engine;
    }

    /**
     * @param int $engine
     * @return Car
     */
    public function setEngine($engine)
    {
        $this->engine = $engine;

        return $this;
    }
}
