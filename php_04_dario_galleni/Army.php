<?php

abstract class Attack
{
    public abstract function performAttack();
}

class FantasyAttack extends Attack
{
    public function performAttack()
    {
        echo "Attacco Magico\n";
    }
}

class MedievalAttack extends Attack
{
    public function performAttack()
    {
        echo "Attacco catapulta\n";
    }
}

abstract class Defense
{
    public abstract function performDefense();
}

class FantasyDefense extends Defense
{
    public function performDefense()
    {
        echo "Difesa magica\n";
    }
}

class MedievalDefense extends Defense
{
    public function performDefense()
    {
        echo "Difesa catapulta\n";
    }
}

class ArmyOfDarkness
{
    public $attacco;
    public $difese = [];

    public function __construct(Attack $a, Defense ...$difese)
    {
        $this->attacco = $a;
        $this->difese = $difese;
    }

    public function engageInBattle()
    {
        $this->attacco->performAttack();

        foreach ($this->difese as $difesa) {
            $difesa->performDefense();
        }
    }
}


$fantasyAttack = new FantasyAttack();
$fantasyDefense = new FantasyDefense();

$fantasyArmy = new ArmyOfDarkness($fantasyAttack, $fantasyDefense);
$fantasyArmy->engageInBattle();


$medievalAttack = new MedievalAttack();
$medievalDefense1 = new MedievalDefense();
$medievalDefense2 = new MedievalDefense();

$medievalArmy = new ArmyOfDarkness($medievalAttack, $medievalDefense1, $medievalDefense2);
$medievalArmy->engageInBattle();

