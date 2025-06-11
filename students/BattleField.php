<?php

require_once __DIR__ . "/../base/BaseBattleField.php";
require_once "Warrior.php";
require_once "Weapon.php";


class BattleField extends BaseBattleField
{
    public static function createMyWarrior () { //14°/  statique peut être appelée sans créer un objet de la classe BattleField 
                                                    // $monGuerrier = BattleField::createMyWarrior();
        global $warriorName;

        $warriorName = new PokemonWarrior($warriorName); // Crée un objet enfant de Warrior (pokémon)

        $warriorName->imageUrl ="https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/150.png"; // assigné une valeur à imageUrl dans Warrior
        
        
        $auraSphere = new Weapon(1,80); // Je crée un objet dans Weapon
        $auraSphere->imageUrl ="https://www.pokepedia.fr/images/6/64/Mewtwo_Aurasph%C3%A8re.png?20140105210333"; // assigné une valeur à imageUrl dans Weapon    
        
        $warriorName->weapon = $auraSphere; // j'assigne à mon warrior un objet qui est weapon

        $warriorName->saveNew(); // méthode dans LocalWarrior qui sauvgarde les personnages 



    }

        public static function createOtherWarrior () {

        $dracolosse = new PokemonWarrior("dracolosse","dragon");
        $dracolosse->imageUrl="https://www.pokepedia.fr/images/thumb/8/87/Dracolosse-RFVF.png/250px-Dracolosse-RFVF.png";

        $ultralaser = new Weapon(1, 20);
        $ultralaser ->imageUrl= "https://www.pokepedia.fr/images/3/39/Dracolosse_Ultralaser.png?20150410093041";

        $dracolosse->weapon = $ultralaser;
        $dracolosse->saveNew();
        

    }

}