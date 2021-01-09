<?php

namespace App;

class Orderus extends AbstractCharacter
{
    public const HEALTH_MIN = 70;
    public const HEALTH_MAX = 70;
    public const STRENGTH_MIN = 70;
    public const STRENGTH_MAX = 80;
    public const DEFENCE_MIN = 45;
    public const DEFENCE_MAX = 55;
    public const SPEED_MIN = 40;
    public const SPEED_MAX = 50;
    public const LUCK_MIN = 10;
    public const LUCK_MAX = 30;


    private int $skillRapidStrike = 10;
    private int $skillMagicShield = 20;

    public function hasRapidStrike(): bool
    {
        $percentage = mt_rand(0, 100);
        if ($percentage <= $this->skillRapidStrike) {
            return true;
        }

        return false;
    }

    public function hasMagicShield(): bool
    {
        $percentage = mt_rand(0, 100);
        if ($percentage <= $this->skillMagicShield) {
            return true;
        }

        return false;
    }

}
