<?php

namespace App\Tests\Service;

use App\Service\FightClub;
use App\Service\SummonCharacter;
use PHPUnit\Framework\TestCase;

class FightClubTest extends TestCase
{

    protected function createSummoners(): array
    {
        $orderus = (new SummonCharacter())->summonOrderus();
        $wildBeasts = (new SummonCharacter())->summonWildBeasts();

        return [$orderus,$wildBeasts];
    }

    public function testFight()
    {
        [$orderus,$wildBeasts] = $this->createSummoners();
        $fightClub = new FightClub();

        $this->assertIsArray($fightClub->fight($orderus,$wildBeasts));
        $this->assertIsArray($fightClub->fight($wildBeasts,$orderus));
    }

}
