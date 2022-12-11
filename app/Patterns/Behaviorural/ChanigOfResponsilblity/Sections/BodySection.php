<?php
namespace App\Patterns\Behaviorural\ChanigOfResponsilblity\Sections;

use App\Patterns\Behaviorural\ChanigOfResponsilblity\AbstractHandlerClass;
use App\Patterns\Behaviorural\ChanigOfResponsilblity\ChaingPatternRequest;

 class BodySection extends AbstractHandlerClass {
    public function handler(ChaingPatternRequest $request)
    {
        $request->request_String .= '-bodysection-';
        parent::handler($request);
    }
}
