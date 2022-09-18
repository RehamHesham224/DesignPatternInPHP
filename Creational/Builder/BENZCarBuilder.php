<?php

namespace Creational\Builder;

use Creational\Builder\Models\BENZCar;
use Creational\Builder\Models\Car;

class BENZCarBuilder implements CarBuilderInterface
{
    /**
     * @var Car $type
     */
    private Car $type;
    public function createCar()
    {
        // TODO: Implement createCar() method.
        $this->type = new BENZCar();
    }

    public function addBody()
    {
        // TODO: Implement addBody() method.
        $this->type->setParts('Body','body');
    }

    public function addDoors()
    {
        // TODO: Implement addDoors() method.
        $this->type->setParts('Doors','BENZ-doors');
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
        return $this->type;
        // TODO: Implement getCar() method.
    }
}