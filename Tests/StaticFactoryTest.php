<?php


use Creational\StaticFactory\BENZCar;
use Creational\StaticFactory\BMWCar;
use Creational\StaticFactory\StaticFactory;
use PHPUnit\Framework\TestCase;

class StaticFactoryTest extends TestCase
{
    public function testCanCreateBMWCar(){
        $this->assertInstanceOf(BMWCar::class,StaticFactory::factory('BMW'));
    }
    public function testCanCreateBENZCar(){
        $this->assertInstanceOf(BENZCar::class,StaticFactory::factory('BENZ'));
    }

}