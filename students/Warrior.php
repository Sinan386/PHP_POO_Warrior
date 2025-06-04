<?php

require_once __DIR__ . "/../base/LocalWarrior.php";

$GLOBALS['warriorName'] = 'SuperFort';

abstract class Warrior extends LocalWarrior {
    public string $name;
    public int $speed;
    public int $life;
    public int $shield;
    public string $imageUrl;
  

}
