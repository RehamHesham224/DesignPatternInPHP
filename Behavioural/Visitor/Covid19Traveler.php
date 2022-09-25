<?php

namespace Behavioural\Visitor;

class Covid19Traveler implements VisitorInterface
{
    private Traveller $traveller;
    private bool $pcr;
    private bool $covidPass;

    public function __construct(Traveller $traveller, bool $pcr , bool $covidPass)
    {
        $this->traveller = $traveller;
        $this->pcr = $pcr;
        $this->covidPass = $covidPass;
    }

    public function visitCairo(Cairo $cairo)
    {
        if($this->pcr){
            $this->traveller->visitCairo($cairo);
        }
    }

    public function visitParis(Paris $Paris)
    {
        if($this->covidPass){
            $this->traveller->visitParis($Paris);
        }
    }

    public function visitLondon(London $London)
    {
        if($this->covidPass && $this->pcr) {
        $this->traveller->visitLondon($London);
        }
    }

    /**
     * @return Traveller
     */
    public function getTraveller(): Traveller
    {
        return $this->traveller;
    }

}