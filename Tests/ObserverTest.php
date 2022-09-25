<?php

namespace Tests;

use Behavioural\Observer\Casher;
use Behavioural\Observer\Kitchen;
use Behavioural\Observer\Restaurant;
use Behavioural\Observer\Waiter;
use PHPUnit\Framework\TestCase;

class ObserverTest extends TestCase
{
    private $restaurant;
    private $waiter;
    private $kitchen;
    private $casher;
    protected function setUp(): void
    {
    $this->restaurant = new Restaurant();
    $this->kitchen = new Kitchen();
    $this->casher = new Casher();
    $this->waiter = new Waiter();
    $this->restaurant->attach($this->casher);
    $this->restaurant->attach($this->waiter);
    $this->restaurant->attach($this->kitchen);
    }
    public function testCanNotifyAllObserverWhenNewOrderIsComming(){
        $this->restaurant->addNewOrder();
        $this->assertEquals("Casher is ready for order number 1",$this->casher->getState());
        $this->assertEquals("Kitchen is ready for order number 1",$this->kitchen->getState());
        $this->assertEquals("Waiter is ready for order number 1",$this->waiter->getState());
    }
    public function testCanNotifyAllObserverWhenTwoOrderIsComming(){
        $this->restaurant->addNewOrder();
        $this->restaurant->addNewOrder();

        $this->assertEquals("Casher is ready for order number 2",$this->casher->getState());
        $this->assertEquals("Kitchen is ready for order number 2",$this->kitchen->getState());
        $this->assertEquals("Waiter is ready for order number 2",$this->waiter->getState());
    }

}