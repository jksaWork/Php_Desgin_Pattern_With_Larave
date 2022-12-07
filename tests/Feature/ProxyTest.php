<?php

namespace Tests\Feature;

use App\Patterns\Structural\Proxy\ATMProxy;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProxyTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_i_work_with_bnack_with_atm_interface_and_proxy()
    {
        $ATMProxy = new ATMProxy();
        $ATMProxy->withDrawol(1000);
        $ATMProxy->withDrawol(1500);
        $this->assertEquals($ATMProxy->getBlance() , 2500);
    }

    public function test_can_i_work_with_bnack_with_atm_interface_and_proxy_despost_and_drwal(){
        $ATMProxy = new ATMProxy();
        $ATMProxy->withDrawol(1000);
        $ATMProxy->withDrawol(1500);
        $ATMProxy->deposit(1500);
        $this->assertEquals($ATMProxy->getBlance() , 1000);
    }
}
