<?php

namespace Tests\Feature;

use App\Patterns\Structural\Strategy\Base64Hash;
use App\Patterns\Structural\Strategy\MD5;
use App\Patterns\Structural\Strategy\HashContext as HasCno;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StarageDesginPaternTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_ecrption_statrgy_work_as_expected()
    {
        $md5 = new MD5();
        $conetxt  = new HasCno($md5);
        $data = $conetxt->encrypt("encrpt");
        $this->assertEquals($data[1], 'MD5');
    }

    public function test_ecrption_statrgy_work_as_expecte_2()
    {
        $md5 = new Base64Hash();
        $conetxt  = new HasCno($md5);
        $data = $conetxt->encrypt("encrpt");
        $this->assertNotEquals($data[1], 'MD5');
        $this->assertEquals($data[1], 'BASE_64');
    }
}
