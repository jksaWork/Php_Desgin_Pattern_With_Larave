<?php

namespace Tests\Feature;

use App\Patterns\Creational\Pool\ComputerPool;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PoolPatternTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @var ComputerPool $pool
     * @return void
     */
    public function test_can_i_pay_more_than_one_computer()
    {
        $pool = new ComputerPool;
        $pool->SaleComputer();
        $pool->SaleComputer();
        $pool->SaleComputer();
        $this->assertEquals(3 , count($pool->BusyComputer));
    }

    public function test_can_i_pay_more_than_one_computer_and_return_more_than_one_computer(){
        $pool = new ComputerPool;
        $Compouter1 = $pool->SaleComputer();
        $Compouter2 = $pool->SaleComputer();
        $Compouter3 = $pool->SaleComputer();
        $pool->ReturnComputer($Compouter3);
        $this->assertNotEquals(3 , count($pool->BusyComputer));
        $this->assertEquals(2 , count($pool->BusyComputer));
    }
}
