<?php

namespace Behavioural\Iterator;

use Iterator;

class OddIterator implements Iterator
{

    private EgyptCitiesCollection $citiesCollection;
    private $index =1;

    public function __construct(EgyptCitiesCollection $citiesCollection)
    {
        $this->citiesCollection = $citiesCollection;
    }

    public function current(): mixed
    {
        return $this->citiesCollection->getEgyptCities()[$this->index];
    }

    public function next(): void
    {
        $this->index=$this->nextOdd();
    }

    public function key(): mixed
    {
        return $this->index;
    }

    public function valid(): bool
    {
        return isset( $this->citiesCollection->getEgyptCities()[$this->index]);
    }

    public function rewind(): void
    {
        $this->index =1;
    }
    private function nextOdd(){
        for($item=0, $itemMax = count($this->citiesCollection->getEgyptCities()); $item < $itemMax; $item++){
            if(++$this->index %2 ===1){
                return $this->index;
                break;
            }
            return ++$this->index;
        }
    }
}