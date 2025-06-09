<?php
require_once __DIR__ . '/Warrior.php';

class StartrekWarrior extends Warrior
{
      public int $mentalPower;

        public function __construct(string $name) {
        parent::__construct($name);       
        $this->mentalPower = 8;         
    }






    
    public function getPower(): int
    {
        return $this->mentalPower;
    }
}
?>