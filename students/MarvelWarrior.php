<?php
require_once __DIR__ . '/Warrior.php';

class MarvelWarrior extends Warrior
{
      public int $superPower;
      
    public function getPower(): int
    {
        return $this->superPower;
    }
    
}
?>