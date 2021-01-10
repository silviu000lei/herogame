<?php

namespace App\Tests\Service;

use App\Models\Orderus;
use App\Models\WildBeasts;
use App\Service\SummonCharacter;
use PHPUnit\Framework\TestCase;

class SummonCharacterTest extends TestCase
{
    public function testSummonOrderus()
    {
        $orderus = (new SummonCharacter())->summonOrderus();
        $this->assertInstanceOf(Orderus::class,$orderus);
        $this->assertGreaterThanOrEqual(Orderus::HEALTH_MIN,$orderus->getHealth());
        $this->assertLessThanOrEqual(Orderus::HEALTH_MAX,$orderus->getHealth());
        $this->assertGreaterThanOrEqual(Orderus::STRENGTH_MIN,$orderus->getStrength());
        $this->assertLessThanOrEqual(Orderus::STRENGTH_MAX,$orderus->getStrength());
        $this->assertGreaterThanOrEqual(Orderus::DEFENCE_MIN,$orderus->getDefence());
        $this->assertLessThanOrEqual(Orderus::DEFENCE_MAX,$orderus->getDefence());
        $this->assertGreaterThanOrEqual(Orderus::SPEED_MIN,$orderus->getSpeed());
        $this->assertLessThanOrEqual(Orderus::SPEED_MAX,$orderus->getSpeed());
        $this->assertGreaterThanOrEqual(Orderus::LUCK_MIN,$orderus->getLuck());
        $this->assertLessThanOrEqual(Orderus::LUCK_MAX,$orderus->getLuck());
    }

    public function testSummonWildBeasts()
    {
        $wildBeasts = (new SummonCharacter())->summonWildBeasts();
        $this->assertInstanceOf(WildBeasts::class,$wildBeasts);
        $this->assertGreaterThanOrEqual(WildBeasts::HEALTH_MIN,$wildBeasts->getHealth());
        $this->assertLessThanOrEqual(WildBeasts::HEALTH_MAX,$wildBeasts->getHealth());
        $this->assertGreaterThanOrEqual(WildBeasts::STRENGTH_MIN,$wildBeasts->getStrength());
        $this->assertLessThanOrEqual(WildBeasts::STRENGTH_MAX,$wildBeasts->getStrength());
        $this->assertGreaterThanOrEqual(WildBeasts::DEFENCE_MIN,$wildBeasts->getDefence());
        $this->assertLessThanOrEqual(WildBeasts::DEFENCE_MAX,$wildBeasts->getDefence());
        $this->assertGreaterThanOrEqual(WildBeasts::SPEED_MIN,$wildBeasts->getSpeed());
        $this->assertLessThanOrEqual(WildBeasts::SPEED_MAX,$wildBeasts->getSpeed());
        $this->assertGreaterThanOrEqual(WildBeasts::LUCK_MIN,$wildBeasts->getLuck());
        $this->assertLessThanOrEqual(WildBeasts::LUCK_MAX,$wildBeasts->getLuck());
    }
}
