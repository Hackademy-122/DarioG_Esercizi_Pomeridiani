<?php
//!Definire una classe parent Person che abbia le caratteristiche che preferite, che sia poi estesa in due classi figlie Student e Teacher.
//!Ognuna di queste classi deve avere un metodo specifico con cui l'oggetto poi creato va a dare le proprie informazioni.

class Person {

    public $name;
    public $surname;
    public $age;
    public $sex;

    public function __construct($_name, $_surname, $_age, $_sex)
    {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->age = $_age;
        $this->sex = $_sex;
    }

    public function sayHello()
    {
        echo "Ciao mi chiamo $this->name $this->surname ,ho $this->age anni e sono $this->sex\n";
    }

}

$dario = new Person("Dario", "Galleni", 36, "Maschio");
$dario->sayHello();
