<?php

namespace Tests\Feature;

use App\Patterns\Structural\Bridge\Circle;
use App\Patterns\Structural\Bridge\Models\BlueShape;
use App\Patterns\Structural\Bridge\Models\RedShape;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BridgeDesginPatternTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_bridge_desgin_pattern_can_make_diffrent_shape()
    {
        $redCircle = new Circle(new RedShape());
        $this->assertEquals($redCircle->getColor() , 'red');

        $redCircle = new Circle(new BlueShape());
        $this->assertEquals($redCircle->getColor() , 'Blue');
    }
}
