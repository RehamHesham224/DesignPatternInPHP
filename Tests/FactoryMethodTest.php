<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use Creational\FactoryMethod\BMWBrandFactory;
use Creational\FactoryMethod\BMWBrand;
use Creational\FactoryMethod\BENZBrandFactory;
use Creational\FactoryMethod\BENZBrand;
class FactoryMethodTest extends TestCase
{
    public function testCanCreateBMWBrand(){
        $brandFactory=new BMWBrandFactory();
        $carBrand=$brandFactory->BuildBrand();
        $this->assertInstanceOf(BMWBrand::class, $carBrand);

    }
    public function testCanCreateBENZBrand(){
        $brandFactory=new BENZBrandFactory();
        $carBrand=$brandFactory->BuildBrand();
        $this->assertInstanceOf(BENZBrand::class, $carBrand);

    }
}