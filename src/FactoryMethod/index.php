<?php
declare(strict_types=1);

use Amirniyaz\DesignPattern\FactoryMethod\RoadLogistic;
use Amirniyaz\DesignPattern\FactoryMethod\SeaLogistic;

require '../../vendor/autoload.php';


function run(): void
{
    $n = fread(STDIN, 80);
    if ($n == 1) {
        $logistic = new RoadLogistic();
    } else {
        $logistic = new SeaLogistic();
    }
    $logistic->planDelivery();
}

run();