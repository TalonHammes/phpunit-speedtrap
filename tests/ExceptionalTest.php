<?php
declare(strict_types=1);

namespace JohnKary\PHPUnit\Extension\Tests;

use PHPUnit\Framework\TestCase;

class ExceptionalTest extends TestCase
{
    public function testExceptionCanBeThrownInTest()
    {
        $this->expectException('InvalidArgumentException');
        $this->expectExceptionMessage('CODE1');
        throw new \InvalidArgumentException('CODE1');
    }

    public function testSkippedTest()
    {
        $this->markTestSkipped('Skipped tests do not cause Exceptions in SpeedTrap extension');
    }

    public function testIncompleteTest()
    {
        $this->markTestIncomplete('Incomplete tests do not cause Exceptions in SpeedTrap extension');
    }
}
 