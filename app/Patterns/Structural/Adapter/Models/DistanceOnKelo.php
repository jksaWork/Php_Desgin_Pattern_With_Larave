<?php
namespace App\Patterns\Structural\Adapter\Models;

use App\Patterns\Structural\Adapter\Interfaces\DistanceInKilo;
use App\Patterns\Structural\Adapter\Interfaces\DistanceInMeal;
// use PhpParser\Node\Expr\Cast\Double;

class  DistanceOnKelo implements DistanceInKilo {
    public function MeasuareDistance($distance): float
    {
        return $distance / 1000;
    }
}

