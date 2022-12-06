<?php
namespace App\Patterns\Structural\Decorator;
class Phone {
    private $color;
    public function getColor(){
        return $this->color;
    }
    public function setColor($color){
        $this->color .= $color;
    }
}
