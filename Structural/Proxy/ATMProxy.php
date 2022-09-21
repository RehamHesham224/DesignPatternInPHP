<?php

namespace Strctural\Proxy;

class ATMProxy extends BankAccount implements BankAccountInterface
{
    //cache
    private $balance = null;
    public function getBalance(){
        return $this->balance=parent::getBalance();
    }
}