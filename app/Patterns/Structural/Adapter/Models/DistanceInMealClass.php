<?php
namespace App\Patterns\Structural\Adapter\Models;

use App\Patterns\Structural\Adapter\Interfaces\DistanceInMeal;

class  DistanceInMealClass implements DistanceInMeal {
    public function MeasuareDistanceInMeal($distance):float
    {
        return $distance / 1600;
    }
}

