<?php

declare(strict_types=1);

namespace cleanTest;

use cleanTest\Book;
use PHPUnit\Framework\TestCase;
use stdClass;

use cleanTest\Stock;
use Exception;

final class StockTest extends TestCase
{

    /** @test */
 public function givenCreateBook_whenAddItem_thenGetItems(): void
    {
        //given
        $book = new Book();
        $book->setUuid(uniqid())->setIsbn(strval(rand(0, 9999999999)))->setTitolo("PROVA00")->setPrezzo(28);
        //when
        $bookStock = new Stock;
        $bookStock->addItem($book);
        //then
        $arrayStock = $bookStock->getItems();
        $this->assertCount(1, $arrayStock);
    }
    /** @test */
    public function givenCreateBook_whenNotAddBook_thenRemoveBookItemsException0(): void
    {
        //given
        $book = new Book();
        $book->setUuid(uniqid())->setIsbn(strval(rand(0, 9999999999)))->setTitolo("PROVA00")->setPrezzo(28);
        $bookStock = new Stock;
        //when

        //then
        $this->expectException(Exception::class);
        $this->expectExceptionCode(0);
        $bookStock->removeItem($book);
    }
    /** @test */
    public function givenTwoBook_whenAddFirstBook_thenRemoveSecondBookException1(): void
    {
        //given
        $book = new Book();
        $book->setUuid(uniqid())->setIsbn(strval(rand(0, 9999999999)))->setTitolo("PROVA00")->setPrezzo(28);
        $book2 = new Book();
        $book2->setUuid(uniqid())->setIsbn(strval(rand(0, 9999999999)))->setTitolo("PROVA01")->setPrezzo(28);
        //when
        $bookStock = new Stock;
        $bookStock->addItem($book);
        //then
        $this->expectException(Exception::class);
        $this->expectExceptionCode(1);
        $bookStock->removeItem($book2);
    }
    /** @test */
    public function givenCreateBook_whenAddBookAndRemoveBook_thenRemoveBookException2(): void
    {
        //given
        $book = new Book();
        $book->setUuid(uniqid())->setIsbn(strval(rand(0, 9999999999)))->setTitolo("PROVA00")->setPrezzo(28);
        $bookStock = new Stock;
        //when
        $bookStock->addItem($book);
        $bookStock->removeItem($book);
        //then
        $this->expectException(Exception::class);
        $this->expectExceptionCode(2);
        $bookStock->removeItem($book);
    }
}
