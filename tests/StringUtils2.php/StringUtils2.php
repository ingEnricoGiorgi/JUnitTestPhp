<?php

namespace StringUtils2;
use PHPUnit\Framework\TestCase;

class StringUtilsTest2 extends TestCase
{
    /**@test */
    public function givenEmptyString_whenIsBlank_thenTrue(): void{
        //given
        $str='';

        //when
        $act = StringUtils2::isBlank($str);
        //then
        $this->assertTrue($act);
    }
        /**@test */
        public function givenEmptyString_whenIsBlank_thenFalse(): void{
            //given
            $str='';
    
            //when
            $act = StringUtils2::isBlank($str);
            //then
            $this->assertFalse($act);
        }
}