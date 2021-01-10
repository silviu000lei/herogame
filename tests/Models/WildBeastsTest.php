<?php

use App\Models\WildBeasts;
use PHPUnit\Framework\TestCase;

class WildBeastsTest extends TestCase
{
    public function testOrderusHasConstants()
    {
        $wildBeasts = new ReflectionClass(WildBeasts::class);
        $this->assertArrayHasKey('HEALTH_MIN',$wildBeasts->getConstants());
        $this->assertArrayHasKey('HEALTH_MAX',$wildBeasts->getConstants());
        $this->assertArrayHasKey('STRENGTH_MIN',$wildBeasts->getConstants());
        $this->assertArrayHasKey('STRENGTH_MAX',$wildBeasts->getConstants());
        $this->assertArrayHasKey('DEFENCE_MIN',$wildBeasts->getConstants());
        $this->assertArrayHasKey('DEFENCE_MAX',$wildBeasts->getConstants());
        $this->assertArrayHasKey('SPEED_MIN',$wildBeasts->getConstants());
        $this->assertArrayHasKey('SPEED_MAX',$wildBeasts->getConstants());
        $this->assertArrayHasKey('LUCK_MIN',$wildBeasts->getConstants());
        $this->assertArrayHasKey('LUCK_MAX',$wildBeasts->getConstants());
    }
}
