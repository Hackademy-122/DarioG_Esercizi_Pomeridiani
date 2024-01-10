<?php

require 'Person.php';

class Teacher extends Person{
    public $subject;

    public function __construct($_name, $_surname, $_age, $_sex, $_subject){
        parent::__construct($_name, $_surname, $_age, $_sex);
        $this->subject = $_subject;
    }

    public function teacherSayHello(){
        echo "Salve a tutti, sono il docente $this->surname $this->name, ho $this->age anni, sono $this->sex e da oggi vi insegnerò $this->subject\n";
    }
}
$dario = new Teacher ("Oirad","Inellag", 36, "maschio", "Geografia" );
$dario->teacherSayHello();
