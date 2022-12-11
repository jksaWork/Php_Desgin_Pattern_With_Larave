<?php
namespace App\Patterns\Behaviorural\ChanigOfResponsilblity\Sections;

use App\Patterns\Behaviorural\ChanigOfResponsilblity\AbstractHandlerClass;
use App\Patterns\Behaviorural\ChanigOfResponsilblity\ChaingPatternRequest;
use App\Patterns\Behaviorural\ChanigOfResponsilblity\HandlerInterface;

 class FooterSection extends AbstractHandlerClass implements HandlerInterface {
    public function handler(ChaingPatternRequest $request)
    {
        $request->request_String .= '-footer';
        $request->setHandler($this);
        $request->is_done = true;
        // parent::handler($request);
    }
}
