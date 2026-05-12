<?php
/**
 * Tests for KrakenFutures
 */

use PHPUnit\Framework\TestCase;
use Krakenfutures\Krakenfutures;

class KrakenfuturesTest extends TestCase {
    private Krakenfutures $instance;

    protected function setUp(): void {
        $this->instance = new Krakenfutures(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Krakenfutures::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
