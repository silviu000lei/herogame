<?php


use App\Models\Orderus;
use PHPUnit\Framework\TestCase;

class OrderusTest extends TestCase
{
    public function testOrderusHasConstants()
    {
        $orderus = new ReflectionClass(Orderus::class);
        $this->assertArrayHasKey('HEALTH_MIN',$orderus->getConstants());
        $this->assertArrayHasKey('HEALTH_MAX',$orderus->getConstants());
        $this->assertArrayHasKey('STRENGTH_MIN',$orderus->getConstants());
        $this->assertArrayHasKey('STRENGTH_MAX',$orderus->getConstants());
        $this->assertArrayHasKey('DEFENCE_MIN',$orderus->getConstants());
        $this->assertArrayHasKey('DEFENCE_MAX',$orderus->getConstants());
        $this->assertArrayHasKey('SPEED_MIN',$orderus->getConstants());
        $this->assertArrayHasKey('SPEED_MAX',$orderus->getConstants());
        $this->assertArrayHasKey('LUCK_MIN',$orderus->getConstants());
        $this->assertArrayHasKey('LUCK_MAX',$orderus->getConstants());
    }

    public function testHasMagicShield()
    {
        $orderus = new Orderus();
        $this->assertIsBool($orderus->hasMagicShield());
    }

    public function testHasRapidStrike()
    {
        $orderus = new Orderus();
        $this->assertIsBool($orderus->hasRapidStrike());
    }
}
