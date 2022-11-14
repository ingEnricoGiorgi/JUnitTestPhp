<?php declare(strict_types=1);

namespace cleanTest;

use Exception;

class Stock
{
    private $items = [];

    public function addItem(Book $book){
        if(!array_key_exists($book->getUuid(), $this->items)){
            $item = StockItem::new($book);
            $this->items[$item->getBook()->getUuid()] = $item;
        }else{
            /** @var StockItem */
            $stockItem = $this->items[$book->getUuid()];
            $stockItem->aggiungi();
        }
    }

    public function removeItem(Book $book){
        if(empty($this->items))
            throw new Exception("Stock completamente vuoto", 0);
        
        if(!array_key_exists($book->getUuid(), $this->items))
            throw new Exception("Il libro con ID [".$book->getUuid()."] non presente in stock", 1);
        
        /** @var StockItem */
        $stockItem = $this->items[$book->getUuid()];
        if($stockItem->getNumero() == 0)
            throw new Exception("Il libro con ID [".$book->getUuid()."] non disponibile in questo momento", 2);

        $stockItem->rimuovi();
    }

    public function getItems(): array
    {
        return $this->items;
    }
}
