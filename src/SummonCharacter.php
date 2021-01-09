<?php

namespace App;

class SummonCharacter
{
    public function summonOrderus(): Orderus
    {
        $orderus = new Orderus();
        $orderus->setHealth(mt_rand(Orderus::HEALTH_MIN,Orderus::HEALTH_MAX));
        $orderus->setStrength(mt_rand(Orderus::STRENGTH_MIN,Orderus::STRENGTH_MAX));
        $orderus->setDefence(mt_rand(Orderus::DEFENCE_MIN,Orderus::DEFENCE_MAX));
        $orderus->setSpeed(mt_rand(Orderus::SPEED_MIN,Orderus::SPEED_MAX));
        $orderus->setLuck(mt_rand(Orderus::LUCK_MIN,Orderus::LUCK_MAX));

        return $orderus;
    }


    public function summonWildBeast(): WildBeast
    {
        $wildBeast = new WildBeast();
        $wildBeast->setHealth(mt_rand(WildBeast::HEALTH_MIN,WildBeast::HEALTH_MAX));
        $wildBeast->setStrength(mt_rand(WildBeast::STRENGTH_MIN,WildBeast::STRENGTH_MAX));
        $wildBeast->setDefence(mt_rand(WildBeast::DEFENCE_MIN,WildBeast::DEFENCE_MAX));
        $wildBeast->setSpeed(mt_rand(WildBeast::SPEED_MIN,WildBeast::SPEED_MAX));
        $wildBeast->setLuck(mt_rand(WildBeast::LUCK_MIN,WildBeast::LUCK_MAX));

        return $wildBeast;
    }

}
