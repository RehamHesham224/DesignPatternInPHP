<?php

namespace Behavioural\Mediator;

class LeftRoad extends Road
{
    const ID='LEFT';
    public function getId(): string
    {
        return self::ID;
    }
}