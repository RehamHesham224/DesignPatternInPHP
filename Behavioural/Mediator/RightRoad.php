<?php

namespace Behavioural\Mediator;

class RightRoad  extends Road
{
    const ID='RIGHT';
    public function getId(): string
    {
        return self::ID;
    }
}