<?php

namespace Creational\Builder\Models;

Abstract class Car
{
    abstract function setParts($name, $value);
}