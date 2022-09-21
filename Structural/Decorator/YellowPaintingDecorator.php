<?php

namespace Strctural\Decorator;

class YellowPaintingDecorator extends PaintingDecorator
{
    private const COLOR='yellow';
    public function paint(Car $car)
    {
        $car->setColor(self::COLOR);
        return parent::paint($car);
    }
}