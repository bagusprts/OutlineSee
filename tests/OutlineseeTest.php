<?php
/**
 * Tests for OutlineSee
 */

use PHPUnit\Framework\TestCase;
use Outlinesee\Outlinesee;

class OutlineseeTest extends TestCase {
    private Outlinesee $instance;

    protected function setUp(): void {
        $this->instance = new Outlinesee(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Outlinesee::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
