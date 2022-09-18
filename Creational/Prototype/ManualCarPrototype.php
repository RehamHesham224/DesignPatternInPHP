<?php

namespace Creational\Prototype;

class ManualCarPrototype extends  AbstractCarPrototype
{
    protected $model = "manualCar";

    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
}