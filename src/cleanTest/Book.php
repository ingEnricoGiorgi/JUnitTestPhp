<?php declare(strict_types=1);

namespace CleanTest;

class Book
{
    private string $uuid;
    private string $isbn;
    private string $titolo;
    private float $prezzo;

    /**
     * Get the value of uuid
     */ 
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * Set the value of uuid
     *
     * @return  self
     */ 
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;

        return $this;
    }

    /**
     * Get the value of isbn
     */ 
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * Set the value of isbn
     *
     * @return  self
     */ 
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;

        return $this;
    }

    /**
     * Get the value of prezzo
     */ 
    public function getPrezzo()
    {
        return $this->prezzo;
    }

    /**
     * Set the value of prezzo
     *
     * @return  self
     */ 
    public function setPrezzo($prezzo)
    {
        $this->prezzo = $prezzo;

        return $this;
    }

    /**
     * Get the value of titolo
     */ 
    public function getTitolo()
    {
        return $this->titolo;
    }

    /**
     * Set the value of titolo
     *
     * @return  self
     */ 
    public function setTitolo($titolo)
    {
        $this->titolo = $titolo;

        return $this;
    }
}
