<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use Creational\Builder\BMWCarBuilder;
use Creational\Builder\BENZCarBuilder;
use \Creational\Builder\CarProducer;
use \Creational\Builder\Models\BMWCar;
use \Creational\Builder\Models\BENZCar;
class BuilderTest extends  TestCase
{
    public function testProduceBMWCar(){
        $BMWCarBuilder=new BMWCarBuilder();
        $carProducer=new CarProducer($BMWCarBuilder);
        $myCar=$carProducer->produceCar();
        $this->assertInstanceOf(BMWCar::class, $myCar);

    }
    public function testProduceBenzCar(){
        $BENZCarBuilder=new BENZCarBuilder();
        $carProducer=new CarProducer($BENZCarBuilder);
        $myCar=$carProducer->produceCar();
        $this->assertInstanceOf(BENZCar::class, $myCar);

    }

}