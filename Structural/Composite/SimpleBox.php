<?php

namespace Strctural\Composite;

class SimpleBox implements ProductInterface
{
    private int $price;

    public function __construct(int $price)
    {
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }
}