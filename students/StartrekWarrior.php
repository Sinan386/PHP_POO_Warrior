<?php
require_once __DIR__ . '/Warrior.php';

class StartrekWarrior extends Warrior
{
      public int $mentalPower;
    
    public function getPower(): int
    {
        return $this->mentalPower;
    }
}
?>