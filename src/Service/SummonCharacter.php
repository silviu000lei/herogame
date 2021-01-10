<?php

namespace App\Service;

use App\Models\Orderus;
use App\Models\WildBeasts;

class SummonCharacter
{
    public function summonOrderus(): Orderus
    {
        $orderus = new Orderus();
        $orderus->setName('Orderus');
        $orderus->setHealth(mt_rand(Orderus::HEALTH_MIN, Orderus::HEALTH_MAX));
        $orderus->setStrength(mt_rand(Orderus::STRENGTH_MIN, Orderus::STRENGTH_MAX));
        $orderus->setDefence(mt_rand(Orderus::DEFENCE_MIN, Orderus::DEFENCE_MAX));
        $orderus->setSpeed(mt_rand(Orderus::SPEED_MIN, Orderus::SPEED_MAX));
        $orderus->setLuck(mt_rand(Orderus::LUCK_MIN, Orderus::LUCK_MAX));

        return $orderus;
    }


    public function summonWildBeasts(): WildBeasts
    {
        $wildBeasts = new WildBeasts();
        $wildBeasts->setName('Wild beast');
        $wildBeasts->setHealth(mt_rand(WildBeasts::HEALTH_MIN, WildBeasts::HEALTH_MAX));
        $wildBeasts->setStrength(mt_rand(WildBeasts::STRENGTH_MIN, WildBeasts::STRENGTH_MAX));
        $wildBeasts->setDefence(mt_rand(WildBeasts::DEFENCE_MIN, WildBeasts::DEFENCE_MAX));
        $wildBeasts->setSpeed(mt_rand(WildBeasts::SPEED_MIN, WildBeasts::SPEED_MAX));
        $wildBeasts->setLuck(mt_rand(WildBeasts::LUCK_MIN, WildBeasts::LUCK_MAX));

        return $wildBeasts;
    }

}
