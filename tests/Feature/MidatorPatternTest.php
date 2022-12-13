<?php

namespace Tests\Feature;

use App\Patterns\Behaviorural\Midtator\LeftRoad;
use App\Patterns\Behaviorural\Midtator\LefttRoad;
use App\Patterns\Behaviorural\Midtator\RightRoad;
use App\Patterns\Behaviorural\Midtator\RoadMidator as MidtatorRoadMidator;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use RoadMidator;
use Tests\TestCase;

class MidatorPatternTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_midator_desgin_pattern_test()
    {

        $right = new RightRoad();
        $left = new LeftRoad();
        $raodmidaor = new MidtatorRoadMidator($left , $right);
        $raodmidaor->action($left, 'move');
        $raodmidaor->action($right, 'stop');
        $this->assertEquals(true, true);
    }
}
