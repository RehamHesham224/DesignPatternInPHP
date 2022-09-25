<?php

namespace Behavioural\Visitor;

class Traveller implements VisitorInterface
{
    private string $passport;
    private int $budget;
    private array $tripHistory = [];


    public function __construct( string $passport, int $budget)
    {
        $this->passport = $passport;
        $this->budget = $budget;
    }

    public function visitCairo(Cairo $cairo)
    {
        $this->tripHistory[] = 'Cairo';
        $cairo->visitPyramids();
    }

    public function visitLondon(London $landon)
    {
        if($landon->allowToVisit($this->passport))
        {
            $this->tripHistory[] = 'London';
            $landon->goToBigBen();
        }
    }

    public function visitParis(Paris $paris)
    {
        if($paris->calculateBudget($this->budget))
        {
            $this->tripHistory[] = 'Paris';
            $paris->bookInOpera();
        }
    }

    /**
     * @return array
     */
    public function getTripHistory(): array
    {
        return $this->tripHistory;
    }
}