<?php declare(strict_types=1);

namespace CleanTest;

class StockItem
{
    private Book $book;
    private int $numero;

    private function __construct(Book $book)
    {
        $this->book = $book;
        $this->numero = 1;
    }

    public static function new(Book $book): self
    {
        return new self($book);
    }

    public function getNumero()
    {
        return $this->numero;
    }
 
    public function getBook()
    {
        return $this->book;
    }

    public function setBook($book)
    {
        $this->book = $book;

        return $this;
    }

    public function aggiungi(): int
    {
        return ++$this->numero;
    }

    public function rimuovi(): int
    {
        if($this->numero == 0)
            return $this->numero;
        else
            return --$this->numero;
    }
}
