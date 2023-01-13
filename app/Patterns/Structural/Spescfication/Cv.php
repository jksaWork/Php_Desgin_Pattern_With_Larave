<?php
namespace App\Patterns\Structural\Spescfication;
class Cv {
    public Array $languages;
    public $age, $ex;
    public function __construct(Int $age ,Array $languages , Int $ex)
    {
        $this->age = $age;
        $this->languages = $languages;
        $this->ex = $ex;
    }
}
