<?php

namespace Behavioural\Visitor;

class London implements CityInterface
{

    public function accept(VisitorInterface $visitor): void
    {
        $visitor->visitLondon($this);
    }
    public function allowToVisit(string $passport):bool
    {
        return in_array($passport, ['UK','FE']);
    }
    public function goToBigBen():void
    {
        echo "Big ben";
    }
}