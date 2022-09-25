<?php

namespace Behavioural\Visitor;

interface CityInterface
{
    public function accept(VisitorInterface $visitor):void;
}