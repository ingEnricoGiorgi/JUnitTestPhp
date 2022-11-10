<?php

declare(strict_types=1);

namespace CleanTest;

use CleanTest\Book;
use PHPUnit\Framework\TestCase;
use stdClass;
use CleanTest\StockItem;
use CleanTest\Stock;

final class StockItemTest extends TestCase
{
    /** @test */
    public function givenCreateBook_whenAddBook_thenGetNumeroBook(): void
    {
        //given
        $book = new Book();
        $bookuno = StockItem::new($book);
        //when
        $getBeforeNumero = $bookuno->getNumero();
        $bookuno->aggiungi();
        //after
        $getAfterNumero = $getBeforeNumero + 1;
        $this->assertNotEquals($getBeforeNumero, $getAfterNumero);
    }
    /** @test */
    public function givenCreateBook_whenRemoveBook_thenGetNumeroBook(): void
    {
        //given
        $book = new Book();
        $bookuno = StockItem::new($book);
        $getBeforeNumero = $bookuno->getNumero();
        //when
        $bookuno->rimuovi();
        $getAfterNumero = $getBeforeNumero - 1;
        //after
        $this->assertEquals($getAfterNumero, $bookuno->getNumero());
    }
    /** @test */
    public function givenZeroBook_whenRemoveBook_thenGetNumeroBook(): void
    {
        //given
        $book = new Book();
        $bookuno = StockItem::new($book);
        //when
        $bookuno->rimuovi();
        //after
        $this->assertEquals(0, $bookuno->getNumero());
    }
}
