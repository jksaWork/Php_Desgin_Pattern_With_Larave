<?php
namespace App\Patterns\Structural\Adapter;

use App\Patterns\Structural\Adapter\Interfaces\DistanceInKilo;
use App\Patterns\Structural\Adapter\Interfaces\DistanceInMeal;

class DistanceAdapter implements DistanceInKilo{
    public $Mesuaer;
    public function __construct(DistanceInMeal $Mesuaer)
    {
        $this->Mesuaer = $Mesuaer;
    }

    public function MeasuareDistance ($distance) :float {
        return $this->Mesuaer->MeasuareDistanceInMeal($distance);
    }
}
