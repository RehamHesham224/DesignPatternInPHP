<?php
 namespace Tests;

 use Behavioural\State\OrderContext;
 use Behavioural\State\StateEnum;
 use Behavioural\State\User;
 use PHPUnit\Framework\TestCase;


 class StateTest extends TestCase
{
    public function testCanCreateOrder(){
        $user = new User('reham','4040',true);
        $order=new OrderContext($user);
        self::assertEquals(StateEnum::CREATED_STATE, $order->getState()->getState());
    }
    public function testCanMoveOrderFromCreatedToArchieved(){
        $user = new User('reham','4040',true);
        $order=new OrderContext($user);
        $order->orderProceed();
        $order->orderProceed();
        $order->orderProceed();
        $order->orderProceed();
        $order->orderProceed();
        self::assertEquals(StateEnum::ARCHIVED_STATE, $order->getState()->getState());
    }
     public function testCanMoveOrderFromCanceledToArchieved(){
         $user = new User('reham','4040',false);
         $order=new OrderContext($user);
         $order->orderProceed();
         $order->orderProceed();
         $order->orderProceed();
         self::assertEquals(StateEnum::CANCELLED_STATE, $order->getState()->getState());
     }
}