<?php

namespace Tests\Feature;

use App\Patterns\Creational\ProtoType\AutoMaticCars;
use App\Patterns\Creational\ProtoType\ManulaCars;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProtoTypePatternTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_i_make_many_clones_with_out_create_new_instance()
    {
        $Model  = new AutoMaticCars;
        for ($i=0; $i <5 ; $i++) {
            $newModel = clone $Model;
            $this->assertInstanceOf(AutoMaticCars::class , $newModel);
        }
    }


    public function test_can_i_make_many_clones_form_manual_cars_with_out_create_new_instance()
    {
        $Model  = new ManulaCars;
        for ($i=0; $i <5 ; $i++) {
            $newModel = clone $Model;
            $this->assertInstanceOf(ManulaCars::class , $newModel);
        }
    }
}
