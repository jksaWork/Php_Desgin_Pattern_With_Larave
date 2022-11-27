<?php
namespace App\Patterns\Creational\AbstractFactory;


use  App\Patterns\Creational\AbstractFactory\AbstractCarInterface;
class AbstractTayota implements AbstractCarInterface {
    public $price, $tax;
    public function __construct($price , $tax)
    {
        $this->price = $price;
        $this->tax = $tax;
        // dd('init Done');
    }
     public function clacThePrice() :int {
        return $this->price + $this->tax +  2000;
    }
}
