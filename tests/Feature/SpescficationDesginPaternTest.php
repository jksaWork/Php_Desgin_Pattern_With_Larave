<?php

namespace Tests\Feature;

use AgeSpecefincations;
use App\Patterns\Structural\Spescfication\AgeSpecefincations as SpescficationAgeSpecefincations;
use App\Patterns\Structural\Spescfication\AndSpesficatiion;
use App\Patterns\Structural\Spescfication\Cv;
use App\Patterns\Structural\Spescfication\LangSpesefication;
use Tests\TestCase;

class SpescficationDesginPaternTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_sepecfication_desing_can_check_the_cv_confirm()
    {
        $php = new LangSpesefication('php');
        $js = new LangSpesefication('js');
        $age = new SpescficationAgeSpecefincations(12);
        $and  = new AndSpesficatiion($php, $js , $age);
        $cv  = new Cv(13,['php','js'],13);
        $value =$and->isStisfedBy($cv);
        $this->assertTrue($value);
    }
}
