<?php 

class StartrekWarrior extends Warrior { // 3°/ StartrekWarrior héritié de Warrior
    public int $mentalPower; // 5°/ Attribut Propriété spécifique à StartrekWarrior, elle s'ajoute à celles de Warrior

    public function getPower() : int { // 6°/ Methode pour obtenir la puissance mentale du guerrier : retourne mentalPower de StartrekWarrior
    return $this->mentalPower;
}
    public function __construct(string $name) { // 8°/ ne pas oublier le string
        parent::__construct($name); // 9°/ On récupère le constructeur de la classe parent
        $this->mentalPower= 8; // rajoute un attribut à Startrek
        
 }

    
}



?>