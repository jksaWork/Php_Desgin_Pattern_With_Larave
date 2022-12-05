<?php
namespace App\Patterns\Structural\Bridge\Models;

use App\Patterns\Structural\Bridge\Interfaces\ShapeColor;

class RedShape implements ShapeColor {
    public function getColor(){
        return 'red';
    }
}
