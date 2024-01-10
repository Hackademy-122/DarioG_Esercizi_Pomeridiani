<?php
//!Riprodurre una concessionaria di automobili in OOP seguendo questa gerarchia di classi, con caratteristiche a scelta (Marchio, Modello, Numero porte, Prezzo….e altri a vostra scelta):
//!Classe parent  Automobile, che si estende in:
    //!SUV
    //!Utilitaria
    //!Sportiva
    
class Garage {

    public $manufacturer;
    public $model;
    public $doors;
    public $price;

    public function __construct($_manufacturer, $_model, $_doors, $_price)
    {
        $this->manufacturer = $_manufacturer;
        $this->model = $_model;
        $this->doors = $_doors;
        $this->price = $_price;
    }

    public function showGarage()
    {
        echo "$this->manufacturer: $this->model\n porte: $this->doors\n prezzo: € $this->price";
    }

}

// $garage = new Garage("Ferrari", "550 Maranello", 2, 200000);
// $garage->showGarage();