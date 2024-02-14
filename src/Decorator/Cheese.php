<?php

namespace Amirniyaz\DesignPattern\Decorator;

class Cheese implements FoodItem
{
    public function __construct(public FoodItem $foodItem)
    {
    }

    public function cost()
    {
        return $this->foodItem->cost() + 1;
    }
}