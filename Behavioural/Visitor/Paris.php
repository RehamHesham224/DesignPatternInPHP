<?php

namespace Behavioural\Visitor;

class Paris implements CityInterface
{

    public function accept(VisitorInterface $visitor): void
    {
        $visitor->visitParis($this);
    }

    public function calculateBudget(int $amount): bool
    {
        return $amount > 5000 ;
    }

    public function bookInOpera(): void
    {
        echo 'opera';
    }
}