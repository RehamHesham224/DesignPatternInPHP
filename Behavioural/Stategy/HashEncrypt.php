<?php

namespace Behavioural\Stategy;

class HashEncrypt implements StrategyInterface
{
    public const TYPE="Hash";
    public function encrypt(string $data): array
    {
        return [hash('sha3-256',$data),self::TYPE];
    }
}