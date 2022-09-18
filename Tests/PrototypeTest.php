<?php
use PHPUnit\Framework\TestCase;
use Creational\Prototype\AutomaticCarPrototype;
use \Creational\Prototype\AbstractCarPrototype;

class PrototypeTest extends TestCase
{
    public function testCanCreateAutomaticCarWithClone(): void
    {
        $automaticCarPrototype=new AutomaticCarPrototype();
        for ($index=0; $index < 10; $index++) {
            $car= clone $automaticCarPrototype;
            $this->assertInstanceOf(AbstractCarPrototype::class, $car);
        }
    }
    public function testCanCreateManualCarWithClone(): void
    {
        $manualCarPrototype=new AutomaticCarPrototype();
        for ($index=0; $index < 10; $index++) {
            $car= clone $manualCarPrototype;
            $this->assertInstanceOf(AbstractCarPrototype::class, $car);
        }
    }
}