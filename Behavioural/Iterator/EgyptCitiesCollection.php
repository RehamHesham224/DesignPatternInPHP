<?php

namespace Behavioural\Iterator;

use Exception;
use IteratorAggregate;
use JetBrains\PhpStorm\Internal\TentativeType;
use Traversable;

class EgyptCitiesCollection implements IteratorAggregate
{
    private $egyptCities=[];
    public function addCity(City $city){
        $this->egyptCities[]=$city;
        return $this;
    }
    public function removeCity(string $name){
        foreach($this->egyptCities as $key=>$city) {
            if($city->getName()===$name){
                unset($this->egyptCities[$key]);
            }
        }
        return $this;
    }

    /**
     * @return array
     */
    public function getEgyptCities(): array
    {
        return $this->egyptCities;
    }

    public function getIterator(): Traversable
    {
        return new OddIterator($this);
    }

    public function getEvenIterator(): Traversable
    {
        return new EvenIterator($this);
    }
    public function getAreaIterator(): Traversable
    {
        return new AreaIterator($this);
    }
}