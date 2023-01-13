<?php
namespace App\Patterns\Structural\Spescfication;
use App\Patterns\Structural\Spescfication\CV;
use App\Patterns\Structural\Spescfication\SpescifactionInterface;

class AgeSpecefincations  implements SpescifactionInterface{
    public $min_lang;
    public function __construct(int $min_lang)
    {
        $this->min_lang =$min_lang;
    }
    public function isStisfedBy(CV $cv): bool
    {
        return $this->min_lang < $cv->age ;
    }
}
