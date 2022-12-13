<?php

namespace Tests\Feature;

use App\Patterns\Behaviorural\Observer\EventObserver;
use App\Patterns\Behaviorural\Observer\Student;
use App\Patterns\Behaviorural\Observer\Teacher;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ObserverPatternTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_event_can_notify_multiblie_user()
    {
        $eventObserver = new EventObserver;
        $teacher = new Teacher;
        $student = new Student;
        $eventObserver->attach($teacher);
        $eventObserver->attach($student);
        $eventObserver->addOrder();
        $eventObserver->addOrder();
        $eventObserver->addOrder();
        $this->assertTrue($teacher->getNumberOfEvent() == 3);
    }
}
