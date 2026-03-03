<?php
/**
 * Tests for SmartLink
 */

use PHPUnit\Framework\TestCase;
use Smartlink\Smartlink;

class SmartlinkTest extends TestCase {
    private Smartlink $instance;

    protected function setUp(): void {
        $this->instance = new Smartlink(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Smartlink::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
