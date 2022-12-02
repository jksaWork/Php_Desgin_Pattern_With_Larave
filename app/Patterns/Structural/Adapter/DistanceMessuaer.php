<?php
namespace App\Patterns\Structural\Adapter;
use App\Patterns\Structural\Adapter\Interfaces\DistanceInKilo;
use App\Patterns\Structural\Adapter\Interfaces\DistanceInMeal;

class DistanceMessuaer {
    public $Messuaer;
    public function __construct(DistanceInKilo $Messuaer)
    {
        $this->Messuaer = $Messuaer;
    }

    public function StartMessuaer($distance){
        return $this->Messuaer->MeasuareDistance($distance);
    }
}
