<?php

namespace Creational\Builder;

use Creational\Builder\Models\BMWCar;
use Creational\Builder\Models\Car;

class BMWCarBuilder implements CarBuilderInterface
{
    /**
     * @var Car $type
     */
    private Car $type;
    public function createCar()
    {
        // TODO: Implement createCar() method.
        $this->type = new BMWCar();
    }

    public function addBody()
    {
        // TODO: Implement addBody() method.
        $this->type->setParts('Body','body');
    }

    public function addDoors()
    {
        // TODO: Implement addDoors() method.
        $this->type->setParts('Doors','BMW-doors');
    }

    public function addEngine()
    {
        // TODO: Implement addEngine() method.
        $this->type->setParts('Engine','engine');
    }

    public function addWheel()
    {
        // TODO: Implement addWheel() method.
        $this->type->setParts('Wheel','wheel');
    }

    public function getCar()
    {
        // TODO: Implement getCar() method.
        return $this->type;
    }
}