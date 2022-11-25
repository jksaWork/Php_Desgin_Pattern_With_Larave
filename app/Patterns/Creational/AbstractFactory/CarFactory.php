<?php

use App\Patterns\Creational\AbstractFactory;

class CarFactory {
    public $price;
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
