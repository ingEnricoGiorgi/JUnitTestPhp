<?php

declare(strict_types=1);

namespace testDouble;

use PHPUnit\Framework\TestCase;
use testDouble\DB;
use testDouble\Somma;


final class MockTest extends TestCase
{
    /** @test */
    public function getNumFromDB(): void
    {

        $dbMock = $this->createMock(DB::class);
        $dbMock->expects($this->atleast(3))
        ->method('getNumFromDB')
        ->willreturn(2);
        $somma= new Somma($dbMock);
        $this->assertSame(3, $somma->sommaDueNumeri());
    }
}
