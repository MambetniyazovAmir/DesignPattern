<?php

namespace Amirniyaz\DesignPattern\FactoryMethod;

abstract class LogisticApp
{
    public function planDelivery()
    {
        $transport = $this->createTransport();
        $transport->deliver();
    }

    abstract function createTransport(): Transport;
}