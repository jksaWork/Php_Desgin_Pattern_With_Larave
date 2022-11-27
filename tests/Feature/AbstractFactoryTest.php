<?php

namespace Tests\Feature;

// use AbstractBMW;
// use CarFactory;
// use ;
use \App\Patterns\Creational\AbstractFactory\CarFactory;
use \App\Patterns\Creational\AbstractFactory\AbstractBMW;
use App\Patterns\Creational\AbstractFactory\AbstractTayota;
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
        $factory  =new CarFactory(200);
        $bmwinstance = $factory->CreateBMD();
        $this->assertInstanceOf(AbstractBMW::class, $bmwinstance);
    }

    public function test_abstarct_factory_pattern_check_if_the_factory_can_create_tayota_instance()
    {
        $factory  =new CarFactory(200);
        $bmwinstance = $factory->CreateBMD();
        $this->assertInstanceOf(AbstractBMW::class, $bmwinstance);

        $factory  =new CarFactory(200);
        $Tayotainstance = $factory->CreateTayot();
        // dd($Tayotainstance);
        $this->assertInstanceOf(AbstractTayota::class, $Tayotainstance);
    }
}
