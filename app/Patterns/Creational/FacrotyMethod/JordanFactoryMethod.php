<?php
namespace App\Patterns\Creational\FacrotyMethod;

use App\Patterns\Creational\FacrotyMethod\Interfaces\BrandInterface;
use App\Patterns\Creational\FacrotyMethod\Interfaces\BrandMethosInterface;
use App\Patterns\Creational\FacrotyMethod\Models\JordanBrandModel;

class JordanFactoryMethod implements BrandMethosInterface {
 function BulidBrand()
 {
    return new JordanBrandModel;
 }
}
