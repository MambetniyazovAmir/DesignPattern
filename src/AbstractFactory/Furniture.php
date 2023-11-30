<?php
/**
 * Created by PhpStorm.
 * User: Amirniyaz
 * Date: 30.05.2022
 * Time: 14:17
 */

interface Chair
{
    public function hasLegs();

    public function sitOn();
}

interface Sofa
{
    public function hasLegs();

    public function material();
}

interface Table
{
    public function hasLegs();

    public function size();
}

class VictorianSofa implements Sofa
{

    public function hasLegs()
    {
        echo "Has 2 legs";
    }

    public function material()
    {
        echo "Victorian Sofa material is leather";
    }
}

class VictorianTable implements Table
{

    public function hasLegs()
    {
        echo "Has 2 legs";
    }

    public function size()
    {
        echo "4x4";
    }
}

class VictorianChair implements Chair
{

    public function hasLegs()
    {
        echo "Has 1 leg";
    }

    public function sitOn()
    {
        echo "Sit on comfortable chair";
    }
}

class ModernSofa implements Sofa
{

    public function hasLegs()
    {
        echo "Modern has 2 legs";
    }

    public function material()
    {
        echo "Modern material is cotton";
    }
}

class ModernTable implements Table
{

    public function hasLegs()
    {
        echo "Has 1 leg";
    }

    public function size()
    {
        echo "3x3";
    }
}

class ModernChair implements Chair
{

    public function hasLegs()
    {
        echo "Has 2 legs";
    }

    public function sitOn()
    {
        echo "Comfortable for those who has back pain";
    }
}

class OfficeSofa implements Sofa
{

    public function hasLegs()
    {
        echo "Has 4 legs";
    }

    public function material()
    {
        echo "Office sofa material is leather";
    }
}

class OfficeTable implements Table
{

    public function hasLegs()
    {
        echo "Has 4 legs";
    }

    public function size()
    {
        echo "Office table size 3x4";
    }
}

class OfficeChair implements Chair
{

    public function hasLegs()
    {
        echo "has 4 legs";
    }

    public function sitOn()
    {
        echo "standard office chair";
    }
}

interface FurnitureFactory
{
    public function useChair();

    public function useSofa();

    public function useTable();

    public function createChair();

    public function createSofa();

    public function createTable();

}

class VictorianFurnitureFactory implements FurnitureFactory
{

    public function createChair()
    {
        return new VictorianChair();
    }

    public function createSofa()
    {
        return new VictorianSofa();
    }

    public function createTable()
    {
        return new VictorianTable();
    }

    public function useChair()
    {
        $chair = $this->createChair();
        $chair->sitOn();
        $chair->hasLegs();
    }

    public function useSofa()
    {
        $sofa = $this->createSofa();
        $sofa->hasLegs();
        $sofa->material();
    }

    public function useTable()
    {
        $table = $this->createTable();
        $table->hasLegs();
        $table->size();
    }
}

class OfficeFurnitureFactory implements FurnitureFactory
{

    public function createChair()
    {
        return new OfficeChair();
    }

    public function createSofa()
    {
        return new OfficeSofa();
    }

    public function createTable()
    {
        return new OfficeTable();
    }

    public function useChair()
    {
        $chair = $this->createChair();
        $chair->sitOn();
        $chair->hasLegs();
    }

    public function useSofa()
    {
        $sofa = $this->createSofa();
        $sofa->hasLegs();
        $sofa->material();
    }

    public function useTable()
    {
        $table = $this->createTable();
        $table->hasLegs();
        $table->size();
    }

}

class ModernFurnitureFactory implements FurnitureFactory
{

    public function createChair()
    {
        return new ModernChair();
    }

    public function createSofa()
    {
        return new ModernSofa();
    }

    public function createTable()
    {
        return new ModernTable();
    }

    public function useChair()
    {
        $chair = $this->createChair();
        $chair->sitOn();
        $chair->hasLegs();
    }

    public function useSofa()
    {
        $sofa = $this->createSofa();
        $sofa->hasLegs();
        $sofa->material();
    }

    public function useTable()
    {
        $table = $this->createTable();
        $table->hasLegs();
        $table->size();
    }
}

function run()
{
    $n = fread(STDIN, 80);
    if ($n == 1) {
        $factory = new VictorianFurnitureFactory();
        $factory->useSofa();
        $factory->useChair();
        $factory->useTable();
    } elseif ($n == 2) {
        $factory = new ModernFurnitureFactory();
        $factory->useSofa();
        $factory->useChair();
        $factory->useTable();
    } elseif ($n == 3) {
        $factory = new OfficeFurnitureFactory();
        $factory->useSofa();
        $factory->useChair();
        $factory->useTable();
    }
}

run();