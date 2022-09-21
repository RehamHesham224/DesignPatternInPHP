<?php

namespace Strctural\Composite;

class GiftBox implements ProductInterface, GiftInterface
{

    private int $price;
    private int $giftPrice;

    public function __construct(int $price, int $giftPrice)
    {
        $this->price = $price;
        $this->giftPrice = $giftPrice;
    }

    public function getPackagePrice()
    {
        return $this->giftPrice;
    }

    public function getPrice()
    {
        return $this->price + $this->getPackagePrice();
    }
}