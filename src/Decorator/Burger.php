<?php

namespace Amirniyaz\DesignPattern\Decorator;

class Burger implements FoodItem
{
    public function cost()
    {
        return 4;
    }
}