<?php

namespace Creational\Builder;

use Creational\Builder\Models\Car;

class CarProducer
{
    private $builder;
    public function __construct(CarBuilderInterface $builder)
    {
        /** @var TYPE_NAME $this */
        $this->builder = $builder;
    }

    /**
     * @return Car
     */
    public function produceCar(): Car
    {
        $this->builder->createCar();
        $this->builder->addBody();
        $this->builder->addDoors();
        $this->builder->addEngine();
        $this->builder->addWheel();
        return $this->builder->getCar();
    }

}