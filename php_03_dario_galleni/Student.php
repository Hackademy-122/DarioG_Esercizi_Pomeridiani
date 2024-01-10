<?php 

require "Person.php";

class Student extends Person
    {
        public $favoriteSubject;
    
        public function __construct($_name, $_surname, $_age, $_favoriteSubject, $_sex)
        {
            parent::__construct($_name, $_surname, $_age, $_sex);
            $this->favoriteSubject = $_favoriteSubject;
        }
    
        public function studentSayHello()
        {
            echo "Ciao a tutti mi chiamo $this->name $this->surname, ho $this->age anni, la mia materia preferita è $this->favoriteSubject e sono $this->sex\n";
        }
    }

$dario = new Student("Dario","Galleni",36,"Storia","Maschio");
$dario->studentSayHello();

