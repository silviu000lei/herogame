<?php

namespace App\Service;

use App\Models\AbstractCharacter;
use App\Models\Orderus;
use App\Utility\Constants;

class FightClub
{
    public function fight(AbstractCharacter $attacker, AbstractCharacter $defender): array
    {
        $nameAttacker = $attacker->getName();
        $nameDefender = $defender->getName();
        echo "{$nameAttacker} attack {$nameDefender}" . Constants::BREAK_LINE;
        $damage = $attacker->getStrength() - $defender->getDefence();
        if ($attacker instanceof Orderus && $attacker->hasRapidStrike()) {
            echo "{$nameAttacker} has skill Rapid strike active" . Constants::BREAK_LINE;
            $damage *= 2;
        }
        if ($defender instanceof Orderus && $defender->hasMagicShield()) {
            echo "{$nameDefender} has skill Magic shield active" . Constants::BREAK_LINE;
            $damage /= 2;
        }

        if ($damage > 0) {
            echo "{$nameAttacker} make {$damage} damage to {$nameDefender}" . Constants::BREAK_LINE;
            $defender->setHealth($defender->getHealth() - $damage < 0 ? 0 : $defender->getHealth() - $damage);
        }

        echo "On the end of this round {$nameDefender} remain with {$defender->getHealth()}" . Constants::BREAK_LINE;

        return [$attacker, $defender];
    }
}
