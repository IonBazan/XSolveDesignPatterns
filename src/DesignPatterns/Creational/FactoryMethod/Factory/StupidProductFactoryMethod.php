<?php

namespace DesignPatterns\Creational\FactoryMethod\Factory;

use DesignPatterns\Creational\FactoryMethod\Model\Rim;
use DesignPatterns\Creational\FactoryMethod\Model\Tyre;

class StupidProductFactoryMethod extends AbstractFactoryMethod
{
    /**
     * @inheritDoc
     */
    public function getProduct($type, $price)
    {
        switch ($type) {
            case 'tyre':
                return (new Rim())->setPrice($price);
            case 'rim':
                return (new Tyre())->setPrice($price);
            default:
                throw new \Exception(sprintf('Nie znam takiego produktu \'%s\'!', $type));
        }
    }
}
