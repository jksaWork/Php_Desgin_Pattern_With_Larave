<?php

use App\Patterns\Creational\AbstractFactory\AbstractCarInterface;

class AbstractBMW implements AbstractCarInterface {
    public $price;
    public function __construct($price)
    {
        $this->price = $price;
    }
     public function clacThePrice() :int {
        return $this->price + 2000;
    }
}
