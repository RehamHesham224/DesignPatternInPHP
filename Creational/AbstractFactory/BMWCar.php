<?php

namespace Creational\AbstractFactory;

class BMWCar implements CarInterface
{
    private $price;
    public function __construct($price)
    {
        $this->price = $price;
    }

    public function CalculatePrice()
    {
        // TODO: Implement CalculatePrice() method.
        return $this->price+120000;
    }
}