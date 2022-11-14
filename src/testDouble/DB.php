<?php declare(strict_types=1);
namespace testDouble;
final class DB
{
    public function getNumFromDB():int
    {
        $db= new PDO('mysql:host-localhost;dbname=test','user','pass');
        $row=$db->query('SELECT');
        return $row(0);
    }

}