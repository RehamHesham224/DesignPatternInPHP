<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use Strctural\Decorator\BluePaintingDecorator;
use Strctural\Decorator\Car;
use Strctural\Decorator\Painting;
use Strctural\Decorator\RedPaintingDecorator;
use Strctural\Decorator\YellowPaintingDecorator;

class DecoratorTest extends TestCase
{
    public function testCanPaintCarWithRedBlueColor(){
        $car = new Car();
        $painting= new Painting();
        $painting= new BluePaintingDecorator($painting);
        $painting= new RedPaintingDecorator($painting);
        $painting->paint($car);
        // $this->addToAssertionCount(1);

        $this->assertEquals('redblue', $car->getColor());
    }
    public function testCanPaintCarWithYellowBlueColor(){
        $car = new Car();
        $painting= new Painting();
        $painting= new BluePaintingDecorator($painting);
        $painting= new YellowPaintingDecorator($painting);
        $painting->paint($car);
        // $this->addToAssertionCount(1);

        $this->assertEquals('yellowblue', $car->getColor());
    }
}