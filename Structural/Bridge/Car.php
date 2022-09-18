<?php

namespace Strctural\Bridge;

abstract class Car
{
    protected ?CarColor $carColor;

    public function __construct(CarColor $carColor = null)
    {
        $this->carColor = $carColor;
    }

    abstract public function getProduct();

}