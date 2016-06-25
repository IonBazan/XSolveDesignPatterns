<?php

namespace DesignPatterns\Creational\FactoryMethod\Model;

class Product
{
    /** @var int */
    protected $price;

    /**
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param int $price
     * @return Product
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }
}
