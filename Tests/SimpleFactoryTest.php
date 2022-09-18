<?php
namespace Tests;

use Creational\SimpleFactory\Car;
use Creational\SimpleFactory\CarFactory;
use PHPUnit\Framework\TestCase;

class SimpleFactoryTest extends TestCase
{
    public function testCanCreateCar(){
        $carFactory = new CarFactory();
        $BMWCar=$carFactory->createCar('BMW');
        $this->assertInstanceOf(Car::class, $BMWCar);
    }

}