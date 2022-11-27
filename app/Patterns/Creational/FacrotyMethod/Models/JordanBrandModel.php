<?php
namespace App\Patterns\Creational\FacrotyMethod\Models;
use App\Patterns\Creational\FacrotyMethod\Interfaces\BrandInterface;

class JordanBrandModel implements BrandInterface{
    public function getBrandName()
    {
        return "JordanBrandModel";
    }
}
