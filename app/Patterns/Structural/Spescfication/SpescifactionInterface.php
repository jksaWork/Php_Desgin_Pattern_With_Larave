<?php
namespace App\Patterns\Structural\Spescfication;
interface SpescifactionInterface {
    public function isStisfedBy(CV $cv):bool;
}
