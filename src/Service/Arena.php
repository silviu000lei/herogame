<?php

namespace App\Service;

use App\Models\AbstractCharacter;
use App\Utility\Constants;

class Arena
{
    private const ROUNDS_MAX = 20;

    private AbstractCharacter $playerOne;
    private AbstractCharacter $playerTwo;

    public function __construct(AbstractCharacter $playerOne, AbstractCharacter $playerTwo)
    {
        $this->playerOne = $playerOne;
        $this->playerTwo = $playerTwo;
    }

    public function battle() : void
    {
        [$attacker, $defender] = $this->getAttackerDefenderFirstRound($this->playerOne, $this->playerTwo);
        $fightClub = new FightClub();
        $round = 1;
        while ($attacker->getHealth() > 0 && $defender->getHealth() > 0 && $round <= self::ROUNDS_MAX) {
            echo "Round {$round} start" . Constants::BREAK_LINE;
            [$attacker, $defender] = $fightClub->fight($attacker, $defender);
            [$attacker, $defender] = [$defender, $attacker];
            $round++;
        }

        if ($attacker->getHealth() <= 0) {
            echo $defender->getName() . ' is winner' . Constants::BREAK_LINE;
        }
        if ($defender->getHealth() <= 0) {
            echo $attacker->getName() . ' is the winner' . Constants::BREAK_LINE;
        }
    }

    private function getAttackerDefenderFirstRound(AbstractCharacter $playerOne, AbstractCharacter $playerTwo): array
    {
        if ($playerTwo->getSpeed() > $playerOne->getSpeed()) {
            return [$playerTwo, $playerOne];
        }
        if ($playerTwo->getSpeed() === $playerOne->getSpeed() && $playerTwo->getLuck() > $playerOne->getLuck()) {
            return [$playerTwo, $playerOne];
        }

        return [$playerOne, $playerTwo];
    }

}
