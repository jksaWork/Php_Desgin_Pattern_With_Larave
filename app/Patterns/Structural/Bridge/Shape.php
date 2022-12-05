<?php
namespace App\Patterns\Structural\Bridge;

use App\Patterns\Structural\Bridge\Interfaces\ShapeColor;

abstract class Shape {
    public function __construct(ShapeColor $shape)
    {
        $this->shapeColor = $shape;
    }

    abstract public function getColorDetails();
}
