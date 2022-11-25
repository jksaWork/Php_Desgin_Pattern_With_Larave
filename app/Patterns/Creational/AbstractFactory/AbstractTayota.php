<?php

use App\Patterns\Creational\AbstractFactory\AbstractCarInterface;

class AbstractTayota implements AbstractCarInterface {
    public $price, $tax;
    public function __construct($price , $tax)
    {
        $this->price = $price;
        $this->tax = $tax;
    }
     public function clacThePrice() :int {
        return $this->price + $this->tax +  2000;
    }
}
