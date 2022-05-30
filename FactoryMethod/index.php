<?php

abstract class LogisticApp
{
    public function planDelivery()
    {
        $transport = $this->createTransport();
        $transport->deliver();
    }

    abstract function createTransport(): Transport;
}

class RoadLogistic extends LogisticApp {

    function createTransport(): Transport
    {
        return new Truck();
    }
}

class SeaLogistic extends LogisticApp {

    function createTransport(): Transport
    {
        return new Ship();
    }
}

interface Transport {
    public function deliver();
}

class Truck implements Transport {

    public function deliver()
    {
        echo "Truck";
    }
}

class Ship implements  Transport {

    public function deliver()
    {
        echo "Ship";
    }
}

function run() {
    $n = fread(STDIN, 80);
    if ($n == 1) {
        $logistic = new RoadLogistic();
    } else {
        $logistic = new SeaLogistic();
    }
    $logistic->planDelivery();
}

run();