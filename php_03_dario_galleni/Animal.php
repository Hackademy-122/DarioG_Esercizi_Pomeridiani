<?php
//!Creare uno zoo di animali. Partendo da una classe parent Animal che abbia le caratteristiche che preferite,  create quante classi figlie volete che estendano il concetto di Animal (ad esempio: Mammifero, Oviparo, Rettile ecc ecc o anche animali specifici come Leone, Castoro ecc). Libera scelta creativa vostra: l'importante è che le classi figlie estendano il concetto della classe parent

class Animal
{

    public $name;
    
    public function __construct($_name)
    {
        $this->name = $_name;
    }

    public function sayHello()
    {
        echo "Ciao mi chiamo $this->name\n";
    }

}

// $animale = new Animal("Olmo");
// $animale->sayHello();

