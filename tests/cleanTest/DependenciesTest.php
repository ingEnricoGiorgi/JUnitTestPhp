<?php

declare(strict_types=1);

namespace cleanTest;

use PHPUnit\Framework\TestCase;



final class DependenciesTest extends TestCase{
    public function testProducerFirst():string
    {
        $this->assertTrue(true);

        return 'first';
    }
/**
 * @depends testProducerFirst
 */
    public function testCosumer($str):void
    {
        $this->assertSame('first',$str);
    }

}