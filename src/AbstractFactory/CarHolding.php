<?php
/**
 * Created by PhpStorm.
 * User: Professional
 * Date: 21.05.2022
 * Time: 12:40
 */

namespace Amirniyaz\DesignPattern\src\AbstractFactory;
interface CarHolding
{
    public function createSedan(): Sedan;

    public function createCoupe(): Coupe;
}

class Toyota implements \CarHolding
{

    public function createSedan(): \Sedan
    {
        return new \ToyotaSedan();
    }

    public function createCoupe(): \Coupe
    {
        return new \ToyotaCoupe();
    }
}

class GM implements CarHolding
{

    public function createSedan(): Sedan
    {
        return new GMSedan();
    }

    public function createCoupe(): Coupe
    {
        return new GMCoupe();
    }
}

interface Sedan
{
    public function info();
}

interface Coupe
{
    public function info();
}

class GMSedan implements Sedan
{

    public function info()
    {
        echo "Sedan often have 4 doors \n These are Malibu, Impala Ozbekistanda bari sedango.";
    }
}

class GMCoupe implements Coupe
{

    public function info()
    {
        echo "Coupe often have 2 doors \n These are Camaro, Corvette";
    }
}

class ToyotaSedan implements Sedan
{
    public function info()
    {
        echo "Camry, avalon";
    }
}

class ToyotaCoupe implements Coupe
{
    public function info()
    {
        echo "Camry Solara, Corolla have 2 doors";
    }
}

function clientCode()
{
    echo "Choose model print 1 or 2 (Toyota or GM)";
    $n = fread(STDIN, 80);
    if ($n == 1) {
        $toyota = new Toyota();
        echo "Sedan or Coupe print(1 or 2)";
        $f = fread(STDIN, 20);
        if ($f == 1) {
            $sedan = $toyota->createSedan();
            $sedan->info();
        } else {
            $coupe = $toyota->createSedan();
            $coupe->info();
        }
    } else {
        $gm = new GM();
        echo "Sedan or Coupe print(1 or 2)";
        $f = fread(STDIN, 20);
        if ($f == 1) {
            $sedan = $gm->createSedan();
            $sedan->info();
        } else {
            $coupe = $gm->createCoupe();
            $coupe->info();
        }
    }
}

clientCode();