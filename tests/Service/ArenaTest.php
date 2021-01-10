<?php

namespace App\Tests\Service;

use App\Service\Arena;
use App\Service\SummonCharacter;
use PHPUnit\Framework\TestCase;

class ArenaTest extends TestCase
{

    protected function createSummoners(): array
    {
        $orderus = (new SummonCharacter())->summonOrderus();
        $wildBeasts = (new SummonCharacter())->summonWildBeasts();

        return [$orderus,$wildBeasts];
    }

    public function test__construct()
    {
        [$orderus,$wildBeasts] = $this->createSummoners();
        $this->assertInstanceOf(Arena::class,new Arena($orderus,$wildBeasts));
    }

    public function testBattle()
    {
        [$orderus,$wildBeasts] = $this->createSummoners();
        $arena = new Arena($orderus,$wildBeasts);

        $this->assertEquals(null,$arena->battle());
    }
}
