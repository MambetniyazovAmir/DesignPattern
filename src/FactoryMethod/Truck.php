<?php

namespace Amirniyaz\DesignPattern\FactoryMethod;

class Truck implements Transport
{
    public function deliver()
    {
        echo "Truck";
    }

}