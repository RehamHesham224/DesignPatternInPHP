<?php

namespace Tests;

use Creational\AbstractFactory\BMWCar;
use Creational\AbstractFactory\CarAbstractFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function testCanCreateBMWCar(){
    $carFactory=new CarAbstractFactory(200000);
    $myCar=$carFactory->createBMWCars();
    $this->assertInstanceOf(BMWCar::class,$myCar);
    }

}