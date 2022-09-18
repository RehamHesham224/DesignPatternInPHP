<?php

namespace Creational\Builder\Models;

class BENZCar extends Car
{
    private array $data=[];

    /**
     * @param $name
     * @param $value
     */
    public function setParts($name, $value)
    {
        $this->data[$name]=$value;
    }

}