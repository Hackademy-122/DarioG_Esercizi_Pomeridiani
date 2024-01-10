<?php


require "Species.php";

class Nourishment extends Species
{
    public $nourishment;
    

    public function __construct($_name, $_species, $_sex, $_nourishment)
    {
        parent::__construct($_name, $_species, $_sex);
        $this->nourishment = $_nourishment;
    }

    public function sayHello()
    {   
        if ($this->sex == "f")
        {
            echo "Ciao mi chiamo $this->name, sono una $this->species, e mangio $this->nourishment\n";
        }
        else
        {
            echo "Ciao mi chiamo $this->name, sono un $this->species, e mangio $this->nourishment\n";
        }
    }
}

$animale = new Nourishment("Olmo", "leone", "m", "carne");
$animale->sayHello();

