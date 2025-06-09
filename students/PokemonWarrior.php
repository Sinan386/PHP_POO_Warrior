<?php
require_once __DIR__ . '/Warrior.php';

class PokemonWarrior extends Warrior
{  
    public int $level;


        public function __construct() {
         
    }


    public function getPower(): int
    {
        return $this->level;
    }
}
?>