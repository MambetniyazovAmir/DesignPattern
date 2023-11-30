<?php

namespace Amirniyaz\DesignPattern\FactoryMethod;

class SeaLogistic extends LogisticApp
{
    function createTransport(): Transport
    {
        return new Ship();
    }

}