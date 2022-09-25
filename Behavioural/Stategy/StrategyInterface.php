<?php

namespace Behavioural\Stategy;

interface StrategyInterface
{
    public function encrypt(string $data):array;
}