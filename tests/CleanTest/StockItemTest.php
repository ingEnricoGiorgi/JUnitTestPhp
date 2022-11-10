<?php declare(strict_types=1);
namespace CleanTest;

use CleanTest\Book;
use PHPUnit\Framework\TestCase;
use stdClass;
use CleanTest\StockItem;
use CleanTest\Stock;

final class StockItemTest extends TestCase
{
     /** @test */
     public function testStockItem(): void
     {
         $book = new Book();
         $bookuno= StockItem::new($book);
         $getBeforeNumero = $bookuno->getNumero();
         $bookuno->aggiungi();
         $getAfterNumero= $getBeforeNumero+1;
         //order insensitive
         $this->assertNotEquals( $getBeforeNumero, $getAfterNumero);
     }
         /** @test */
         public function testRemoveStockItem(): void
         {
             $book = new Book();
             $bookuno= StockItem::new($book);
             $getBeforeNumero = $bookuno->getNumero();
             $bookuno->rimuovi();
             $getAfterNumero= $getBeforeNumero-1;
             //order insensitive
             $this->assertEquals( $getAfterNumero, $bookuno->getNumero());
         }
                  /** @test */
                  public function testZeroStockItem(): void
                  {
                      $book = new Book();
                      //aggiungo un import Book con ctrl spazio sull'oggetto Book
                      //:: si usa solo per i metodi statici senno la freccia
                      $bookuno= StockItem::new($book);
                      
                      $bookuno->rimuovi();
                      
                      //order insensitive
                      $this->assertEquals( 0, $bookuno->getNumero());
                  }

}