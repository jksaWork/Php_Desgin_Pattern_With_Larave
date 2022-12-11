<?php
namespace App\Patterns\Behaviorural\ChanigOfResponsilblity\Sections;

use App\Patterns\Behaviorural\ChanigOfResponsilblity\AbstractHandlerClass;
use App\Patterns\Behaviorural\ChanigOfResponsilblity\ChaingPatternRequest;

 class HeaderSection extends AbstractHandlerClass {
    public function handler(ChaingPatternRequest $request)
    {
        // dd('first Setp');
        $request->request_String .= 'header-';
        parent::handler($request);
    }
}
