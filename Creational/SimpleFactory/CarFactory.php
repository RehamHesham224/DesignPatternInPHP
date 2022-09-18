<?php

namespace Creational\SimpleFactory;

class CarFactory
{
    public function createCar($type): Car
    {
        return new Car($type);
    }

}