<?php

namespace DesignPatterns\Creational\AbstractFactory\Model;

class ProsciuttoPizza extends Pizza
{
    /**
     * @param string $size
     */
    public function __construct($size)
    {
        $this->ingredients = ['mozarella', 'szynka', 'oliwki', 'bazylia'];
        $this->size = $size;
    }
}
