<?php declare(strict_types=1);
namespace testDouble;
final class Somma
{
    private DB $db;
    public function __construct(DB $db)
    {
        $this->db=$db;
        
    }
    public function aggiungiUnita(){
        $num=$this->db->getNumFromDB();
        return $num+1;
    }
    public function sommaDueNumeri(){
        $num1=$this->db->getNumFromDB();
        $num2=$this->db->getNumFromDB();
        return $num1+$num2;
    }

}