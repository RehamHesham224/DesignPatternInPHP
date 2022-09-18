<?php

namespace Strctural\Bridge;
use Strctural\Bridge\Car;

class BENZCar extends Car
{

    public function __construct(CarColor $carColor)
    {
        parent::__construct($carColor);
    }

    public function getProduct()
    {
        return sprintf('the car type is %s and the car color is %s', 'BENZ', $this->carColor->getColor());
    }
}