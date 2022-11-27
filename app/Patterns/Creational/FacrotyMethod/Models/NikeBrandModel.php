<?php

namespace App\Patterns\Creational\FacrotyMethod\Models;

use App\Patterns\Creational\FacrotyMethod\Interfaces\BrandInterface;

class NikeBrandModel implements BrandInterface {
    public function getBrandName()
    {
        return "NikeBrandModel";
    }
}
