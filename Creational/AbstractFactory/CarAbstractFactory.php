<?php

namespace Creational\AbstractFactory;

class CarAbstractFactory
{
    private $tax=1000;
    private $price;
    public function __construct($price)
    {
        $this->price=$price;
    }

    public function createBMWCars(): BMWCar
    {
        return new BMWCar($this->price);
    }
    public function createBenzCars(): BenzCar
    {
        return new BenzCar($this->price,$this->tax);
    }
}