<?php
/**
 * Created by PhpStorm.
 * User: Amirniyaz
 * Date: 01.06.2022
 * Time: 13:53
 */

namespace Amirniyaz\DesignPattern\src\Builder;
interface Builder
{
    public function reset();

    public function setSeats($number);

    public function setEngine($engine);

    public function setTripComputer($bool);

    public function setGPS($bool);
}

class Director
{
    public function makeSUV(\Builder $builder)
    {
        $builder->reset();
        $builder->setSeats(4);
        $builder->setEngine(new \Engine());
        $builder->setTripComputer(false);
        $builder->setGPS(true);
    }

    public function makeSportsCar(\Builder $builder)
    {
        $builder->reset();
        $builder->setSeats(2);
        $builder->setEngine(new \SportEngine());
        $builder->setTripComputer(true);
        $builder->setGPS(true);
    }
}

class Engine
{

}

class SportEngine
{

}

class CarManualBuilder implements Builder
{

    public $car;

    public function reset()
    {
        // TODO: Implement reset() method.
    }

    public function setSeats($number)
    {
        // TODO: Implement setSeats() method.
    }

    public function setEngine($engine)
    {
        // TODO: Implement setEngine() method.
    }

    public function setTripComputer($bool)
    {
        // TODO: Implement setTripComputer() method.
    }

    public function setGPS($bool)
    {
        // TODO: Implement setGPS() method.
    }

    public function getResult(): Car
    {
        return $this->car;
    }
}

class CarBuilder implements Builder
{

    public $car;

    public function reset()
    {
        $this->car = new Car();
    }

    public function setSeats($number)
    {
        $this->car->seats = $number;
    }

    public function setEngine($engine)
    {
        $this->car->engine = $engine;
    }

    public function setTripComputer($bool)
    {
        $this->car->tripComputer = $bool;
    }

    public function setGPS($bool)
    {
        $this->car->gps = $bool;
    }

    public function getResult(): Car
    {
        return $this->car;
    }
}

class Car
{
    public $seats;
    public $engine;
    public $tripComputer;
    public $gps;
}

class Manual
{
    public $seats;
    public $engine;
    public $tripComputer;
    public $gps;
}

function run()
{
    $director = new Director();
    $builder = new CarBuilder();
    $director->makeSUV($builder);
    $car = $builder->getResult();
    echo $car->seats;
}

run();