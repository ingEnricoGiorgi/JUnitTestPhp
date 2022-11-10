<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use stdClass;

final class PlutoTest extends TestCase
{
    /** @test */
    public function testEquals(): void
    {
        
        $expected = array("Volvo", "BMW", "Toyota");
        $actual= array("Volvo", "BMW", "Toyota");
        $this->assertSameSize($expected,$actual);
    }
       /** @test */
      public function testArrayEquals(): void
       {
            
            $expected = array("Volvo", "BMW", "Toyota");
            $actual= array("Volvo", "BMW", "Toyota");
            $this->assertSame( $expected, $actual );
       }
        /** @test */
        public function testArrayOrderEquals(): void
        {
            
            $expected = array("BMW", "Volvo", "Toyota");
            $actual= array("Volvo", "BMW", "Toyota");
            //order insensitive
            $this->assertEqualsCanonicalizing( $expected, $actual );
        }
        /** @test */
        /*
        public function testArrayEqualsWithAssertObjectEquals(): void
        {  
                    
             $expected = array("BMW", "Volvo", "Toyota");
             $actual= array("Volvo", "BMW", "Toyota");
             //order insensitive
             $this->assertObjectEquals($expected, $actual, $method='equals', string $message ='sono uguali');
        }*/
        /** @test */
        public function testisNumeric(): void
        {
            $expected ='12';
            //order insensitive
            $this->assertIsNumeric( $expected);
        }
        /** @test */
        public function testisNotArray(): void
        {
          $expected ='a';
          //order insensitive
          $this->assertIsNotArray( $expected);
        }
        /** @test */
        public function testisFloat(): void
        {
            $expected =4.2;
            //order insensitive
            $this->assertIsFloat( $expected);
        }
        /** @test */
        public function testisBool(): void
        {
            $expected =true;
            //order insensitive
            $this->assertIsBool( $expected);
        }
}