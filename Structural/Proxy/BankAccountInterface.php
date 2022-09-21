<?php

namespace Strctural\Proxy;

interface BankAccountInterface
{

    public function deposit(int $account);
    public function withdraw(int $amount);
    public function getBalance();
}