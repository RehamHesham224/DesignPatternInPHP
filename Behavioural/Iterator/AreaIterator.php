<?php

namespace Behavioural\Iterator;

use Iterator;
use JetBrains\PhpStorm\Internal\TentativeType;

class AreaIterator implements Iterator
{

    private EgyptCitiesCollection $citiesCollection;
    private $sortedCities=[];
    private $index=0;

    public function __construct(EgyptCitiesCollection $citiesCollection)
    {
        $this->citiesCollection = $citiesCollection;
        $this->sortByArea();
    }

    public function current(): mixed
    {
        return $this->sortedCities[$this->index];

    }

    public function next(): void
    {
        $this->index++;
    }

    public function key(): mixed
    {
        return $this->index;
    }

    public function valid(): bool
    {
        return isset($this->citiesCollection->getEgyptCities()[$this->index]);
    }

    public function rewind(): void
    {
        $this->index=0;
    }
    private function sortByArea(){
        $areas=[];
        $this->sortedCities=$this->citiesCollection->getEgyptCities();
        foreach ($this->citiesCollection->getEgyptCities() as $key =>$city)
        {
            $areas[]=$city->getArea();
        }
        array_multisort($areas,SORT_DESC,$this->sortedCities);
    }
}