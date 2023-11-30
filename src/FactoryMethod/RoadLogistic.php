<?php

namespace Amirniyaz\DesignPattern\FactoryMethod;


class RoadLogistic extends LogisticApp
{
    function createTransport(): Transport
    {
        return new Truck();
    }
}