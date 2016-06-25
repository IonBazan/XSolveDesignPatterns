<?php

namespace DesignPatterns\Creational\AbstractFactory\Model;

class CapricciosaPizza extends Pizza
{
    /**
     * @param string $size
     */
    public function __construct($size)
    {
        $this->ingredients = ['mozarella', 'pieczarki', 'szynka'];
        $this->size = $size;
    }
}
