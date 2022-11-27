<?php
namespace App\Patterns\Creational\FacrotyMethod;

use App\Patterns\Creational\FacrotyMethod\Interfaces\BrandInterface;
use App\Patterns\Creational\FacrotyMethod\Interfaces\BrandMethosInterface;
use App\Patterns\Creational\FacrotyMethod\Models\NikeBrandModel;

class NikeFactoryMethod implements BrandMethosInterface {
 function BulidBrand()
 {
    return new NikeBrandModel;
 }
}
