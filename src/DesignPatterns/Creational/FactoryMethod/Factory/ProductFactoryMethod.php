<?php

namespace DesignPatterns\Creational\FactoryMethod\Factory;

use DesignPatterns\Creational\FactoryMethod\Model\Rim;
use DesignPatterns\Creational\FactoryMethod\Model\Tyre;

class ProductFactoryMethod extends AbstractFactoryMethod
{
    /**
     * @inheritDoc
     */
    public function getProduct($type, $price)
    {
        switch ($type) {
            case 'tyre':
                return (new Tyre())->setPrice($price);
            case 'rim':
                return (new Rim())->setPrice($price);
            default:
                throw new \Exception(sprintf('Nie znam takiego produktu \'%s\'!', $type));
        }
    }
}
