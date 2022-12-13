<?php
namespace App\Patterns\Behaviorural\Observer;

use SplObserver;
use SplSubject;

class Teacher implements  SplObserver {
    /**
    * @var EventObserver $subject
    */

    public $number_of_event;
    public function update(SplSubject $subject): void
    {
        $this->number_of_event = $subject->getOrderNum();
    }

    public function getNumberOfEvent(){
        return $this->number_of_event;
    }
}
