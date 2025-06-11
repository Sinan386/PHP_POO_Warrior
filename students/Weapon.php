<?php 
Class Weapon { // 10°/ Création de la classe Weapon
    public int $id; // 12°/ attribut
    public int $strength;
    public string $imageUrl;

    public function __construct(int $id, int $strength,) {
        $this->id = $id; // 13°/ Initialisation des attributs
        $this->strength = $strength;

    }

}