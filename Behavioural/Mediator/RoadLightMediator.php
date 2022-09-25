<?php

namespace Behavioural\Mediator;

class RoadLightMediator implements MediatorInterface
{
    public Road $rightRoad;
    public Road $leftRoad;

    public function __construct(Road $rightRoad, Road $leftRoad)
    {
        $this->rightRoad = $rightRoad;
        $this->rightRoad->setMediator($this);
        $this->leftRoad = $leftRoad;
        $this->leftRoad->setMediator($this);
    }

    public function action(Road $road, string $event)
    {
        if($road->getId()==="LEFT") {
            if($event === Road::MOVE_EVENT){
                $this->rightRoad->stop();
            }else{
                $this->rightRoad->move();
            }
        }else if($road->getId()==="RIGHT") {
            if($event === Road::MOVE_EVENT){
                $this->leftRoad->stop();
            }else{
                $this->leftRoad->move();
            }
        }
    }
}