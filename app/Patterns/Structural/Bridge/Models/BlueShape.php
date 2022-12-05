<?php
namespace App\Patterns\Structural\Bridge\Models;

use App\Patterns\Structural\Bridge\Interfaces\ShapeColor;

class BlueShape implements ShapeColor {
    public function getColor(){
        return 'Blue';
    }
}
