<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use stdClass;

final class AssertTestTrue extends TestCase
{
    public function testTrue():void
    {
        $this->assertTrue(true);
    }
    public function testNotTrue():void
    {
        $this->assertNotTrue(false);
    }

    public function testFalse():void
    {
        /**
         * @var bool
         */
        $pippo=false;
        $this->assertFalse($pippo);
    }

    public function testEquals():void
    {
       $expected=1;
       $actual=1;
       $this->assertEquals($expected,$actual);
    }
    public function testNotEquals():void
    {
       $expected=1;
       $actual=1;
       $this->assertNotEquals($expected,$actual);
    }
    public function testEqualsWithDomDocuments():void
    {
       $expected=new DOMDocument();
       $expected->loadXML('<foo><bar/></foo>');

       $actual=new DOMDocument();
       $actual->loadXML('<foo><bar/></foo>');
       
       $this->assertEquals($expected,$actual);
    }

}