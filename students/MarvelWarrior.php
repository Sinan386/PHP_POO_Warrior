<?php

class MarvelWarrior extends Warrior { // 3°/ MarvelWarrior héritié de Warrior
    public int $superPower; // 5°/ Attribut

    public function getPower() : int {  // 6°/ Methode
    return $this->superPower;
}
    public function __construct(string $name) {
        parent::__construct($name);
        $this->superPower= 100;
 }        

    }








?>