<?php

namespace Amirniyaz\DesignPattern\Decorator;

class Spicy
{
    public function __construct(public FoodItem $foodItem)
    {
    }

    public function cost(): float
    {
        return $this->foodItem->cost() + 1.5;
    }
}