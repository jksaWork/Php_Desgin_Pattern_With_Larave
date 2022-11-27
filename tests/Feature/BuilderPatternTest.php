<?php

namespace Tests\Feature;

use App\Patterns\Creational\Bulider\AdminPageBulider;
use App\Patterns\Creational\Bulider\Producer\PageProducer;
use App\Patterns\Creational\Bulider\UserPageBulider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BuilderPatternTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_bilder_patern_can_builde_a_admin_page()
    {
        $producer  = new PageProducer(new AdminPageBulider);
        $this->assertInstanceOf(AdminPageBulider::class, $producer->interface);
        $this->assertNotEmpty($producer->ProduceThePage());
    }

    public function test_bilder_patern_can_builde_vistor_page_or_user_page()
    {
        $producer  = new PageProducer(new UserPageBulider);
        $this->assertInstanceOf(UserPageBulider::class, $producer->interface);
        $this->assertNotEmpty($producer->ProduceThePage());
    }
}
