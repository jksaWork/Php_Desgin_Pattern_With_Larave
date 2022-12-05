<?php

namespace Tests\Feature;

use App\Patterns\Structural\DataMarpar\SystemStorge;
use App\Patterns\Structural\DataMarpar\UserMarpar;
use App\Patterns\Structural\DataMarpar\UserModel;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DataMarperDesignPatternTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_data_marpar_desgin_pattern_test()
    {
        // Init Model
        $userModel = new UserModel(['password' => 'password' , 'username' => 'username']);
        $userModel2 = new UserModel(['password' => 'password' , 'username' => 'username']);
        $userModel3 = new UserModel(['password' => 'password' , 'username' => 'username']);
        // inint Storage
        $Storage = new SystemStorge([]);
        // inint Maraper
        $marpaer = new  UserMarpar($Storage);
        // Assertion Section
        $this->assertTrue($marpaer->SaveData($userModel));
        $this->assertTrue($marpaer->SaveData($userModel2));
        $this->assertTrue($marpaer->SaveData($userModel3));
        $this->assertEquals(count($marpaer->findAll()) , 3);
        // dd($marpaer->find(1));
        $this->assertEquals($userModel3 ,$marpaer->find(3));
    }
}
