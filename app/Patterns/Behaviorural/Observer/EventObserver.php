<?php
namespace App\Patterns\Behaviorural\Observer;

use SplObjectStorage;
use SplObserver;
use SplSubject;

class EventObserver implements SplSubject {
    public $orderNum;
    public SplObjectStorage $observers;

    public function __construct()
    {
        $this->observers = new SplObjectStorage;
    }
    public function attach(SplObserver $observer): void
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer): void
    {
        $this->observers->detach($observer);
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function addOrder(){
        $this->orderNum ++;
        $this->notify();
    }
    public function getOrderNum():int {
        return $this->orderNum;
    }
}
