<?php

namespace Tests\Feature;

use App\Patterns\Structural\Adapter\DistanceAdapter;
use App\Patterns\Structural\Adapter\DistanceMessuaer as AdapterDistanceMessuaer;
use App\Patterns\Structural\Adapter\Models\DistanceOnKelo;
use App\Patterns\Structural\Adapter\Models\DistanceInMealClass;
use App\Structural\Adapter\Models\DistanceInMealClass as ModelsDistanceInMealClass;
use DistanceMessuaer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdapterPaternTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_adapter_pattern_can_masuer_a_distance_with_kilo()
    {
        $noramlKiloDistanceClass = new DistanceOnKelo();
        $NormalDistanceInstance  =new AdapterDistanceMessuaer($noramlKiloDistanceClass);
        $distanceOnKiloMeters =  $NormalDistanceInstance->StartMessuaer(1000);
        $this->assertEquals($distanceOnKiloMeters , 1);
    }

    public function test_adapter_pattern_can_masuer_a_distance_with_Meail()
    {
        $DistanceInMealClass = new DistanceInMealClass();
        $noramlKiloDistanceClass = new DistanceAdapter($DistanceInMealClass);
        $NormalDistanceInstance  = new AdapterDistanceMessuaer($noramlKiloDistanceClass);
        $distanceOnKiloMeters =  $NormalDistanceInstance->StartMessuaer(1600);
        $this->assertEquals($distanceOnKiloMeters , 1);
    }
}
