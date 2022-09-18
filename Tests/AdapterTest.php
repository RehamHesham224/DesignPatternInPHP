<?php
namespace Tests;
use \PHPUnit\Framework\TestCase;
use Strctural\Adapter\Car;
use Strctural\Adapter\EngineAdapter;
use Strctural\Adapter\NormalEngine;
use Strctural\Adapter\TurboEngine;

class AdapterTest extends TestCase
{
    public function testCanStaryNormalEngine(){
        $engine=new NormalEngine();
        $car=new Car($engine);
        $this->assertEquals("normal Engine",$car->start());
    }
    public function testCanStaryTurboEngine(){
        $engine=new TurboEngine();
        $adapter=new EngineAdapter($engine);
        $car=new Car($adapter);
        $this->assertEquals("Turbo Engine",$car->start());
    }
}