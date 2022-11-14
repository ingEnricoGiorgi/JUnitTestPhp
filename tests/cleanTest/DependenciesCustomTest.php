<?php

declare(strict_types=1);

namespace cleanTest;

use PHPUnit\Framework\TestCase;



final class DependenciesCustomTest extends TestCase{
    public function testProducerFirst():array
    {
        
        $car=array(1);
        $this->assertCount(1,$car);
        return $car;
    }
/**
 * @depends testProducerFirst
 */
    public function testConsumer($car):void
    {
        array_pop($car);  
        $this->assertCount(0,$car);
    }

}