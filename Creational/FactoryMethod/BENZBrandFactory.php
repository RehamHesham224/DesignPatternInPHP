<?php

namespace Creational\FactoryMethod;

class BENZBrandFactory implements BrandFactoryInterface
{

    public function BuildBrand()
    {
        // TODO: Implement BuildBrand() method.
        return new BENZBrand();
    }
}