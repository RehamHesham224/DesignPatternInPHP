<?php
namespace Tests;

use \PHPUnit\Framework\TestCase;
use Strctural\Bridge\BENZCar;
use Strctural\Bridge\BlueCar;
use Strctural\Bridge\BMWCar;
use Strctural\Bridge\RedCar;

class BridgeTest extends TestCase
{
    public function testCanCreateBlueBMWCar(){
        $carColor=new BlueCar();
        $BMWCar=new BMWCar($carColor);
        $this->assertEquals("the car type is BMW and the car color is blue",$BMWCar->getProduct());
    }
    public function testCanCreateRedBENZCar(){
        $carColor=new RedCar();
        $BENZCar=new BENZCar($carColor);
        $this->assertEquals("the car type is BENZ and the car color is red",$BENZCar->getProduct());
    }
}