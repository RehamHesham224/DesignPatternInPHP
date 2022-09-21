<?php

namespace Strctural\Composite;

interface ActionsInterface
{
    public function add(ProductInterface $product);
    public function remove(ProductInterface $product);
}