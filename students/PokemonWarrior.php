<?php

class PokemonWarrior extends Warrior { // 3°/ PokemonWarrior héritié de Warrior
    public int $level; // 5°/ Attribut
    private string $type;
   

    


    public function getPower() : int { // 6°/ Methode
    return $this->level;
}
    public function __construct(string $name,?string $type=null) { // Je peux mettre un type de pokemon obligatoire où null
        parent::__construct($name);
        $this->level= 1;
        $this->type= $type;
 }
    }
    










?>