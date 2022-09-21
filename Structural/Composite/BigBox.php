<?php

namespace Strctural\Composite;

class BigBox implements ProductInterface , ActionsInterface
{
    private $products=[];

    public function __construct(array $products)
    {
        $this->products = $products;
    }
    public function getPrice()
    {
        $totalPrice=0;
        foreach ($this->products as $product){
            $totalPrice+=$product->getPrice();
        }
        return $totalPrice;
    }

    public function add(ProductInterface $product)
    {
        $this->products[]=$product;
    }

    public function remove(ProductInterface $product)
    {
        $this->products=array_filter($this->products,
            function($productItem) use ($product)
            {
                return $productItem != $product ? $productItem : null;
            });
    }
}