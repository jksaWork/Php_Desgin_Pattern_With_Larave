<?php

namespace App\Patterns\Creational\AbstractFactory;

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
