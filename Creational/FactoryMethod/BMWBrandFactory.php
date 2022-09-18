<?php

namespace Creational\FactoryMethod;

class BMWBrandFactory implements BrandFactoryInterface
{

    public function BuildBrand()
    {
        // TODO: Implement BuildBrand() method.
        return new BMWBrand();
    }
}