<?php

use Amirniyaz\DesignPattern\Singleton\Singleton;

require '../../vendor/autoload.php';
function run()
{

    $singleton = Singleton::getInstance();
    $singleton1 = Singleton::getInstance();
    if ($singleton1 !== $singleton) {
        echo "Not Singleton";
    } else {
        echo "Singleton";
    }

}

run();