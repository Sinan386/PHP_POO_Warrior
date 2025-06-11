<?php

require_once __DIR__ . "/../base/LocalWarrior.php";

$GLOBALS['warriorName'] = 'Mewtwo'; // 1°/ variable globale elle est accessible partout dans le code

abstract class Warrior extends LocalWarrior{ // Classe abstraite ( les propriétés et méthodes genérales de Warrior, qui peuvent s'appliquer à n'importe lequel) Warrior qui hérite de LocalWarrior
    public string $name; // 4°/ attribut
    public int $speed;
    public int $life;
    public int $shield;
    public string $imageUrl;

    public ?Weapon $weapon; // 11°/ Création de l'attribut weapon, Weapon est le nom de la classe définie dans Weapon.php


    public function __construct(string $warriorName) { // 7°/ Constructeur
        $this->name = $warriorName; // 8°/ attributs
        $this->speed = 30;
        $this->life = 100;
        $this->shield = 20;

    }

    

}
