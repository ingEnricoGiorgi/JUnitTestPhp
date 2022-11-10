<?php declare(strict_types=1);
namespace CleanTest;

use CleanTest\Book;
use PHPUnit\Framework\TestCase;
use stdClass;

use CleanTest\Stock;
use Exception;

final class StockTest extends TestCase
{
    
/** @test */
public function testAddBookToVoidStockItem(): void
{
  $book = new Book();
  $book->setUuid(uniqid()) ->setIsbn(strval(rand(0,9999999999))) ->setTitolo("PROVA00") ->setPrezzo(28); 
  $bookStock= new Stock;
  $bookStock->addItem($book);
  $arrayStock=$bookStock->getItems();

  $this->assertCount(1, $arrayStock);
}
       /** @test */
   public function StockRemoveBookException(): void
   {
    $book = new Book();
    $book->setUuid(uniqid()) ->setIsbn(strval(rand(0,9999999999))) ->setTitolo("PROVA00") ->setPrezzo(28); 
    $bookStock= new Stock;
    $this->expectException(Exception::class);
    $this->expectExceptionCode(0);
    $bookStock->removeItem($book);
 }
        /** @test */
        public function StockRemoveBookException1(): void
        {
         $book = new Book();
         $book->setUuid(uniqid()) ->setIsbn(strval(rand(0,9999999999))) ->setTitolo("PROVA00") ->setPrezzo(28); 
         $book2 = new Book();
         $book2->setUuid(uniqid()) ->setIsbn(strval(rand(0,9999999999))) ->setTitolo("PROVA01") ->setPrezzo(28); 
            
         $bookStock= new Stock;
         $bookStock->addItem($book);

         $this->expectException(Exception::class);
         $this->expectExceptionCode(1);
         $bookStock->removeItem($book2);
      }
             /** @test */
             public function StockDoubleRemoveBookException2(): void
             {
              $book = new Book();
              $book->setUuid(uniqid()) ->setIsbn(strval(rand(0,9999999999))) ->setTitolo("PROVA00") ->setPrezzo(28); 
              $bookStock= new Stock;
              $bookStock->addItem($book);
              $bookStock->removeItem($book);
              $this->expectException(Exception::class);
              $this->expectExceptionCode(2);
              $bookStock->removeItem($book);
           }


}