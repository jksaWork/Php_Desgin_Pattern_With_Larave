<?php
namespace App\Patterns\Behaviorural\ChanigOfResponsilblity;

use App\Patterns\Behaviorural\ChanigOfResponsilblity\Sections\BodySection;
use App\Patterns\Behaviorural\ChanigOfResponsilblity\Sections\FooterSection;
use App\Patterns\Behaviorural\ChanigOfResponsilblity\Sections\HeaderSection;

abstract class AbstractHandlerClass implements HandlerInterface{
    public HandlerInterface $nextHandler;

    /**
     * @var HandlerInterface $HandlerInterface
     * */

    public function setNext(HandlerInterface $HandlerInterface) : HandlerInterface
    {
        $this->nextHandler = $HandlerInterface;
        // if($HandlerInterface instanceof BodySection) dd($this->nextHandler);
        return $this->nextHandler;
    }

    public function handler(ChaingPatternRequest $request)
    {
        if($this->nextHandler){
            return $this->nextHandler->handler($request);
        }
        // return "jksa";
    }
}
