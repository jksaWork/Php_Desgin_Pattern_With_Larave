<?php

namespace Tests\Feature;

use App\Patterns\Structural\Adapter\AdpaterRealExample\AdapterLoginExample;
use App\Patterns\Structural\Adapter\AdpaterRealExample\BasicAuth;
use App\Patterns\Structural\Adapter\AdpaterRealExample\BasicAuthOticator;
use App\Patterns\Structural\Adapter\AdpaterRealExample\TokenAuth;
use App\Patterns\Structural\Adapter\AdpaterRealExample\TokenAutiticator;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
// use Laravel\Sanctum\Events\TokenAuthenticated;
use Tests\TestCase;

class AdapateRealExampleLoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_adapate_and_warper_can_i_login_with_user_name_and_passsword()
    {
        $FirstInterface = new BasicAuthOticator();
        $basicLoginInstancec =  new BasicAuth($FirstInterface);
        $loginAdapter  = new AdapterLoginExample($basicLoginInstancec);
        $credtinals = [
            'username' => 'jksa',
            'password' => '123456',
        ];
        $Autnticateedresult = $loginAdapter->login($credtinals);
        $this->assertEquals($Autnticateedresult , 'jksa-123456');
    }


    public function test_adapate_and_warper_can_i_login_with_uuser_token_and_key()
    {
        $basicLoginInstancec = $this->createMock(TokenAuth::class);
        $basicLoginInstancec
        ->expects($this->once())
        ->method('login')
        ->willReturn('test-test');
        $loginAdapter  = new AdapterLoginExample($basicLoginInstancec);
        $credtinals = [
            'key' => 'jksa',
            'value' => '123456',
        ];
        $Autnticateedresult = $loginAdapter->login($credtinals);
        $this->assertEquals($Autnticateedresult , "test-test");
    }
}
