<?php




class MarvelWarrior extends Warrior {
    public int $superPower;

     public function __construct() {
        
    }

    public function getPower(): int  {

        return $this->superPower;
        
    }

}


?>