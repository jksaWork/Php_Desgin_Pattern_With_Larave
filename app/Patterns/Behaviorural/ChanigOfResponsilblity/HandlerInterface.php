<?php
namespace App\Patterns\Behaviorural\ChanigOfResponsilblity;
interface HandlerInterface {
    public function setNext(HandlerInterface $HandlerInterface):HandlerInterface;
    public function handler(ChaingPatternRequest $request);
}
