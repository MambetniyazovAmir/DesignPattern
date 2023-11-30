<?php

namespace Amirniyaz\DesignPattern\FactoryMethod;

class Ship implements Transport
{
    public function deliver()
    {
        echo "Ship";
    }
}