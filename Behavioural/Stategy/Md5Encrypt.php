<?php

namespace Behavioural\Stategy;

class Md5Encrypt implements StrategyInterface
{
    public const TYPE="MD5";
    public function encrypt(string $data): array
    {
        return [md5($data),self::TYPE];
    }
}