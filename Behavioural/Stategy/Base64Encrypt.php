<?php

namespace Behavioural\Stategy;

class Base64Encrypt implements StrategyInterface
{
    public const TYPE="Base64";
    public function encrypt(string $data): array
    {
        return [base64_encode($data),self::TYPE];
    }
}