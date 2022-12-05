<?php
namespace App\Patterns\Structural\Bridge;

use App\Patterns\Structural\Bridge\Interfaces\ShapeColor;

class Circle  extends Shape {
    public  $shapeColor;
    /**
     * @var ShapeColor $shape
     * */
    public function __construct(ShapeColor $shape)
    {
        $this->shapeColor = $shape;
    }

    public function getShape(){
        return "Circle";
    }

    public function getColor(){
        return $this->shapeColor->getColor();
    }

    public function getColorDetails()
    {
        return "Hello This is Me";
    }
}
