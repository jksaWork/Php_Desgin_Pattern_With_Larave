<?php

namespace Tests\Feature;

// use AbstractBMW;
// use CarFactory;
// use ;
use \App\Patterns\Creational\AbstractFactory\CarFactory;
use \App\Patterns\Creational\AbstractFactory\AbstractBMW;
use CarFactory as GlobalCarFactory;
// use CarFactory as GlobalCarFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AbstractFactoryTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_abstarct_factory_pattern_check_if_the_factory_can_create_bmw_instance()
    {
        // $response = $this->get('/');
        $factory  =new GlobalCarFactory(200);
        $bmwinstance = $factory->CreateBMD();
        $this->assertInstanceOf(AbstractBMW::class, $bmwinstance);
    }
}
