<?php
namespace App\Patterns\Behaviorural\Itrator;
class City {
private string $name;
private string $area;

public function __construct(string $name,string $area)
{
    $this->name  = $name;
    $this->area = $area;
}
public function getName(){
    return $this->name;
}
}
