<?php
namespace Tests;

use Behavioural\Visitor\Cairo;
use Behavioural\Visitor\Covid19Traveler;
use Behavioural\Visitor\London;
use Behavioural\Visitor\Paris;
use Behavioural\Visitor\Traveller;
use PHPUnit\Framework\TestCase;

class VisitorTest extends TestCase
{
    private $tripPlan;
    protected function setUp(): void
    {
        $this->tripPlan[] = new Cairo();
        $this->tripPlan[] = new Paris();
        $this->tripPlan[] = new London();

    }

    public function testCanEGPassportTravelSomeCities()
    {
        $traveler = new Traveller('EG',500);
        foreach ($this->tripPlan as $tripCity){
            $tripCity->accept($traveler);
        }
        self::assertEquals(['Cairo'], $traveler->getTripHistory());
    }
    public function testCanEGPassportTravelAllCities()
    {
        $traveler = new Traveller('UK',5050);
        foreach ($this->tripPlan as $tripCity){
            $tripCity->accept($traveler);
        }
        self::assertEquals(['Cairo','Paris','London'], $traveler->getTripHistory());
    }

    public function testCanEGPassportTravelSomeCitiesAfterCovid()
    {
        $traveler = new Traveller('EG',500);
        $covidTraveller=new Covid19Traveler($traveler,true,false);
        foreach ($this->tripPlan as $tripCity){
            $tripCity->accept($covidTraveller);
        }
        self::assertEquals(['Cairo'], $covidTraveller->getTraveller()->getTripHistory());
    }

    public function testCanEGPassportTravelAllCitiesAfterCovid()
    {
        $traveler = new Traveller('UK',5050);
        $covidTraveller=new Covid19Traveler($traveler,true,true);
        foreach ($this->tripPlan as $tripCity){
            $tripCity->accept($covidTraveller);
        }
        self::assertEquals(['Cairo','Paris','London'], $covidTraveller->getTraveller()->getTripHistory());
    }
}