<?php

namespace Creational\SimpleFactory;

class Car
{
    //no new
    public function __construct(private $type)
    {
    }
}