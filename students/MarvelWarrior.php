<?php
require_once __DIR__ . '/Warrior.php';

class MarvelWarrior extends Warrior
{
      public int $superPower;

        public function __construct(string $name) {
        parent::__construct($name);       
        $this->superPower = 100;          
    }



      
    public function getPower(): int
    {
        return $this->superPower;
    }
    
}
?>