<?php
/**
 * Tests for ChainLucent
 */

use PHPUnit\Framework\TestCase;
use Chainlucent\Chainlucent;

class ChainlucentTest extends TestCase {
    private Chainlucent $instance;

    protected function setUp(): void {
        $this->instance = new Chainlucent(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Chainlucent::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
