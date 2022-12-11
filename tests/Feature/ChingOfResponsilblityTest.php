<?php

namespace Tests\Feature;

use App\Patterns\Behaviorural\ChanigOfResponsilblity\ChaingPatternRequest;
use App\Patterns\Behaviorural\ChanigOfResponsilblity\Sections\BodySection;
use App\Patterns\Behaviorural\ChanigOfResponsilblity\Sections\FooterSection;
use App\Patterns\Behaviorural\ChanigOfResponsilblity\Sections\HeaderSection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ChingOfResponsilblityTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_chaing_of_responsilbiltey_pattern()
    {
        $chaing = new ChaingPatternRequest;
        $header = new HeaderSection;
        $footer = new FooterSection;
        $content = new BodySection;
        $content->setNext($footer);
        $header->setNext($content);
        $header->handler($chaing);
        $this->assertInstanceOf(FooterSection::class, $chaing->handler);
        $this->assertEquals('header--bodysection--footer', $chaing->request_String);
    }
}
