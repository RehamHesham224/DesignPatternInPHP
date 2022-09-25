<?php
namespace Tests;

use Behavioural\Mediator\LeftRoad;
use Behavioural\Mediator\RightRoad;
use Behavioural\Mediator\Road;
use Behavioural\Mediator\RoadLightMediator;
use PHPUnit\Framework\TestCase;

class MeditorTest extends TestCase
{
    private $lightMediator;
    private $leftRoad;
    private $rightRoad;
    protected function setUp(): void
    {
        $this->leftRoad=new LeftRoad();
        $this->rightRoad=new RightRoad();
        $this->lightMediator=new RoadLightMediator($this->rightRoad, $this->leftRoad);
    }
    public function testCAnStopRightRoadBasedOnLeftRoad()
    {
    $this->lightMediator->action($this->leftRoad,Road::MOVE_EVENT);
    $this->assertEquals($this->rightRoad->getRoadStatus(),'stop');

    }
    public function testCanMoveRightRoadBasedOnLeftRoad()
    {
        $this->lightMediator->action($this->leftRoad,Road::STOP_EVENT);
        $this->assertEquals($this->rightRoad->getRoadStatus(),'move');

    }
    public function testCAnStopLeftRoadBasedOnRightRoad()
    {
        $this->lightMediator->action($this->rightRoad,Road::STOP_EVENT);
        $this->assertEquals($this->leftRoad->getRoadStatus(),'move');

    }
    public function testCAnMoveLeftRoadBasedOnRightRoad()
    {
        $this->lightMediator->action($this->rightRoad,Road::MOVE_EVENT);
        $this->assertEquals($this->leftRoad->getRoadStatus(),'stop');

    }
}