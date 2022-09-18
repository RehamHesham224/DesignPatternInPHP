<?php

namespace Creational\StaticFactory;

class StaticFactory
{
    // can't make mock class , i can't edit it except editing factory it self
    public static function factory(string $type)
    {
        if($type ==='BMW'){
            return new BMWCar();
        }elseif ($type === 'BENZ') {
            return new BENZCar();
        }
        return null;
    }

}