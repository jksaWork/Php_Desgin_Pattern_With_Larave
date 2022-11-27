<?php
namespace App\Patterns\Creational\AbstractFactory;

class CarFactory {
    public $price , $tax = 213;
    public function __construct($price)
    {
        $this->price = $price;
    }
    public function CreateBMD() : AbstractBMW {
        return new AbstractBMW($this->price);
    }
    public function CreateTayot() : AbstractTayota
    {
        return new AbstractTayota($this->price , $this->tax);
    }

}
