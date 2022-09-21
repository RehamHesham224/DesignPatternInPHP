<?php

namespace Strctural\Proxy;

class BankAccount implements BankAccountInterface
{
    private $transactions=[];
    public function deposit(int $account)
    {
        $this->transactions[]=+$account;
        return true;
    }

    public function withdraw(int $amount)
    {
        if( $this->getBalance() > $amount){
            $this->transactions[] -= $amount;
            return $amount;
        }
        return false;
    }

    public function getBalance()
    {
        return array_sum( $this->transactions );
    }
}