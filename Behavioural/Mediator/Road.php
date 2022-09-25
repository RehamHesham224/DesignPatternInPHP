<?php

namespace Behavioural\Mediator;

abstract class Road
{
    public const STOP_EVENT='stop';
    public const MOVE_EVENT='move';
    public string $roadStatus='';
    private MediatorInterface $mediator;
    /**
     * @param MediatorInterface|null $mediator
     */
    public function setMediator(?MediatorInterface $mediator): void
    {
        $this->mediator = $mediator;
    }
    public function getRoadStatus(): string
    {
       return $this->roadStatus;
    }
    public function move(){
        $this->roadStatus=self::MOVE_EVENT;
    }
    public function stop(){
        $this->roadStatus=self::STOP_EVENT;
    }
    abstract public function getId():string;

}