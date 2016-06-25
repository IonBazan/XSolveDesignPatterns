<?php

namespace DesignPatterns\Creational\AbstractFactory\Model;

abstract class Pizza
{
    /** @var string[] */
    protected $ingredients = [];

    /** @var string */
    protected $size;

    /**
     * @return string[]
     */
    public function getIngredients()
    {
        return $this->ingredients;
    }

    /**
     * @param string $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * @return string
     */
    public function getSize()
    {
        return $this->size;
    }
}
