<?php
namespace App\Patterns\Structural\Adapter\AdpaterRealExample;

use Tokens\LoginWithToken;

class TokenAutiticator implements TokenAuthInterface {
    public function TokenLogin($params){
        $authunticator = new LoginWithToken();
        return  $authunticator->TokenLogin($params['value'] , $params['key']);
    }
}
