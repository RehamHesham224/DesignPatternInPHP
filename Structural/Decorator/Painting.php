<?php

namespace Strctural\Decorator;

class Painting implements PaintingInterface
{
    public function paint(Car $car)
    {
        return $car;
    }
}