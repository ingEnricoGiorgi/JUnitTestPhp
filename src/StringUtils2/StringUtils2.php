<?php

namespace StringUtils2;

class StringUtils2{
    public static function isBlank(string $str)
    {
        $esito=true;
        if($str === 'null'){
            return true;
        }

        if($str === ''){
            return true;
        }else{
            return false;
        }

        return $esito;
    }
}
