<?php

namespace Tests\Feature;

use App\Patterns\Structural\Decorator\BluePhonePainter;
use App\Patterns\Structural\Decorator\Phone;
use App\Patterns\Structural\Decorator\PhonePainterDecorator;
use App\Patterns\Structural\Decorator\RedPhonePainter;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DecoratorPatternTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_decorator_can_add_functionalty_on_run_time_not_in_complid_time()
    {
        $phone  = new Phone;
        // $bluePhonedec = new BluePhonePainter();
        $redPhonedec = new RedPhonePainter();
        $phoneDecorator = new PhonePainterDecorator($redPhonedec);
        $phoneDecorator->paint($phone);

        $BluePhonePainter = new BluePhonePainter();
        $phoneDecorator = new PhonePainterDecorator($BluePhonePainter);

        $phoneDecorator->paint($phone);
        // dd($phone);
        $this->assertTrue(true);

    }
}
