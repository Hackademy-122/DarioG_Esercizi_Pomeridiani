<?php

abstract class City
{
    public abstract function city();
}

class Milano extends City
{
    public function city()
    {
        echo "La città è Milano\n";
    }
}

class Roma extends City
{
    public function city()
    {
        echo "La città è Roma\n";
    }
}

abstract class Walls
{
    public abstract function colors();
}

class Red extends Walls
{
    public function colors()
    {
        echo "I muri sono rossi\n";
    }
}

class Yellow extends Walls
{
    public function colors()
    {
        echo "I muri sono gialli\n";
    }
}

class House
{

    // attributi
    public $citta;
    public $muri;

    // costruttore
    public function __construct(Walls $a, City ...$b)
    {
        $this->muri = $a;
        $this->citta = $b;
    }

    // metodi
    public function coloraMuri()
    {
        $this->muri->colors();
    }

    public function dimmiCitta()
    {
        foreach ($this->citta as $element) {
            $element->city();
        }
    }
}


$cityRoma = new Roma();
$cityMilano = new Milano();
$wallsYellow = new Yellow();
$wallsRed = new Red();

// Creazione dell'istanza della classe House
$house = new House($wallsRed, $cityRoma, $cityMilano);

// Chiamare i metodi appropriati sulla classe House
$house->dimmiCitta();
$house->coloraMuri();







