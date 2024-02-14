<?php
require('../../vendor/autoload.php');

use Amirniyaz\DesignPattern\Decorator\Burger;
use Amirniyaz\DesignPattern\Decorator\Cheese;
use Amirniyaz\DesignPattern\Decorator\Lavash;
use Amirniyaz\DesignPattern\Decorator\Spicy;

function run()
{
    $b = new Burger();
    $cb = new Cheese($b);
    $sb = new Spicy($b);
    $scb = new Spicy($cb);
    echo $b->cost() . PHP_EOL . $cb->cost() . PHP_EOL . $sb->cost() . PHP_EOL . $scb->cost();
    echo PHP_EOL . PHP_EOL;
    $l = new Lavash();
    $cl = new Cheese($l);
    $sl = new Spicy($l);
    $scl = new Spicy($cl);
    echo $l->cost() . PHP_EOL . $cl->cost() . PHP_EOL . $sl->cost() . PHP_EOL . $scl->cost();
}
run();