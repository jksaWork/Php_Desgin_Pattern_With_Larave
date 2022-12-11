<?php
namespace App\Patterns\Behaviorural\ChanigOfResponsilblity;

class ChaingPatternRequest{
public $is_done = false;
public $request_String;
public HandlerInterface $handler;
public function setHandler(HandlerInterface $handler){
    $this->handler = $handler;
}
}
