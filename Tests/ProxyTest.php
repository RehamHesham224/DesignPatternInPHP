<?php
namespace Tests;
use PHPUnit\Framework\TestCase;
use Strctural\Proxy\ATMProxy;

class ProxyTest extends TestCase
{
    public function testCanDepositeFromATM(){
        $proxy=new ATMProxy();
        $proxy->deposit(1000);
        $proxy->deposit(500);
        self::assertEquals(1500, $proxy->getBalance());
    }
    public function testCanWithdrawFromATM(){
        $proxy=new ATMProxy();
        $proxy->deposit(1000);
        $proxy->deposit(5000);
        $proxy->withdraw(2000);
        self::assertEquals(4000, $proxy->getBalance());
    }
}