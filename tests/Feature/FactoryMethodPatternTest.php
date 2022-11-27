<?php

namespace Tests\Feature;

use App\Patterns\Creational\FacrotyMethod\JordanFactoryMethod;
use App\Patterns\Creational\FacrotyMethod\Models\JordanBrandModel;
use App\Patterns\Creational\FacrotyMethod\Models\NikeBrandModel;
use App\Patterns\Creational\FacrotyMethod\NikeFactoryMethod;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FactoryMethodPatternTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_factory_method_pattern_can_give_jordan_instance()
    {
        $factory = new JordanFactoryMethod();
        $model = $factory->BulidBrand();
        $this->assertInstanceOf(JordanBrandModel::class,$model);
        $this->assertEquals("JordanBrandModel",$model->getBrandName());
    }


    public function test_factory_method_pattern_can_give_nike_instance()
    {
        $factory = new NikeFactoryMethod();
        $model = $factory->BulidBrand();
        $this->assertInstanceOf(NikeBrandModel::class,$model);
        $this->assertEquals("NikeBrandModel",$model->getBrandName());
    }
}
