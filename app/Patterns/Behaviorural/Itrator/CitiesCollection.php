<?php
namespace App\Patterns\Behaviorural\Itrator;
class CitiesCollection {
public $Cities = [];
public function addCity(City $city){
    $this->Cities  [] = $city;
    return $this;
}
public function removeCity(string $city){
    foreach ($this->Cities as $key => $value) {
        if($value->getName() == $city){
            unset($this->Cities[$key]);
        }
    }
}

public function getCities():Array{
    return $this->Cities;
}



}
