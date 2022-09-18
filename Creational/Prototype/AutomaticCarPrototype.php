<?php

namespace Creational\Prototype;

class AutomaticCarPrototype extends  AbstractCarPrototype
{
    protected $model = "automaticCar";
    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
}