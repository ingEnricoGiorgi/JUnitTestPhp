<?php

declare(strict_types=1);

namespace testDouble;

use PHPUnit\Framework\TestCase;
use testDouble\DB;
use testDouble\Somma;


final class StubTest extends TestCase
{
    /** @test */
    public function testStub(): void
    {

        $stub = $this->createStub(DB::class);
        $stub->method('getNumFromDB')->willReturn(1);
        $somma = new Somma($stub);
        $this->assertSame(2, $somma->aggiungiUnita());
    }
}
