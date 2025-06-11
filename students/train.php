<?php

require_once __DIR__ . "/../base/BaseBattleField.php";
require_once "Warrior.php";
require_once "Weapon.php";


class BattleField extends BaseBattleField
{

    public static function createOtherWarrior () {

        $dracolosse = new PokemonWarrior("dracolosse");
        $dracolosse->imageUrl="https://www.pokepedia.fr/images/thumb/8/87/Dracolosse-RFVF.png/250px-Dracolosse-RFVF.png";

        $ultralaser = new Weapon(1, 150);
        $ultralaser ->imageUrl= "https://www.pokepedia.fr/images/3/39/Dracolosse_Ultralaser.png?20150410093041";

        $dracolosse->weapon = $ultralaser;
        $dracolosse->saveNew();


    }


}

