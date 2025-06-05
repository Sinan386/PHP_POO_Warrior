<?php

require_once __DIR__ . "/../base/BaseBattleField.php";
require_once "Warrior.php";
require_once "Weapon.php";

class BattleField extends BaseBattleField
{
    public static function createMyWarrior() {
         global $warriorName;

         $pikachu = new PokemonWarrior($warriorName);
        $pikachu->imageUrl = "https://www.pokepedia.fr/images/thumb/e/e7/Pikachu-RFVF.png/250px-Pikachu-RFVF.png";

        $eclair = new Weapon(1, 90);
        $eclair->imageUrl = "https://www.pokepedia.fr/images/thumb/c/c5/Pikachu_Tonnerre.png/800px-Pikachu_Tonnerre.png?20150322175103";

        $pikachu->weapon = $eclair;

        $pikachu->saveNew();

       
    }

     public static function createOtherWarrior() {
        
        $carapuce = new PokemonWarrior('carapuce');
        $carapuce->imageUrl = "https://wiki.rpgdbz.com/sites/default/files/styles/table/public/2019-12/raw.gif?itok=O1pyNm1J";

        $pistoletEau = new Weapon(1, 40);
        $pistoletEau->imageUrl = "https://www.pokepedia.fr/images/thumb/c/c5/Pikachu_Tonnerre.png/800px-Pikachu_Tonnerre.png?20150322175103";

        $carapuce->weapon = $pistoletEau;

        $carapuce->saveNew();
    }
}
