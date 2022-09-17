<?php


use Creational\AbstractFactory\BMWCar;
use \Creational\AbstractFactory\BenzCar;
use Creational\AbstractFactory\CarAbstractFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function testCanCreateBMWCar(){
    $carFactory=new CarAbstractFactory(200000);
    $myCar=$carFactory->createBMWCars();
    $this->assertInstanceOf(BMWCar::class,$myCar);
    }
    public function testCanCreateBenzCar(){
        $carFactory=new CarAbstractFactory(200000);
        $myCar=$carFactory->createBenzCars();
        $this->assertInstanceOf(BenzCar::class,$myCar);
    }

}