<?php

require "Garage.php";

class Type extends Garage {
    
    public $type;
    public $type2;
    
    
    
    public function __construct($_manufacturer, $_model, $_doors, $_price, $_tipo)
    {
        parent::__construct($_manufacturer, $_model, $_doors, $_price);
        $this->type = "sportiva";
        $this->type2 = "utilitaria";
    }
    
    public function showGarage()
    {   
        if($this->price >= 50000)
        {
            echo"$this->manufacturer: $this->model\n porte: $this->doors\n prezzo: € $this->price\n Tipo: $this->type";
        }
        else
        {
            echo"$this->manufacturer: $this->model\n porte: $this->doors\n prezzo: € $this->price\n Tipo: $this->type2";
        }
        
    }
    
}

$garage = new Type("Ferrari", "550 Maranello", 2, 10000, "");
$garage->showGarage();
?>
