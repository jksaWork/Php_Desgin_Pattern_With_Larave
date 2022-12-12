<?php

namespace App\Patterns\Behaviorural\Itrator;

class EvenItrator implements CityItratorInterface
{
    public $index, $collection;
    public function __construct(CitiesCollection $collection)
    {
        $this->collection = $collection;
    }
    public function  current()
    {
        return $this->collection->getCities()[$this->index];
    }
    public function nextIndex()
    {

    }
    public function getIndex()
    {
        return $this->index;
    }
    public function valid()
    {
    }
    public function rewind()
    {
    }
    public function key()
    {
    }
}
