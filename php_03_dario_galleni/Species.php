<?php

require "Animal.php";
class Species extends Animal
{
    public $species;
    public $sex;
    
    public function __construct($_name, $_species, $_sex)
    {
        parent::__construct($_name);
        $this->species = $_species;
        $this->sex = $_sex;
    }

    public function sayHello()
    {   
        if($this->sex == "f")
        {
            echo "Ciao mi chiamo $this->name, e sono una $this->species\n";
        }
        else
        {
            echo "Ciao mi chiamo $this->name, e sono un $this->species\n";
        }
        
    }

}

// $animale = new Species("Olmo", "leone", "m");
// $animale->sayHello();

